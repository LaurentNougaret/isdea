<nav class="navbar navbar-expand-lg py-0 navbar-fixed-top">
    <a class="navbar-brand mt-2" href="/"><img id="logo" class="d-block mx-auto" src="/storage/images/isdea.png" alt="isdea_logo"></a>
    <button class="navbar-toggler shadow-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    @if(Auth::user())
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav mr-auto">
                @if (Request::is('admin/projects'))
                    <a href=""></a>
                @else
                    <a class="nav-link nav-item mt-2" href="{{action('Back\ProjectController@index')}}">@lang('navbar.projects')</a>
                @endif
                @if (Request::is('admin/users'))
                    <a href=""></a>
                @else
                    <a class="nav-link nav-item mt-2" href="{{action('Back\UserController@index')}}">@lang('navbar.users')</a>
                @endif
                @if (Request::is('admin/stats'))
                    <a href=""></a>
                @else
                    <a class="nav-link nav-item mt-2" href="{{action('Back\StatsController@index')}}">@lang('navbar.stats')</a>
                @endif
                @if (Request::is('profile'))
                    <a href=""></a>
                @else
                    <a class="nav-link nav-item mt-2" href="{{action('Front\UserController@profile')}}">@lang('navbar.profile')</a>
                @endif
                @endif
                <div class="nav-link nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Config::get('languages')[App::getLocale()] }}
                    </a>
                    <div class="dropdown-menu ml-1" aria-labelledby="navbarDropdown">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <div class="mx-1">
                                    <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            @if(Auth::user())
                @if (Auth::check())
                    <span class="navbar-text mr-5">@lang('navbar.hello'), <b>{{Auth::user()->firstname}}</b>.</span>
                    <form class="form-inline" method="POST" action="{{action('Auth\LoginController@logout')}}">
                        {{csrf_field()}}
                        <button class="btn btn-outline-secondary btn-sm shadow-button mt-2" type="submit">@lang('navbar.logout')</button>
                    </form>
                @endif
            @endif
        </div>
</nav>


