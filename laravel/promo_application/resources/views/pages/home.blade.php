@extends('layouts.app')

@section('content')
<div class="main-wrapper">
    <div class="asmr-section">
        <div class="asmr-left">
            <div class="asmr-left-content">
                <h2>What is asmr anyway?</h2>
                <p>The patter of water droplets hitting the ground; the crisp crushing of
                    a metallic can; the squeaks of air being blown into a balloon.
                    Familiar sounds, sure. But do any of them help you to relax? If they
                    do, then you’ve experienced ASMR (autonomous sensory meridian
                    response).<br><br>
                    ASMR. It’s everywhere lately. On TV, on our devices and articles on it
                    feature in various publications. There are even people who create
                    ASMR content professionally on social media. The App Store is now
                    home to an array of ASMR apps. But what has earned it so much
                    attention? ASMR. It’s everywhere lately. On TV, on our devices and articles on it
                    feature in various publications. There are even people who create
                    ASMR content professionally on social media. The App Store is now
                    home to an array of ASMR apps. But what has earned it so much
                    attention?</p>
                <a class="main-cta-light" href="/about">More info</a>
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