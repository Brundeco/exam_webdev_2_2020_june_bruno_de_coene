@extends('layouts.app')

@section('content')

<div class="contact-section">
    <div class="contact-wrapper">
        <form>
            <div class="form-box-left">
                <div>
                    <p>Firstname</p>
                    <input type="text">
                </div>
                <div>
                    <p>Lastname</p>
                    <input type="text">
                </div>
                <div>
                    <p>Email</p>
                    <input type="text">
                </div>
            </div>
            <div class="form-box-right">
                <div>
                    <p>Question</p>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <a href="">
                        <input type="submit" value="Send" class="main-cta-light">
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection