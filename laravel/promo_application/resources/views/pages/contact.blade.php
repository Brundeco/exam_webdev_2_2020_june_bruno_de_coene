@extends('layouts.app')

@section('content')

<div class="contact-section">
    <div class="contact-wrapper">
        <form  action="{{ route('contact.post') }}" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="form-box-left">
                <div class="flex-col-center">
                    <p>Firstname</p>
                    <input type="text" name="firstname" placeholder="Firstname">
                </div>
                <div class="flex-col-center">
                    <p>Lastname</p>
                    <input type="text" name="lastname" placeholder="Lastname">
                </div>
                <div class="flex-col-center">
                    <p>Email</p>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="flex-col-center">
                    <p>Subject</p>
                    <input type="text" name="subject" placeholder="Subject">
                </div>
            </div>
            <div class="form-box-right">
                <div class="flex-col-center">
                    <p>Question</p>
                    <textarea name="content" id="" cols="30" rows="10" placeholder="Your message"></textarea>
                </div>
                <div class="flex-col-center">
                    <a href="">
                        <input type="submit" value="Send" class="main-cta-light">
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection