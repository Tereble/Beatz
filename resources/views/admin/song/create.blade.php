@extends('layouts.master')

@include('partial.sidebar')
@include('partial.master_head')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add Song</h5>
                <hr />
                <div class="form-body mt-4">
                    <form method="POST" enctype="multipart/form-data">
                        @csrf <!-- Include CSRF token -->
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="border border-3 p-4 rounded">
                                    <!-- Song Title -->
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Song Title</label>
                                        <input type="text" class="form-control" id="inputProductTitle" name="title" placeholder="Enter title" required>
                                    </div>
                                    
                                    <!-- Artist -->
                                    <div class="mb-3">
                                        <label for="artist" class="form-label">Artist</label>
                                        <input type="text" name="artist" id="artist" class="form-control" placeholder="Enter artist name" required>
                                    </div>

                                    <!-- Playlist -->
                                    <div class="mb-3">
                                        <label for="playlist" class="form-label">Playlist</label>
                                        <select name="playlist_id" id="playlist" class="form-select">
                                            <option value="" disabled selected>Select Playlist</option>
                                            @foreach ($playlists as $playlist)
                                                <option value="{{ $playlist->id }}">{{ $playlist->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Genre -->
                                    <div class="mb-3">
                                        <label for="genre" class="form-label">Genre</label>
                                        <select name="genre_id" id="genre" class="form-select" required>
                                            <option value="" disabled selected>Select Genre</option>
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

                                    <!-- Song File -->
                                   
                                    <div class="mb-3">
                                        <label for="song_file" class="form-label">Upload Song</label>
                                        <input type="file" name="song_file" id="song_file" class="form-control" accept=".mp3,.wav" required>
                                        <small id="file-error" class="text-danger d-none">Please select a valid audio file (MP3/WAV) under 40MB.</small>
                                    </div>
                                    <div class="progress mb-3 d-none" id="progress-container">
                                        <div class="progress-bar" id="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                    </div>

                                    <!-- Duration (Automatically Filled) -->
                                    {{-- <div class="mb-3">
                                        <label for="duration" class="form-label">Duration (seconds)</label>
                                        <input type="text" name="duration" id="duration" class="form-control" readonly>
                                    </div> --}}

                                   
                                </div>
                            </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="row mt-3">
                            <div class="col-lg-8">
                                <button type="submit" id="submit-btn" class="btn btn-primary" disabled>Submit</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function () {
        const submitButton = $('#submit-btn');
        const progressBarContainer = $('#progress-container');
        const progressBar = $('#progress-bar');
        const fileError = $('#file-error');
        const songInput = $('#song_file');

        // Validate the file when it changes
        songInput.on('change', function () {
            const file = this.files[0];

            if (file) {
                console.log("File selected:", file); // Debug

                // Validate file type
                const allowedTypes = ['audio/mpeg', 'audio/wav'];
                if (!allowedTypes.includes(file.type)) {
                    fileError.text("Invalid file type. Only MP3 and WAV are allowed.").removeClass('d-none');
                    submitButton.prop('disabled', true);
                    console.log("Validation failed: Invalid file type."); // Debug
                    return;
                }

                // Validate file size
                const maxSize = 40 * 1024 * 1024; // 40MB
                if (file.size > maxSize) {
                    fileError.text("File size exceeds 40MB.").removeClass('d-none');
                    submitButton.prop('disabled', true);
                    console.log("Validation failed: File size too large."); // Debug
                    return;
                }

                // Clear error message and enable submit button
                fileError.addClass('d-none');
                submitButton.prop('disabled', false);
                console.log("Validation passed. Submit button enabled."); // Debug
            } else {
                fileError.text("Please select a valid audio file.").removeClass('d-none');
                submitButton.prop('disabled', true);
                console.log("No file selected."); // Debug
            }
        });

        // Handle form submission
        submitButton.on('click', function (e) {
            e.preventDefault();
            const file = songInput[0].files[0];

            if (!file) {
                alert("Please select a file before submitting.");
                return;
            }

            const formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('title', $('#inputProductTitle').val());
            formData.append('artist', $('#artist').val());
            formData.append('playlist_id', $('#playlist').val());
            formData.append('genre_id', $('#genre').val());
            formData.append('song_file', file);

            const imageInput = $('#image-uploadify')[0];
            if (imageInput.files[0]) {
                formData.append('image', imageInput.files[0]);
            }

            // Show progress bar
            progressBarContainer.removeClass('d-none');
            progressBar.css('width', '0%').text('0%');

            // AJAX Request
            $.ajax({
                url: '{{ route('admin.song.store') }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                xhr: function () {
                    const xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener('progress', function (e) {
                        if (e.lengthComputable) {
                            const percentComplete = Math.round((e.loaded / e.total) * 100);
                            console.log(`Upload Progress: ${percentComplete}%`); // Debug
                            progressBar.css('width', percentComplete + '%').text(percentComplete + '%');
                        }
                    });
                    return xhr;
                },
                success: function (response) {
                    alert('File uploaded successfully!');
                    location.reload();
                },
                error: function (xhr) {
                    console.error("Upload failed with status:", xhr.status, xhr.responseText); // Debug
                    alert('Failed to upload file. Please try again.');
                }
            });
        });
    });
</script>

<script>
    console.log('Script loaded successfully');
</script>
<script>
    if (window.jQuery) {
        console.log('jQuery is loaded');
    } else {
        console.log('jQuery is NOT loaded');
    }
</script>

@endpush
@endsection
