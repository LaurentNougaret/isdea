<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Isdea</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
          <li @if (Request::is('admin/project')) class="nav-item active">
                <a href=""></a>
              @else
                <a class="nav-link" href="project">{{trans('navbar.projects')}}</a>
              @endif
          </li>
          <li @if (Request::is('admin/users')) class="nav-item active">
                <a href=""></a>
              @else
                <a class="nav-link" href="users">{{trans('navbar.users')}}</a>
              @endif
          </li>
          <li @if (Request::is('admin/statistics')) class="nav-item active">
                  <a href=""></a>
              @else
                  <a class="nav-link" href="statistics">{{trans('navbar.stats')}}</a>
              @endif
          </li>
          <li class="nav-item dropdown ml-auto">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ Config::get('languages')[App::getLocale()] }}
              </a>
              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  @foreach (Config::get('languages') as $lang => $language)
                      @if ($lang != App::getLocale())
                          <li class="text-center">
                              <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                          </li>
                      @endif
                  @endforeach
              </ul>
          </li>
      </ul>
  </div>
    <form class="form-inline">
        <button class="btn btn-outline-secondary btn-md" type="submit">{{trans('navbar.logout')}}</button>
    </form>
</nav>