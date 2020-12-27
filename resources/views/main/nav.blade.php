
<!-- Navigation -->
<nav class="navbar navbar-expand-lg  ">

    <a class="navbar-brand" href="#">
        <i class="fas fa-blog"></i>
        <b>5dmatk</b>
    </a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

        <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('page')}}">Home</a>
            </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('home.blog')}}">Blog</a>
                </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact</a>
            </li>
            @if(Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="{{route('panel')}}">Dashboard</a>
            </li>
            @endif
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}<i style="margin-left:2px " class="fas fa-sign-in-alt"></i></a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }} <i style="margin-left:2px " class="fas fa-plus-square"></i></a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }} <i style="margin-left:4px " class="fas fa-external-link-alt"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest

        </ul>
    </div>
</nav>
