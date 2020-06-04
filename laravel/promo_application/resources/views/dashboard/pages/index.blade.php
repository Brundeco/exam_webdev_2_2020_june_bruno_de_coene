@extends('layouts.side')

@section('content')

<div class="table-wrapper">
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
    @foreach ($pages as $item)
    <div class="flex-row flex-row-color-1">
        <div class="flex-col flex-col-small">{{ $item->id }}</div>
        <div class="flex-col">{{ ucfirst($item->page_title) }}</div>
        <div class="flex-col">
            @if ($item->page_title === 'blog')
            <a class="admin-btn btn-1" href="{{ route('blog.index') }}" class="btn">Edit</a>
            @else
            <a class="admin-btn btn-1" href="{{ route('pages.edit', $item->id) }}" class="btn">Edit</a>
            @endif
        </div>
    </div>
    @endforeach
</div>

@endsection