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
                <a class="nav-link nav-item" href="{{route('project.index')}}">{{trans('navbar.projects')}}</a>
              @endif
          @if (Request::is('admin/users'))
                <a href=""></a>
              @else
                <a class="nav-link nav-item" href="{{route('users.index')}}">{{trans('navbar.users')}}</a>
              @endif
          @if (Request::is('admin/stats'))>
                  <a href=""></a>
              @else
                  <a class="nav-link nav-item" href="{{route('stats.index')}}">{{trans('navbar.stats')}}</a>
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
    <span class="navbar-text">
      Bonjour, <b>Tartuffe</b>.
    </span>
    <form class="form-inline">
        <button class="btn btn-outline-secondary btn-md" type="submit">{{trans('navbar.logout')}}</button>
    </form>
</nav>