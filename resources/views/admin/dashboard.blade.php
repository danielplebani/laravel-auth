@extends('layouts.admin')

@section('content')
    <div id="dashboard">
        <div class="container">
            <h1 style="font-family: 'Kanit', sans-serif;" class="text-secondary my-4 text-white">
                {{ __('Dashboard') }}
            </h1>

            <div class="d-flex flex-column gap-4">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            {{ Auth::user()->name }}, {{ __('ti sei autenticato!') }}
                        </div>
                    </div>
                </div>

                <div class="col d-flex gap-5">
                    <a style="text-decoration: none" href="/profile"><div id="my-profile">
                        <div class="card">
                            <div class="card__img"><svg xmlns="http://www.w3.org/2000/svg" width="100%">
                                    <rect fill="#ffffff" width="540" height="450"></rect>
                                    <defs>
                                        <linearGradient id="a" gradientUnits="userSpaceOnUse" x1="0"
                                            x2="0" y1="0" y2="100%"
                                            gradientTransform="rotate(222,648,379)">
                                            <stop offset="0" stop-color="#ffffff"></stop>
                                            <stop offset="1" stop-color="#FC726E"></stop>
                                        </linearGradient>
                                        <pattern patternUnits="userSpaceOnUse" id="b" width="300" height="250"
                                            x="0" y="0" viewBox="0 0 1080 900">
                                            <g fill-opacity="0.5">
                                                <polygon fill="#444" points="90 150 0 300 180 300"></polygon>
                                                <polygon points="90 150 180 0 0 0"></polygon>
                                                <polygon fill="#AAA" points="270 150 360 0 180 0"></polygon>
                                                <polygon fill="#DDD" points="450 150 360 300 540 300"></polygon>
                                                <polygon fill="#999" points="450 150 540 0 360 0"></polygon>
                                                <polygon points="630 150 540 300 720 300"></polygon>
                                                <polygon fill="#DDD" points="630 150 720 0 540 0"></polygon>
                                                <polygon fill="#444" points="810 150 720 300 900 300"></polygon>
                                                <polygon fill="#FFF" points="810 150 900 0 720 0"></polygon>
                                                <polygon fill="#DDD" points="990 150 900 300 1080 300"></polygon>
                                                <polygon fill="#444" points="990 150 1080 0 900 0"></polygon>
                                                <polygon fill="#DDD" points="90 450 0 600 180 600"></polygon>
                                                <polygon points="90 450 180 300 0 300"></polygon>
                                                <polygon fill="#666" points="270 450 180 600 360 600"></polygon>
                                                <polygon fill="#AAA" points="270 450 360 300 180 300"></polygon>
                                                <polygon fill="#DDD" points="450 450 360 600 540 600"></polygon>
                                                <polygon fill="#999" points="450 450 540 300 360 300"></polygon>
                                                <polygon fill="#999" points="630 450 540 600 720 600"></polygon>
                                                <polygon fill="#FFF" points="630 450 720 300 540 300"></polygon>
                                                <polygon points="810 450 720 600 900 600"></polygon>
                                                <polygon fill="#DDD" points="810 450 900 300 720 300"></polygon>
                                                <polygon fill="#AAA" points="990 450 900 600 1080 600"></polygon>
                                                <polygon fill="#444" points="990 450 1080 300 900 300"></polygon>
                                                <polygon fill="#222" points="90 750 0 900 180 900"></polygon>
                                                <polygon points="270 750 180 900 360 900"></polygon>
                                                <polygon fill="#DDD" points="270 750 360 600 180 600"></polygon>
                                                <polygon points="450 750 540 600 360 600"></polygon>
                                                <polygon points="630 750 540 900 720 900"></polygon>
                                                <polygon fill="#444" points="630 750 720 600 540 600"></polygon>
                                                <polygon fill="#AAA" points="810 750 720 900 900 900"></polygon>
                                                <polygon fill="#666" points="810 750 900 600 720 600"></polygon>
                                                <polygon fill="#999" points="990 750 900 900 1080 900"></polygon>
                                                <polygon fill="#999" points="180 0 90 150 270 150"></polygon>
                                                <polygon fill="#444" points="360 0 270 150 450 150"></polygon>
                                                <polygon fill="#FFF" points="540 0 450 150 630 150"></polygon>
                                                <polygon points="900 0 810 150 990 150"></polygon>
                                                <polygon fill="#222" points="0 300 -90 450 90 450"></polygon>
                                                <polygon fill="#FFF" points="0 300 90 150 -90 150"></polygon>
                                                <polygon fill="#FFF" points="180 300 90 450 270 450"></polygon>
                                                <polygon fill="#666" points="180 300 270 150 90 150"></polygon>
                                                <polygon fill="#222" points="360 300 270 450 450 450"></polygon>
                                                <polygon fill="#FFF" points="360 300 450 150 270 150"></polygon>
                                                <polygon fill="#444" points="540 300 450 450 630 450"></polygon>
                                                <polygon fill="#222" points="540 300 630 150 450 150"></polygon>
                                                <polygon fill="#AAA" points="720 300 630 450 810 450"></polygon>
                                                <polygon fill="#666" points="720 300 810 150 630 150"></polygon>
                                                <polygon fill="#FFF" points="900 300 810 450 990 450"></polygon>
                                                <polygon fill="#999" points="900 300 990 150 810 150"></polygon>
                                                <polygon points="0 600 -90 750 90 750"></polygon>
                                                <polygon fill="#666" points="0 600 90 450 -90 450"></polygon>
                                                <polygon fill="#AAA" points="180 600 90 750 270 750"></polygon>
                                                <polygon fill="#444" points="180 600 270 450 90 450"></polygon>
                                                <polygon fill="#444" points="360 600 270 750 450 750"></polygon>
                                                <polygon fill="#999" points="360 600 450 450 270 450"></polygon>
                                                <polygon fill="#666" points="540 600 630 450 450 450"></polygon>
                                                <polygon fill="#222" points="720 600 630 750 810 750"></polygon>
                                                <polygon fill="#FFF" points="900 600 810 750 990 750"></polygon>
                                                <polygon fill="#222" points="900 600 990 450 810 450"></polygon>
                                                <polygon fill="#DDD" points="0 900 90 750 -90 750"></polygon>
                                                <polygon fill="#444" points="180 900 270 750 90 750"></polygon>
                                                <polygon fill="#FFF" points="360 900 450 750 270 750"></polygon>
                                                <polygon fill="#AAA" points="540 900 630 750 450 750"></polygon>
                                                <polygon fill="#FFF" points="720 900 810 750 630 750"></polygon>
                                                <polygon fill="#222" points="900 900 990 750 810 750"></polygon>
                                                <polygon fill="#222" points="1080 300 990 450 1170 450"></polygon>
                                                <polygon fill="#FFF" points="1080 300 1170 150 990 150"></polygon>
                                                <polygon points="1080 600 990 750 1170 750"></polygon>
                                                <polygon fill="#666" points="1080 600 1170 450 990 450"></polygon>
                                                <polygon fill="#DDD" points="1080 900 1170 750 990 750"></polygon>
                                            </g>
                                        </pattern>
                                    </defs>
                                    <rect x="0" y="0" fill="url(#a)" width="100%" height="100%"></rect>
                                    <rect x="0" y="0" fill="url(#b)" width="100%" height="100%"></rect>
                                </svg></div>
                            <div class="card__avatar">
                                <img style="width: 100px" src="{{ asset('img/user.webp') }}">
                            </div>
                            <div class="card__title">{{ Auth::user()->name }}</div>
                            <div class="card__subtitle">Full Stack Web Developer</div>
                        </div>
                    </div></a>

                    <div id="social">
                        <div class="main">
                            <div class="up">
                                <a href="https://www.instagram.com/plebanidaniel/">
                                    <button class="card1">
                                        <i class="fs-1 fa-brands fa-instagram"></i>
                                    </button>
                                </a>
                                <a href="https://twitter.com/plebani_daniel">
                                    <button class="card2">
                                        <i class="fs-1 fa-brands fa-twitter"></i>
                                    </button>
                                </a>
                            </div>
                            <div class="down">
                                <a href="https://github.com/danielplebani">
                                    <button class="card3">
                                        <i class="fs-1 fa-brands fa-github"></i>
                                    </button>
                                </a>
                                <a href="https://www.linkedin.com/in/daniel-plebani-01a764297/">
                                    <button class="card4">
                                        <i class="fs-1 fa-brands fa-linkedin"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <a style="text-decoration: none" href="{{ route('admin.wallet') }}"><div id="card-wallet" class="col">
                        <div class="card wallet">
                            <div class="overlay"></div>
                            <div class="circle">
                        
                        
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="23 29 78 60" height="60px" width="78px">
                          
                                    <defs></defs>
                                    <g transform="translate(23.000000, 29.500000)" fill-rule="evenodd" fill="none" stroke-width="1" stroke="none" id="icon">
                                        <rect rx="4.70247832" height="21.8788565" width="9.40495664" y="26.0333433" x="67.8357511" fill="#AC8BE9" id="Rectangle-3"></rect>
                                        <rect rx="4.70247832" height="10.962961" width="9.40495664" y="38.776399" x="67.8357511" fill="#6A5297" id="Rectangle-3"></rect>
                                        <polygon points="57.3086772 0 67.1649301 26.3776902 14.4413177 45.0699507 4.58506484 18.6922605" fill="#6A5297" id="Rectangle-2">
                                        </polygon>
                                        <path fill="#8B6FC0" id="Rectangle" d="M0,19.6104296 C0,16.2921718 2.68622235,13.6021923 5.99495032,13.6021923 L67.6438591,13.6021923 C70.9547788,13.6021923 73.6388095,16.2865506 73.6388095,19.6104296 L73.6388095,52.6639057 C73.6388095,55.9821635 70.9525871,58.672143 67.6438591,58.672143 L5.99495032,58.672143 C2.68403068,58.672143 0,55.9877847 0,52.6639057 L0,19.6104296 Z"></path>
                                        <path fill="#F6F1FF" id="Fill-12" d="M47.5173769,27.0835169 C45.0052827,24.5377699 40.9347162,24.5377699 38.422622,27.0835169 L36.9065677,28.6198808 L35.3905134,27.0835169 C32.8799903,24.5377699 28.8078527,24.5377699 26.2957585,27.0835169 C23.7852354,29.6292639 23.7852354,33.7559532 26.2957585,36.3001081 L36.9065677,47.0530632 L47.5173769,36.3001081 C50.029471,33.7559532 50.029471,29.6292639 47.5173769,27.0835169"></path>
                                        <rect height="12.863158" width="15.6082259" y="26.1162588" x="58.0305835" fill="#AC8BE9" id="Rectangle-4"></rect>
                                        <ellipse ry="2.23319575" rx="2.20116007" cy="33.0919007" cx="65.8346965" fill="#FFFFFF" id="Oval">
                                        </ellipse>
                                    </g>
                                </svg>
                        
                            </div>
                            <p>Wallet</p>
                        </div>
                        
                    </div></a>
                </div>

            </div>

        </div>

    </div>
    </div>
@endsection
