@extends('layouts.layout')
@section('title', 'Editar Proyecto')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <form class="bg-white rounded px-4 py-3 shadow-sm" action="{{route('projects.update',$project)}}" method="POST">
                    <h1 class="display-4">{{ __('Edit Project') }}</h1>
                    <hr>
                    @csrf
                    @method('PATCH')

                    @include('projects._form', ['btnText' => 'Update'])
                </form>
            </div>
        </div>
    </div>
@endsection

