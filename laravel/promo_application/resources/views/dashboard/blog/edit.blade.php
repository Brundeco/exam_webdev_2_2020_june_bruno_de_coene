@extends('layouts.side')

@section('content')
<div class="table-wrapper">

    <form class=" border border-light p-5 admin-form"
        action="{{ route('blog.edit', $post->id) }}" method="post">
        @csrf
        <input type="hidden" value="{{ $post->id }}" name="id">

        <div>
            <h2 class="h4 mb-4">Edit {{ $post->title }} </h2>
        </div>

        <h3>Post title</h3>
        <input type="text" id="defaultContactFormName" class="form-control mb-4" value="{{ $post->title }}"
            name="post_title">

        <div class="form-group">
            <h3>Post intro</h3>
            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"
                name="post_intro">{{ $post->intro }}</textarea>
        </div>

        <div class="form-group">
            <h3>Post content</h3>
            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"
                name="post_body">{{ $post->body }}</textarea>
        </div>

        <div class="button-wrapper">
            <button class="admin-btn btn-save" type="submit">Save</button>
            <a class="admin-btn btn-3" href="{{ route('blog.index') }}" type="submit">Back</a>
        </div>

    </form>
</div>

@endsection
