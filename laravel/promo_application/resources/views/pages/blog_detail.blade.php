@extends('layouts.side')

@section('content')

<div class="main-wrapper">
    <div class="blogdetail-section">
        <div class="blogdetail-title">
        <h2>{{ $post->title }}</h2>
        </div>
        <div class="blogdetail-content">
            <div class="blogdetail-bg-color"></div>
            <div class="blogdetail-image">
                <img src="{{ url('/images/blog-detail.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <div class="blogdetail-textblock">
        <span> {{ $post->intro }} </span>
        <p> {{  $post->intro }} </p>
    </div>
    <a href="/blog" class="blogdetail main-cta-light">Back</a>

</div>

@endsection