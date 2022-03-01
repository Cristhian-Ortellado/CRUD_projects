@extends('layouts.layout')
@section('title', 'Crear Proyecto')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h1 class="display-4">{{__('Create a Project')}}</h1>
                <hr>

                <form class="bg-white rounded px-4 py-3 shadow-sm" action="{{route('projects.store')}}" method="POST">
                    @csrf
                    @include('projects._form',['btnText' =>'Save'])

                </form>
            </div>
        </div>

    </div>
@endsection

