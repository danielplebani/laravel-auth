@extends('layouts.admin')

@section('content')
    <div id="dashboard">
        <div class="container">
            <h1 class="text-secondary my-4 text-white">
                {{ __('Dashboard') }}
            </h1>
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card">
                        <div class="card-header">{{ __('User Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
