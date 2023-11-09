@extends('layouts.app')

@section('content')
    @guest
        <div id="welcome_page" class="container d-flex flex-column align-items-center">
            <h2 class="text-center my-5">REGISTRATI OPPURE EFFETUA IL LOGIN</h2>

            @include('partials.carousel-welcome-page')
        </div>
    @else
        <div id="welcome_page" class="container d-flex flex-column align-items-center">
            <h2 class="text-center my-5">BENVENUTO NEL TUO PORTFOLIO</h2>

            @include('partials.carousel-welcome-page')
        </div>
    @endguest
@endsection
