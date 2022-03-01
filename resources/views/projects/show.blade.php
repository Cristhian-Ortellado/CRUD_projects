@extends('layouts.layout')
@section('title', __('Project | '. $project->title))
@section('content')
    <div class="container">

        <div class="bg-white p-5 shadow rounded">

            <h1>{{ $project->title }}</h1>

            <p class="text-secondary">{{ $project->description }}</p>
            <p class="text-black-50"> {{ $project->created_at->diffForHumans() }}</p>
            @isset($project->url)
                <div class="d-flex">
                    <label class="text-black-50" style="margin-right: 10px">Link to the Project  </label>
                    <a href="{{$project->url}}">{{ $project->url }}</a>
                </div>
            @endisset
            <div class="d-flex justify-content-between">
                <a href="{{ route('projects.index') }}">{{ __('Back') }}</a>

                @auth
                    <div class="btn-group btn-group-sm">
                        <a class="btn btn-primary text-white" href="{{ route('projects.edit',$project) }}">{{ __('Edit Project') }}</a>

                        <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">{{ __('Delete Project') }}</a>

                    </div>

                    <form id="delete-project" action="{{ route('projects.destroy',$project) }}" method="POST" class="d-none">
                        @csrf @method('DELETE')
                    </form>

                @endauth

            </div>
        </div>

    </div>
@endsection

