@extends('layouts.layout')
@section('title', 'Home')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">
                    Software Developer
                </h1>
                <p class="text-secondary lead">
                    Efficient problem solver. Development of scalable and maintainable web pages, with a
                    good structure and architecture. Extensive experience developing new features for large
                    or new projects made in laravel. Constantly learning new technologies.
                </p>

                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg w-100 my-2 text-white">{{ __('Contact') }}</a>
                <a href="{{ route('projects.index') }}" class="btn btn-outline-primary w-100">{{__('Portfolio')}}</a>

            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid mb-4" src="{{ asset('img/home.svg') }}" alt="Software developer">
            </div>
        </div>


    </div>
@endsection

