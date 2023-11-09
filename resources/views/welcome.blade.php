@extends('layouts.app')

@section('content')
    <div id="welcome_page" class="container d-flex flex-column justify-content-around align-items-center">
        <h2 class="text-center">BENVENUTO NEL MIO PORTFOLIO</h2>


        <div id="carousel" class="carousel slide w-50">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/portfolio-online.webp') }}" class="d-block">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/portfolio-2.jpg') }}" class="d-block">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/portfolio-3.png') }}" class="d-block">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/portfolio-4.webp') }}" class="d-block">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/portfolio-5.jpg') }}" class="d-block">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/portfolio-6.jpg') }}" class="d-block">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span style="background-color: rgba(184, 135, 11, 0.5)" class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span style="background-color: rgba(184, 135, 11, 0.5)" class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <p class="text-center">Ciao e grazie per essere qui! Sono Daniel, un appassionato creativo con una passione per il coding. <br> Questo è il mio angolo digitale, dove condivido il mio viaggio creativo e le esperienze che mi hanno plasmato.</p>
    </div>
@endsection
