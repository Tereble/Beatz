@extends('layouts.master')

@include('partial.sidebar')
@include('partial.master_head')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit Song</h5>
                <hr />
                <div class="form-body mt-4">
                    <form method="POST" action="{{ route('song.update', $song->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="border border-3 p-4 rounded">
                                    <!-- Song Title -->
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Song Title</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="inputProductTitle" 
                                            name="title" 
                                            placeholder="Enter title" 
                                            value="{{ old('title', $song->title) }}" 
                                            required>
                                    </div>
                                    
                                    <!-- Artist -->
                                    <div class="mb-3">
                                        <label for="artist" class="form-label">Artist</label>
                                        <input 
                                            type="text" 
                                            name="artist" 
                                            id="artist" 
                                            class="form-control" 
                                            placeholder="Enter artist name" 
                                            value="{{ old('artist', $song->artist) }}" 
                                            required>
                                    </div>

                                    <!-- Playlist -->
                                    <div class="mb-3">
                                        <label for="playlist" class="form-label">Playlist</label>
                                        <select name="playlist_id" id="playlist" class="form-select">
                                            <option value="" disabled>Select Playlist</option>
                                            @foreach ($playlists as $playlist)
                                                <option value="{{ $playlist->id }}" 
                                                    {{ $song->playlist_id == $playlist->id ? 'selected' : '' }}>
                                                    {{ $playlist->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Genre -->
                                    <div class="mb-3">
                                        <label for="genre" class="form-label">Genre</label>
                                        <select name="genre_id" id="genre" class="form-select" required>
                                            <option value="" disabled>Select Genre</option>
                                            @foreach ($genres as $genre)
                                                <option value="{{ $genre->id }}" 
                                                    {{ $song->genre_id == $genre->id ? 'selected' : '' }}>
                                                    {{ $genre->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Song File -->
                                    <div class="mb-3">
                                        <label for="song_file" class="form-label">Upload Song (Optional)</label>
                                        <input 
                                            type="file" 
                                            name="song_file" 
                                            id="song_file" 
                                            class="form-control" 
                                            accept=".mp3, .wav">
                                        <small class="text-muted">Leave empty to retain the current song file.</small>
                                    </div>

                                    <!-- Current Song -->
                                    <div class="mb-3">
                                        <label for="current_song" class="form-label">Current Song</label>
                                        <p><a href="{{ Storage::url($song->file_path) }}" target="_blank">Listen to current file</a></p>
                                    </div>

                                    <!-- Duration -->
                                    <div class="mb-3">
                                        <label for="duration" class="form-label">Duration (seconds)</label>
                                        <input 
                                            type="text" 
                                            name="duration" 
                                            id="duration" 
                                            class="form-control" 
                                            value="{{ old('duration', $song->duration) }}" 
                                            readonly>
                                    </div>

                                    <!-- Album Image -->
                                    <div class="mb-3">
                                        <label for="image-uploadify" class="form-label">Album Image</label>
                                        <input 
                                            id="image-uploadify" 
                                            type="file" 
                                            name="image" 
                                            class="form-control">
                                        <small class="text-muted">Leave empty to retain the current image.</small>
                                    </div>

                                    <!-- Current Album Image -->
                                    <div class="mb-3">
                                        <label for="current_image" class="form-label">Current Album Image</label>
                                        @if ($song->image_path)
                                            <img src="{{ Storage::url($song->image_path) }}" alt="Album Image" class="img-thumbnail" style="max-height: 200px;">
                                        @else
                                            <p>No album image uploaded.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="row mt-3">
                            <div class="col-lg-8">
                                <button type="submit" class="btn btn-primary">Update Song</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.getElementById('song_file').addEventListener('change', function(event) {
        const file = event.target.files[0];

        if (file) {
            const audio = document.createElement('audio');
            audio.src = URL.createObjectURL(file);

            audio.addEventListener('loadedmetadata', function() {
                document.getElementById('duration').value = Math.floor(audio.duration);
            });
        }
    });
</script>
@endpush
