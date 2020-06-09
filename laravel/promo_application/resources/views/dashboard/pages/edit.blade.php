@extends('layouts.side')

@section('content')

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
            @endif
            <span class="help-block">{{ trans('cruds.article.fields.full_text_helper') }}</span>
        </div>
    
        <button type="submit">Save</button>
    </div>
 </form>


@endsection
