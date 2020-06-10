  
@extends('layouts.app')

@section('content')

{{-- {{ dd($data) }} --}}

<div class="main-wrapper">
    <div class="about-section">
        <div class="about-left">
            <h2 class="main-section-title"> {{ $data->section_title }}</h2>
            <p>  {{ $data->content }} </p>
            <a class="main-cta-light" href="{{ $data->button_link }}" target="_blank">  {{ $data->button_text }} </a>
        </div>
        <div class="about-right"></div>
    </div>
</div>

@endsection