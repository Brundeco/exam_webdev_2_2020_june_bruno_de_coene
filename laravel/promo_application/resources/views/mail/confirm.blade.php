@extends('layouts.side')

@section('content')
<div class="login-container">
    <div class="login-wrapper">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mail succesfully send!</div>
                <p>We will reach out to you as soon as possible</p>
                <div class="button-wrapper mail-content">
                    <a class="admin-btn btn-3" href="{{ route('home') }}" type="submit">Back to website</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection