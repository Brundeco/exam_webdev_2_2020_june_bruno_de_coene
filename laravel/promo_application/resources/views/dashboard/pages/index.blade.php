@extends('layouts.side')

@section('content')

<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link bg-aqua-active" href="#" id="english-link">EN</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#" id="spanish-link">ES</a>
    </li>
</ul>

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
            <div class="flex-row clear-padding">
                <a class="admin-btn btn-1" href="{{ route('pages.edit', $item->id) }}" class="btn">Edit</a>
                <a class="admin-btn btn-3" href="{{ route( str_replace('_nl','', $item->page_title)) }}"
                    class="btn">View</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection