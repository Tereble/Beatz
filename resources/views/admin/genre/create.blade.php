@extends('layouts.master')
@include('partial.sidebar')
@include('partial.master_head')

@section('content')
<div class="page-wrapper">
<div class="page-content">
<div class="card">
    <div class="card-body p-4">
        <h5 class="card-title">Add Genre</h5>
        <hr/>
        <div class="form-body mt-4">
            <form method="POST" action="{{ route('admin.genre.store') }}" >
                @csrf <!-- Include CSRF token -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="border border-3 p-4 rounded">
                            <!-- Genre Title -->
                            <div class="mb-3">
                                <label for="inputProductTitle" class="form-label">Genre Name</label>
                                <input type="text" class="form-control" id="inputProductTitle" name="name" placeholder="Enter title" required>
                            </div>
                            
                            
                           
                        </div>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <div class="row mt-3">
                    <div class="col-lg-8">
                        <button type="submit" class="btn btn-primary">Save Genre</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection
