@extends('layouts.side')

@section('content')

<div class="table-wrapper">
    <div class="flex-row clear">
        <a class="admin-btn btn-2" href="{{ route('page.index') }}" class="btn">Back to pages</a>
    </div>
    <div class="flex-row flex-row-head">
        <div class="flex-col flex-col-small">
            <h3>#</h3>
        </div>
        <div class="flex-col">
            <h3>Page title</h3>
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
                <a class="admin-btn btn-1" href="{{ route('blog.edit', $item->id) }}" class="btn">Edit</a>
                <form action="{{ route('blog.delete', $item->id) }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $item->id }}">
                    <button class="admin-btn btn-delete">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection