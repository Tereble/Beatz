@extends('layouts.master')
@include('partial.sidebar')
@include('partial.master_head')

@section('content')
<div class="page-wrapper">
<div class="page-content">
<div class="card">
    <div class="card-body">
        <div class="col" style="display: flex;justify-content: flex-end;margin: 10px;">
            <a href="{{ route('admin.song.create') }}" class="btn btn-light px-5"><i class='bx bx-plus mr-1'></i>Add playlist</a>
        </div>
        <table class="table mb-0">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Playlist</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($songs as $song )
                    
               
                <tr>
                    <th scope="row">{{ $song->id }}</th>
                    <td style="width:50px;height:50px;border-raduis:15px"><img src="{{ asset('storage/' . $song->image) }}" alt="Album Image" class="img-thumbnail mt-2" width="50">
                    </td>
                    <td>{{ $song->title }}</td>
                    <td>{{ $song->playlist->name }}</td>
                    <td>{{ $song->genre->name }}</td>
                    <td> <a href="{{ route('admin.song.edit', $song->id) }}"><i class="lni lni-pencil-alt"></i></a></td>
                    <td> <form action="{{ route('admin.song.destroy', $song->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this song?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete"> <i class="lni lni-trash"></i></button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>

{{-- @foreach ($songs as $song)
    <div>
        <h3> by {{ $song->artist }}</h3>
        <audio controls>
            <source src="{{ $song->temporary_url }}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <a href="">Edit</a>
        <form action="" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
{{ $songs->links() }} --}}

@endsection