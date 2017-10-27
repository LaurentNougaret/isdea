
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown ml-auto">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ Config::get('languages')[App::getLocale()] }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @foreach (Config::get('languages') as $lang => $language)
                      @if ($lang != App::getLocale())
                          <li>
                              <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                          </li>
                      @endif
                  @endforeach
              </ul>
          </li>
      </ul>
  </div>
    <form class="form-inline">
        <button class="btn btn-outline-secondary btn-md" type="submit">Se déconnecter</button>
    </form>
</nav>