@extends('layouts.layout')
@section('title', 'Home')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <img class="img-fluid mb-4" src="{{ asset('img/about.svg') }}" alt="Quién soy?">
            </div>
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">
                    About Me
                </h1>
                <p class="text-secondary lead">
                    I like to be constantly learning new technologies to start new projects with my friends. I'm a big fan of ESports especially League of Legends and StarCraft 2
                </p>

                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg w-100 my-2 text-white">{{__('Contact')}}</a>
                <a href="{{ route('projects.index') }}" class="btn btn-outline-primary w-100">{{ __('Portfolio') }}</a>

            </div>

        </div>


    </div>
@endsection

