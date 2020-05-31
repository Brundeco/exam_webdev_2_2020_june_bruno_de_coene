@extends('layouts.app')

@section('content')

{{-- {{ $data }} --}}

<div class="main-wrapper">
    <div class="about-section">
        <div class="about-left">
            <h2 class="main-section-title">{{ $data['section_title'] }}</h2>
            <p> {{ $data['section_content'] }} </p>
            <a class="main-cta-light" href=""> {{ $data['button_text'] }} </a>
        </div>
        <div class="about-right"></div>
    </div>
</div>

@endsection