@extends('layouts.master')
@include('partial.sidebar')
@include('partial.master_head')

@section('content')
<div class="page-wrapper">
<div class="page-content">
<div class="card">
    <div class="card-body p-4">
        <h5 class="card-title">Add song</h5>
        <hr/>
        <div class="form-body mt-4">
            <form method="POST" action="{{ route('admin.song.store') }}" enctype="multipart/form-data">
                @csrf <!-- Include CSRF token -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="border border-3 p-4 rounded">
                            <!-- song Title -->
                            <div class="mb-3">
                                <label for="inputProductTitle" class="form-label">song Title</label>
                                <input type="text" class="form-control" id="inputProductTitle" name="name" placeholder="Enter title" required>
                            </div>
                            
                             <!-- Genre Selection -->
                             <div class="col-12 mb-3">
                                <label for="inputProductType" class="form-label">Playlist</label>
                                <select class="form-select" id="inputProductType" name="genre_id" required>
                                    <option value="" selected disabled>Select Playlist</option>
                                    @foreach ($playlists as $playlist)
                                        <option value="{{ $playlist->id }}">{{ $playlist->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Genre Selection -->
                            <div class="col-12 mb-3">
                                <label for="inputProductType" class="form-label">Genre</label>
                                <select class="form-select" id="inputProductType" name="genre_id" required>
                                    <option value="" selected disabled>Select Genre</option>
                                    @foreach ($genres as $genre)
                                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <!-- Album Image -->
                            <div class="mb-3">
                                <label for="image-uploadify" class="form-label">Album Image</label>
                                <input id="image-uploadify" type="file" name="image" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <div class="row mt-3">
                    <div class="col-lg-8">
                        <button type="submit" class="btn btn-primary">Save song</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection
