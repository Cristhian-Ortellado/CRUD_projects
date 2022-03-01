<div class="form-group">
    <label for="title">{{ __('Project Title') }}</label>
    <input class="form-control border-0 bg-light shadow-sm" type="text" name="title" value="{{ old('title',$project->title) }}"><br>
</div>
<div class="form-group">
    <label for="url">{{__('Project URL')}}</label>
    <input class="form-control border-0 bg-light shadow-sm" type="text" name="url" value="{{ old('url',$project->url)  }}"><br>
</div>
<div class="form-group">
    <label for="description">{{__('Project Description')}}</label>
    <textarea  class="form-control border-0 bg-light shadow-sm" name="description">{{ old('description',$project->description)  }}</textarea><br>
</div>
<button class="btn btn-primary btn-lg btn-block w-100 text-white">{{ $btnText }}</button>
<a href="{{ route('projects.index') }}" class="btn btn-link w-100">{{__('Back')}}</a>
