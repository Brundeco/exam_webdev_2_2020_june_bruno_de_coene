<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        @if (Auth::user())
        <div class="user-active">
            <h2 class="main-section-title">Admin dashboard</h2>
            <div class="flex-row-homepage">
                @php
                $myString = url()->current();
                @endphp

                @if ((strpos($myString, 'blog') && (strpos($myString, 'show')) !== false))
                <a class="admin-btn btn-1" href="{{ route('page.index') }}">Dashboard
                </a>
                @else
                <a class="admin-btn btn-1" href="{{ route('home') }}">Website
                </a>
                @endif

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item admin-btn btn-3" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        @endif

        <main>
            @yield('content')
        </main>

        <svg class="cursor" width="280" height="280" viewBox="0 0 280 280">
            <defs>
                <filter id="filter-1" x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox">
                    <feTurbulence type="fractalNoise" baseFrequency="0.02 0.15" numOctaves="3" result="warp" />
                    <feDisplacementMap xChannelSelector="R" yChannelSelector="G" scale="0" in="SourceGraphic"
                        in2="warp" />
                </filter>
            </defs>
            <circle class="cursor__inner" cx="140" cy="140" r="100" />
        </svg>
    </div>
</body>

</html>