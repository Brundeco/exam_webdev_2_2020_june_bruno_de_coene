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

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link bg-aqua-active" href="#" id="english-link">EN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="spanish-link">ES</a>
            </li>
         </ul>

        <div class="flex-col-md">

            @if ($page->page_title === 'blog')
            <div class="flex-row clear-padding main-section-title">
                <a class="admin-btn btn-3" href="{{ route('blog.index') }}" class="btn">Go to blog overview</a>
            </div>
            <input type="hidden" name="page_intro" value="default">
            <input type="hidden" name="page_content" value="default">
            <input type="hidden" name="section_title" value="default">
            <input type="hidden" name="button_text" value="default">
            @endif

            @if ($page->page_title === 'contact')
            <input type="hidden" name="page_intro" value="default">
            <input type="hidden" name="page_content" value="default">
            <input type="hidden" name="section_title" value="default">
            <input type="hidden" name="button_text" value="default">
            @endif

            @if ($page->page_button === 'contact')
            <input type="hidden" name="page_intro" value="default">
            <input type="hidden" name="page_content" value="default">
            <input type="hidden" name="section_title" value="default">
            <input type="hidden" name="button_text" value="default">
            @endif

            @if ($page->page_intro)
            <div class="form-group">
                <h3>Page intro</h3>
                <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"
                    name="page_intro">{{ $page->page_intro }}</textarea>
            </div>
            @endif

            @if ($page->page_title !== 'blog' and $page->page_title !== 'contact')
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
            @if ($page->button_link)
            <h3>Button link</h3>
            <input type="text" id="defaultContactFormName" class="form-control mb-4" value="{{ $page->button_link }}"
                name="button_link">
            @endif
            @endif

            <div class="form-group">
                <h3>Page header image</h3>
                <div>
                    <input type="file" name="image" class="image-upload">
                </div>
                <input type="text" id="defaultContactFormName" class="form-control mb-4" value="{{ $page->alt }}"
                    name="alt" placeholder="Short image alt text">
            </div>

            <div class="button-wrapper">
                <button class="admin-btn btn-1" type="submit">Save</button>
                <a class="admin-btn btn-3" href="{{ route('page.index') }}" type="submit">Back</a>
            </div>

        </div>


    </form>
</div>

@endsection