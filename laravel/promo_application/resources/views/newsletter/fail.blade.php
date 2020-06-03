@extends('layouts.side')

@section('content')
<div class="login-container">
    <div class="login-wrapper">
            <div class="card subscribe-message">
                <div class="card-header">
                    <h2 class="main-section-title">Oops ...</h2>
                </div>
                <div class="card-body">
                    <p class="subscribe-succes main-paragraph">
                        <span>{{ $data }}, something went wrong</span>
                        You have been subscribed yet.
                    </p>
                    <a href="{{ route('home') }}" class="admin-btn btn-3">Home</a>
                </div>
            </div>
    </div>
</div>
@endsection