@extends('layouts.side')

@section('content')

<div class="table-wrapper">

    <form class=" border border-light p-5 admin-form" action="{{ route('blog.store') }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="" name="id">

        <div>
            <h2 class="h4 mb-4">Create new post </h2>
        </div>

        <h3>Post title</h3>
        <input type="text" id="defaultContactFormName" class="form-control mb-4" value="" name="post_title">

        <div class="form-group">
            <h3>Post intro</h3>
            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"
                name="post_intro"></textarea>
        </div>

        <div class="form-group">
            <h3>Post content</h3>
            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"
                name="post_body"></textarea>
        </div>

        <div class="form-group">
            <input class="" type="file" name="image" placeholder="project title" id="" required>
            <input type="text" id="defaultContactFormName" class="form-control mb-4" value="" name="alt"
                placeholder="Short image alt text">
        </div>

        <div class="button-wrapper">
            <button class="admin-btn btn-1" type="submit">Save</button>
            <a class="admin-btn btn-3" href="{{ route('blog.index') }}" type="submit">Back</a>
        </div>
    </form>
</div>

@endsection
