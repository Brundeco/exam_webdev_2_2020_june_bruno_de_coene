@extends('layouts.app')

@section('content')

<div class="blogpost-wrapper">
    <div class="blogpost-left">
        <div class="blogpost-color-bg"></div>
        <div class="blogpost-image">
            <img src="{{ url('/images/header-main.png') }}" alt="">
        </div>
    </div>
    <div class="blogpost-right">
        <h2>Dynamic 3D audio</h2>
        <div class="blogpost-text-wrapper">
            <p>Drifting off for a peaceful night in the land of Nod isn’t always as sin-loo as
                we’d like it to be. There’s
                nothing more frustrating than feeling exhausted yet the moment your head hits the pillow, thoughts
                about everything you didn’t have time to do that day arrive eager for attention. Sleep Orbit’s relaxing
                collection of sounds might just be the perfect alternative to that chatty mind.
            </p>
            <a href="/blog/1">Read more</a>
        </div>
    </div>
</div>

@endsection