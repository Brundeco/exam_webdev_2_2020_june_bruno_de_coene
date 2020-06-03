@extends('layouts.side')

@section('content')

<div class="table-wrapper">
    <table class="table">
        <div>
            <a class="admin-btn btn-1" href=" {{ route('blog.create') }} " class="btn">Create post</a>
        </div>
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Post title</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $item)
            <tr>
                <th scope="row" class="right-padding-md"> {{ $item->id }} </th>
                <td class="right-padding-md">{{ $item->title }}</td>
                <td class="flex-cell">
                    <a class="admin-btn btn-1" href="{{ route('blog.edit', $item->id) }}" class="btn">Edit</a>
                    <form action="{{ route('blog.delete', $item->id) }}" method="post">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}">
                        <button class="admin-btn btn-delete">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection