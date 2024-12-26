<?php

namespace App\Http\Controllers\Admin;

use App\Models\Genre;
use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlaylistController extends Controller
{
    public function index()
    {
        $playlists = Playlist::with('songs', 'genre')->get();
        return view('admin.playlist.index', compact('playlists'));
    }


    public function create()
    {
        $genres = Genre::all(); // Fetch all genres
        return view('admin.playlist.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'genre_id' => 'required|exists:genres,id', // Ensure the genre exists in the genres table
            'image' => 'nullable|image|max:2048',
        ]);

        $playlist = new Playlist();
        $playlist->name = $request->name;
        $playlist->genre_id = $request->genre_id; // Save the selected genre's ID

        // Handle image upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('playlists', 'public');
            $playlist->image = $path;
        }

        $playlist->save();

        return redirect()->route('admin.playlist.index')->with('success', 'Playlist created successfully.');
    }


    public function edit($id)
    {
        // Fetch the playlist and genres
        $playlist = Playlist::findOrFail($id);
        $genres = Genre::all();

        // Pass them to the view
        return view('admin.playlist.edit', compact('playlist', 'genres'));
    }
    public function update(Request $request, Playlist $playlist)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'genre_id' => 'required|exists:genres,id',
            'image' => 'nullable|image|max:2048',
        ]);

        // Update playlist details
        $playlist->name = $request->name;
        $playlist->genre_id = $request->genre_id;

        // Handle image upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('playlists', 'public');
            $playlist->image = $path;
        }

        $playlist->save();

        return redirect()->route('admin.playlist.index')->with('success', 'Playlist updated successfully.');
    }

    public function destroy(Playlist $playlist)
    {
        // Check if the playlist has an associated image and delete it
        if ($playlist->image && file_exists(storage_path('app/public/' . $playlist->image))) {
            unlink(storage_path('app/public/' . $playlist->image));
        }

        // Delete the playlist from the database
        $playlist->delete();

        return redirect()->route('admin.playlist.index')->with('success', 'Playlist deleted successfully.');
    }


}
