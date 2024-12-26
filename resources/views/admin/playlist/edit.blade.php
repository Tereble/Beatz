@extends('layouts.master')
@include('partial.sidebar')
@include('partial.master_head')

@section('content')
<div class="page-wrapper">
<div class="page-content">
<div class="card">
    <div class="card-body p-4">
        <h5 class="card-title">Edit Playlist</h5>
        <hr/>
        <div class="form-body mt-4">
            <form method="POST" action="{{ route('admin.playlist.update', $playlist->id) }}" enctype="multipart/form-data">
                @csrf <!-- Include CSRF token -->
                @method('PUT') <!-- Specify HTTP PUT method -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="border border-3 p-4 rounded">
                            <!-- Playlist Title -->
                            <div class="mb-3">
                                <label for="inputProductTitle" class="form-label">Playlist Title</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="inputProductTitle" 
                                    name="name" 
                                    placeholder="Enter title" 
                                    value="{{ old('name', $playlist->name) }}" 
                                    required>
                            </div>
                            
                            <!-- Genre Selection -->
                            <div class="col-12 mb-3">
                                <label for="inputProductType" class="form-label">Genre</label>
                                <select class="form-select" id="inputProductType" name="genre_id" required>
                                    <option value="" disabled>Select Genre</option>
                                    @foreach ($genres as $genre)
                                        <option 
                                            value="{{ $genre->id }}" 
                                            {{ $playlist->genre_id == $genre->id ? 'selected' : '' }}>
                                            {{ $genre->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <!-- Album Image -->
                            <div class="mb-3">
                                <label for="image-uploadify" class="form-label">Album Image</label>
                                <input 
                                    id="image-uploadify" 
                                    type="file" 
                                    name="image" 
                                    class="form-control">
                                @if ($playlist->image)
                                    <img src="{{ asset('storage/' . $playlist->image) }}" alt="Album Image" class="img-thumbnail mt-2" width="150">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <div class="row mt-3">
                    <div class="col-lg-8">
                        <button type="submit" class="btn btn-primary">Update Playlist</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection
