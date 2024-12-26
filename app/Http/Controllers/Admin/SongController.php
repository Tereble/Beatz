<?php

namespace App\Http\Controllers\Admin;

use App\Models\Song;
use App\Models\Genre;
use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all songs with playlists and generate temporary URLs for playback
        $songs = Song::with('playlist')->paginate(25);

        foreach ($songs as $song) {
            $song->temporary_url = Storage::disk('s3')->temporaryUrl(
                $song->file_path,
                now()->addMinutes(10) // Temporary URL valid for 10 minutes
            );
        }

        return view('admin.song.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        $playlists = Playlist::all();
        return view('admin.song.create', compact('genres', 'playlists'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'artist' => 'required|string|max:255',
                'genre_id' => 'required|exists:genres,id',
                'playlist_id' => 'nullable|exists:playlists,id',
                'song_file' => 'required|mimes:mp3,wav|max:40960', // Limit to 40MB
                'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Optional album image
            ]);
    
            // Debug: If validation passes, inspect validated data
            dd('Validation passed', $validatedData);
    
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Debug: Catch validation errors and output them
            dd('Validation failed', $e->errors());
        }
    
    
        // Check if the file is received
        if (!$request->hasFile('song_file')) {
            dd('No file uploaded'); // Debug: File not received
        }
    
        $file = $request->file('song_file');
    
        // Debug: Check file details
        dd([
            'isValid' => $file->isValid(),
            'originalName' => $file->getClientOriginalName(),
            'extension' => $file->getClientOriginalExtension(),
            'size' => $file->getSize(),
            'path' => $file->getRealPath(),
        ]);
    
        // Upload the song file to S3
        try {
            $filePath = $file->store('songs', 's3'); // Save to 'songs' folder on S3
        } catch (\Exception $e) {
            dd('Error uploading to S3: ' . $e->getMessage()); // Debug: S3 upload failed
        }
    
        // Debug: Confirm file path after upload
        dd('File uploaded to: ' . $filePath);
    
        // Use getID3 to analyze the uploaded file
        $getID3 = new \getID3();
        $fileInfo = $getID3->analyze($file->getRealPath());
    
        // Extract duration from file info
        $duration = isset($fileInfo['playtime_seconds']) ? round($fileInfo['playtime_seconds']) : null;
    
        // Debug: Confirm duration
        dd(['duration' => $duration, 'fileInfo' => $fileInfo]);
    
        if (!$duration) {
            return back()->withErrors(['song_file' => 'Unable to retrieve the duration of the selected file.']);
        }
    
        // Save song metadata to the database
        $song = new Song();
        $song->title = $request->input('title');
        $song->artist = $request->input('artist');
        $song->genre_id = $request->input('genre_id');
        $song->playlist_id = $request->input('playlist_id');
        $song->file_path = $filePath;
        $song->duration = $duration;
    
        // Handle optional album image
        if ($request->hasFile('image')) {
            try {
                $song->image = $request->file('image')->store('album_images', 's3');
            } catch (\Exception $e) {
                dd('Error uploading image to S3: ' . $e->getMessage()); // Debug: S3 image upload failed
            }
        }
    
        // Debug: Confirm before saving
        dd($song);
    
        $song->save();
    
        return redirect()->route('admin.songs.index')->with('success', 'Song uploaded successfully!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $song = Song::findOrFail($id);

        // Generate a temporary URL for playback
        $song->temporary_url = Storage::disk('s3')->temporaryUrl(
            $song->file_path,
            now()->addMinutes(10)
        );

        return view('admin.song.show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $song = Song::findOrFail($id);

        return view('admin.song.edit', compact('song'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'genre_id' => 'required|exists:genres,id',
            'playlist_id' => 'nullable|exists:playlists,id',
            'song_file' => 'nullable|mimes:mp3,wav|max:20480', // Optional file upload, limit to 20MB
        ]);

        // Update song metadata
        $song->title = $request->input('title');
        $song->artist = $request->input('artist');
        $song->genre_id = $request->input('genre_id');
        $song->playlist_id = $request->input('playlist_id');

        // Check if a new song file is uploaded
        if ($request->hasFile('song_file')) {
            // Delete the old file from S3
            if ($song->file_path) {
                Storage::disk('s3')->delete($song->file_path);
            }

            // Upload the new song file to S3
            $filePath = $request->file('song_file')->store('songs', 's3');

            // Get song duration using getID3
            $getID3 = new \getID3();
            $file = $request->file('song_file')->getRealPath();
            $fileInfo = $getID3->analyze($file);
            $duration = isset($fileInfo['playtime_seconds']) ? round($fileInfo['playtime_seconds']) : null;

            // Update file path and duration
            $song->file_path = $filePath;
            $song->duration = $duration;
        }

        $song->save();

        return redirect()->route('admin.songs.index')->with('success', 'Song updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $song = Song::findOrFail($id);

        // Delete the file from S3
        Storage::disk('s3')->delete($song->file_path);

        // Delete the song record from the database
        $song->delete();

        return redirect()->back()->with('success', 'Song deleted successfully!');
    }
}
