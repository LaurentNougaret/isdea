    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Isdea</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav mr-auto">
                @if (Request::is('admin/project'))
                    <a href=""></a>
                @else
                    <a class="nav-link nav-item" href="{{action('Back\ProjectController@index')}}">@lang('navbar.projects')</a>
                @endif
                @if (Request::is('admin/users'))
                    <a href=""></a>
                @else
                    <a class="nav-link nav-item" href="{{action('Back\UserController@index')}}">@lang('navbar.users')</a>
                @endif
                @if (Request::is('admin/stats'))>
                <a href=""></a>
                @else
                    <a class="nav-link nav-item" href="{{action('Back\StatsController@index')}}">@lang('navbar.stats')</a>
                @endif
                <div class="nav-item dropdown ml-auto">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Config::get('languages')[App::getLocale()] }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <div class="text-center">
                                    <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @if (Auth::check())
        <span class="navbar-text">@lang('navbar.hello'), <b>{{Auth::user()->firstname}}</b>.</span>
        <form class="form-inline" method="POST" action="{{action('Auth\LoginController@logout')}}">
            {{csrf_field()}}
            <button class="btn btn-outline-secondary btn-sm" type="submit">{{trans('navbar.logout')}}</button>
        </form>
        @endif
    </nav>


