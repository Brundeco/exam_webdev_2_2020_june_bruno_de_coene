@extends('layouts.side')

@section('content')

<div class="table-wrapper">
    <div class="flex-row clear-margin clear-padding">
        <a class="admin-btn btn-2" href="{{ route('page.index') }}" class="btn">Back to pages</a>
        <a class="admin-btn btn-2" href="{{ route('blog.create') }}" class="btn">Create new post</a>
    </div>
    <div class="flex-row flex-row-head">
        <div class="flex-col flex-col-small">
            <h3>#</h3>
        </div>
        <div class="flex-col">
            <h3>Post title</h3>
        </div>
        <div class="flex-col">
            <h3>Actions</h3>
        </div>
    </div>
    @foreach ($posts as $item)
    <div class="flex-row flex-row-color-1">
        <div class="flex-col flex-col-small">{{ $item->id }}</div>
        <div class="flex-col">{{ ucfirst($item->title) }}</div>
        <div class="flex-col">
            <div class="flex-row">
                <a class="admin-btn btn-1" href="{{ route('blog.edit.get', $item->id) }}" class="btn">Edit</a>
                <form action="{{ route('blog.delete', $item->id) }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $item->id }}">
                    <button class="admin-btn btn-delete">Delete</button>
                </form>
                <a class="admin-btn btn-3 margin-left-sm" href="{{ route('blog.show', $item->id) }}" class="btn">View</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection