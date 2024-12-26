@extends('layouts.master')
@include('partial.sidebar')
@include('partial.master_head')

@section('content')
<div class="page-wrapper">
<div class="page-content">
<div class="card">
    <div class="card-body">
        <div class="col" style="display: flex;justify-content: flex-end;margin: 10px;">
            <a href="{{ route('admin.genre.create') }}" class="btn btn-light px-5"><i class='bx bx-plus mr-1'></i>Add Genre</a>
        </div>
        <table class="table mb-0">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($genres as $genre )
                    
               
                <tr>
                    <th scope="row">{{ $genre->id }}</th>
                    <td>{{ $genre->name }}</td>
                    <td> <a href="{{ route('admin.genre.edit', $genre->id) }}"><i class="lni lni-pencil-alt"></i></a></td>
                    <td> <form action="{{ route('admin.genre.destroy', $genre->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this genre?');">
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
@endsection