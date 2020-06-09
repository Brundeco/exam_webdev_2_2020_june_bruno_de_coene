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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">

        <div class="mollie-payment">
            <a href="{{ route('mollie.register') }}"
                class="admin-btn btn-save mollie-payment-btn">Donate</a>
            <button class="admin-btn admin-btn-3" id="toggleDonations">Donation list</button>
        </div>

        <div class="donation-wrapper">
            <div id="closeDonations">
                <button>CLOSE</button>
            </div>
            <div class="table-wrapper">
                <div class="flex-row flex-row-head-donation">
                    <div class="flex-col flex-col-med">
                        <h3>Donation by</h3>
                    </div>
                    <div class="flex-col">
                        <h3>Message</h3>
                    </div>
                    <div class="flex-col">
                        <h3>Amount</h3>
                    </div>
                </div>
                @foreach($donations as $item)
                    <div class="flex-row flex-row-donation">
                        <div class="flex-col flex-col-med">
                            <p>
                                {{ $item->firstname . ' ' .  $item->lastname }}
                            </p>
                        </div>
                        <div class="flex-col">
                            <p>
                                {{ ucfirst($item->message) }}
                            </p>
                        </div>
                        <div class="flex-col">
                            <p>
                               € {{ bcdiv($item->amount, 1, 2) }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <header>
            @if(Auth::user())
                <div class="user-active">
                    <h2 class="right-margin-md">Welcome {{ Auth::user()->name }}. You can start editting</h2>
                    <div class="flex-row-homepage">
                        <a class="admin-btn btn-1" href="{{ route('page.index') }}">Dashboard
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item admin-btn btn-3" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            @endif

            <div class="header-hero-image">
                <img src="{{ $data->image }}" alt="">
                <div class="header-img-overlay"></div>
                <div class="header-content">
                    <div class="header-top" style="<?php if(Auth::user()) { echo 'margin-top: 15vh;'; } ?>">
                        <nav>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/blog">Blog</a></li>
                                <li><a href="/contact">Contact</a></li>
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @else
                                @endguest
                            </ul>
                    </div>
                    <div class="header-bottom">
                        <h1 class="brand-name">Sleep Orbit</h1>
                        <h2 class="brand-baseline">The beauty of ASMR</h2>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="short-page-intro">
                <p> {{ $data->page_intro }}</p>
            </div>
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

        <footer>
            <div class="footer-fx">
                <div class="footer-img-overlay"></div>
            </div>
            <div class="footer-wrapper">
                <div class="footer-top">
                    <div class="footer-left">
                        <h2>Sleep Orbit</h2>
                    </div>
                    <div class="footer-right">
                        <div class="footer-content">
                            <h3>Get in Touch</h3>
                            <ul>
                                <a href="">
                                    <li>hello@sleeporbit.com</li>
                                </a>
                                <a href="">
                                    <li>Tel. 0496 47 46 66</li>
                                </a>
                                <a href="">
                                    <li>Willem Van Nassaustraat 31,<br>
                                        9000 Gent</li>
                                </a>
                            </ul>
                        </div>
                        <div class="footer-content">
                            <h3>Privacy Policy</h3>
                            <ul>
                                <a href="/policy">
                                    <li>Privacy</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>© 2020 by Sleep Orbit. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
