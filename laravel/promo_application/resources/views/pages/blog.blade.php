@extends('layouts.app')

@section('content')

{{-- {{ dd($posts) }} --}}

@foreach ($posts as $item)
<div class="blogpost-wrapper">
    <div class="blogpost-left">
        <div class="blogpost-color-bg"></div>
        <div class="blogpost-image">
            <img src="{{ $item->image }}" alt="">
        </div>
    </div>
    <div class="blogpost-right">
        <h2> {{ $item->title }} </h2>
        <div class="blogpost-text-wrapper">
            <p>{{ $item->intro }}</p>
            <a href="{{ route('blog.show', $item->id) }}">Read more</a>
        </div>
    </div>
</div>
@endforeach

@endsection