@extends('layouts.app')

@section('content')

{{-- {{ dd($data) }} --}}

<div class="main-wrapper">
    <div class="asmr-section">
        <div class="asmr-left">
            <div class="asmr-left-content">
            <h2>{{ $data->section_title }}</h2>
                <p> {{ $data->content }} </p>
            <a class="main-cta-light" href="/about"> {{ $data->button_text }}</a>
            </div>
        </div>
        <div class="asmr-right">
            <div class="asmr-image-box">
                <img src="{{ url('/images/asmr-dripplets.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <div class="newsletter-section">
        <h2>Subscribe to our newsletter</h2>
        <div class="newsletter-wrapper">
            <div class=" newsletter-right">
                <img src="{{ url('/images/newsletter-form-image.jpg') }}" alt="">
            </div>
            <div class="newsletter-left">
                <form action="">
                    <div>
                        <h3>To keep up to date with news, pop-ups and events, subscribe to the newsletter.</h2>
                    </div>
                    <div>
                        <div>
                            <input type="email" placeholder="Enter your email here">
                        </div>
                        <div>
                            <a href="">
                                <button class="main-cta-dark">Subscribe</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection