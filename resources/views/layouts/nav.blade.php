<nav class="navbar bg-white shadow-sm navbar-expand-md  navbar-light">
    <div class="container">

        <a class="navbar-brand" href="{{ route('home') }}">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link {{ isActive('home') }}" href="{{ route('home') }}">{{ __('Home')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ isActive('about') }}" href="{{ route('about') }}">{{ __('About')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ isActive('contact') }}" href="{{ route('contact') }}">{{ __('Contact')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ isActive('projects.*') }}"
                       href="{{ route('projects.index') }}">{{ __('Portfolio')}}</a></li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ isActive('login') }}" href="{{ route('login') }}">{{ __('Login')}}</a>
                    </li>
                @else
                    <form id="logout-form" action="{{route('logout')}}" method="POST">
                        @csrf
                        @method('POST')
                        <li class="nav-item">
                            <a class="nav-link" href="#"
                               onclick="document.getElementById('logout-form').submit();">{{ __('Logout')}}</a>
                        </li>
                    </form>
                @endguest
            </ul>
        </div>
    </div>
</nav>
