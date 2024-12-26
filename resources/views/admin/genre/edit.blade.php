@extends('layouts.master')
@include('partial.sidebar')
@include('partial.master_head')

@section('content')
<div class="page-wrapper">
<div class="page-content">
<div class="card">
    <div class="card-body p-4">
        <h5 class="card-title">Edit Genre</h5>
        <hr/>
        <div class="form-body mt-4">
            <form method="POST" action="{{ route('admin.genre.update', $genre->id) }}" >
                @csrf <!-- Include CSRF token -->
                @method('PUT') <!-- Specify HTTP PUT method -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="border border-3 p-4 rounded">
                            <!-- genre Title -->
                            <div class="mb-3">
                                <label for="inputProductTitle" class="form-label">Genre Name</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="inputProductTitle" 
                                    name="name" 
                                    placeholder="Enter title" 
                                    value="{{ old('name', $genre->name) }}" 
                                    required>
                            </div>
                            
                           
                            
                           
                        </div>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <div class="row mt-3">
                    <div class="col-lg-8">
                        <button type="submit" class="btn btn-primary">Update genre</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection
