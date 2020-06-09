@extends('layouts.side')

@section('content')

<<<<<<< HEAD
<div class="add-top-margin"></div>

<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link bg-aqua-active" href="#" id="english-link">EN</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#" id="spanish-link">ES</a>
    </li>
 </ul>

<form action="{{ route('pages.edit', $page->id) }}" method="put">
    @csrf
    <div class="card-body" id="english-form">
        <div class="form-group">
            <label class="required" for="en_title">{{ trans('cruds.page.fields.title') }} (EN)</label>
            <input class="form-control {{ $errors->has('en_title') ? 'is-invalid' : '' }}" type="text" name="en_title" id="en_title" value="{{ old('en_title', '') }}" required>
            @if($errors->has('en_title'))
                <div class="invalid-feedback">
                    {{ $errors->first('en_title') }}
                </div>
            @endif
            <span class="help-block">{{ trans('cruds.article.fields.title_helper') }}</span>
        </div>
        <div class="form-group">
            <label for="en_full_text">{{ trans('cruds.article.fields.full_text') }} (EN)</label>
            <textarea class="form-control {{ $errors->has('en_full_text') ? 'is-invalid' : '' }}" name="en_full_text" id="en_full_text">{{ old('en_full_text') }}</textarea>
            @if($errors->has('en_full_text'))
                <div class="invalid-feedback">
                    {{ $errors->first('en_full_text') }}
                </div>
            @endif
            <span class="help-block">{{ trans('cruds.article.fields.full_text_helper') }}</span>
        </div>
    </div>
    
    <div class="card-body d-none" id="spanish-form">
        <div class="form-group">
            <label class="required" for="title">{{ trans('cruds.article.fields.title') }} (ES)</label>
            <input class="form-control {{ $errors->has('es_title') ? 'is-invalid' : '' }}" type="text" name="es_title" id="es_title" value="{{ $page->translate('en')->title }}" required>
            @if($errors->has('es_title'))
                <div class="invalid-feedback">
                    {{ $errors->first('es_title') }}
                </div>
=======
<div class="table-wrapper">
    <form class=" border border-light p-5 admin-form" action="{{ route('pages.edit', $page->id) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $page->id }}" name="id">

        <div class="flex-row clear-padding">
            <h2 class="main-section-title">Edit {{ $page->page_title }} page </h2>
        </div>

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
>>>>>>> parent of 1c5f573... Policy page added. Responsiveness added. Dashboard logic updated.
            @endif
            <span class="help-block">{{ trans('cruds.article.fields.title_helper') }}</span>
        </div>
        <div class="form-group">
            <label for="es_full_text">{{ trans('cruds.article.fields.full_text') }} (ES)</label>
            <textarea class="form-control {{ $errors->has('es_full_text') ? 'is-invalid' : '' }}" name="es_full_text" id="es_full_text">{{ old('es_full_text') }}</textarea>
            @if($errors->has('es_full_text'))
                <div class="invalid-feedback">
                    {{ $errors->first('es_full_text') }}
                </div>
<<<<<<< HEAD
            @endif
            <span class="help-block">{{ trans('cruds.article.fields.full_text_helper') }}</span>
=======
                <input type="text" id="defaultContactFormName" class="form-control mb-4" value="" name="alt"
                    placeholder="Short image alt text">
            </div>

            <div class="button-wrapper">
                <button class="admin-btn btn-1" type="submit">Save</button>
                <a class="admin-btn btn-3" href="{{ route('page.index') }}" type="submit">Back</a>
            </div>

>>>>>>> parent of 1c5f573... Policy page added. Responsiveness added. Dashboard logic updated.
        </div>
    
        <button type="submit">Save</button>
    </div>
 </form>


@endsection
