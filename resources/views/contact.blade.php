@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">


                <form action="{{ route('messages.store') }}" method="post" class="bg-white shadow rounded py-3 px-4">
                    @csrf
                    <h1 class="display-4">{{ __('Contact') }}</h1>
                    <div class="form-group mb-2">
                        <label for="name">{{ __('Name') }}</label>
                        <input id="name"
                            class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
                            type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="email">{{ __('Email') }}</label>
                        <input
                            class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
                            type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="subject">{{ __('Subject') }}</label>
                        <input
                            class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror"
                            type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}">
                        @error('subject')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="content">{{ __('Content') }}</label>
                        <textarea
                            class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror"
                            name="content" cols="30" rows="10" placeholder="Content">{{ old('content') }}</textarea>
                        @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-2 btn-lg d-block w-100 text-white">{{ __('Submit') }}</button>
                </form>

            </div>
        </div>


    </div>

@endsection

