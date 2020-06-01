@extends('layouts.side')

@section('content')

<form class=" border border-light p-5 admin-form" action="{{ route('pages.edit', $page->id) }}" method="post">
    @csrf
    <input type="hidden" value="{{ $page->id }}" name="id">

    <div>
        <h2 class="h4 mb-4">Edit {{ $page->page_title }} page </h2>
    </div>

    @if ($page->section_title)
    <h3>Section title</h3>
    <input type="text" id="defaultContactFormName" class="form-control mb-4" value="{{ $page->section_title }}" name="section_title">
    @endif

    @if ($page->section_intro)
    <div class="form-group">
        <h3>Section intro text</h3>
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2"
            rows="3" name="section_intro">{{ $page->section_intro }}</textarea>
    </div>
    @endif

    @if ($page->content)
    <div class="form-group">
        <h3>Section content</h3>
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2"
            rows="3" name="page_content">{{ $page->content }}</textarea>
    </div>
    @endif

    @if ($page->button_text)
    <h3>Button text</h3>
    <input type="text" id="defaultContactFormName" class="form-control mb-4" value="{{ $page->button_text }}" name="button_text">
    @endif

    <button class="admin-btn btn-1" type="submit">Save</button>

</form>
<!-- Default form contact -->

@endsection