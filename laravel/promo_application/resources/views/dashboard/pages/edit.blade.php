@extends('layouts.side')

@section('content')

<div class="table-wrapper">
    <form class=" border border-light p-5 admin-form" action="{{ route('pages.edit', $page->id) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $page->id }}" name="id">

        <div class="flex-row clear-padding">
            <h2 class="main-section-title">Edit {{ $page->page_title }} page </h2>
        </div>

        @if ($page->page_intro)
        <div class="form-group">
            <h3>Page intro</h3>
            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"
                name="page_intro">{{ $page->page_intro }}</textarea>
        </div>
        @endif

        @if ($page->section_title)
        <h3>Section title</h3>
        <input type="text" id="defaultContactFormName" class="form-control mb-4" value="{{ $page->section_title }}"
            name="section_title">
        @endif

        @if ($page->content)
        <div class="form-group">
            <h3>Section content</h3>
            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"
                name="page_content">{{ $page->content }}</textarea>
        </div>
        @endif

        @if ($page->button_text)
        <h3>Button text</h3>
        <input type="text" id="defaultContactFormName" class="form-control mb-4" value="{{ $page->button_text }}"
            name="button_text">
        @endif

        <div class="form-group">
            <h3>Page header image</h3>
            <input type="file" name="image">
            <input type="text" id="defaultContactFormName" class="form-control mb-4" value="" name="alt"
                placeholder="Short image alt text">
        </div>

        <div class="button-wrapper">
            <button class="admin-btn btn-1" type="submit">Save</button>
            <a class="admin-btn btn-3" href="{{ route('page.index') }}" type="submit">Back</a>
        </div>

    </form>
</div>

@endsection