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
                <img src="{{ asset($post->image) }}" alt="">
            </div>
        </div>
    </div>
    <div class="blogdetail-textblock">
        <span> {{ $post->intro }} </span>
        <p> {{  $post->body }} </p>
    </div>
<a href="{{ route('blog') }}" class="blogdetail main-cta-light">Back</a>

</div>

@endsection