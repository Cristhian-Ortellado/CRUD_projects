@extends('layouts.layout')
@section('title', 'Home')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center ">
            <h1 class="display-4 mb-0">Portfolio</h1>

            @auth
                <a class="btn btn-primary text-white" href="{{route('projects.create')}}">{{__("Create a project")}}</a>
            @endauth
        </div>
        <p class="lead text-secondary">
            Here we can see all the projects created in this Web App
        </p>
        <ul class="list-group">
            @forelse($projects as $project)
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    <a class="text-secondary d-flex justify-content-between align-items-center"
                       href="{{route('projects.show',$project)}}">
                        <span class="font-weight-bold">
                            {{ $project->title }}
                        </span>
                        <span class="text-black-50">{{ $project->created_at->format('d/m/Y') }}</span>
                    </a>

                </li>
            @empty
                <li class="list-group-item border-0 mb-3 shadow-sm">{{__("No projects found")}}</li>
            @endforelse
        </ul>
    </div>
@endsection

