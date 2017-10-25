<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            @if (Request::is('admin/project'))
                <a></a>
            @else
                <a class="nav-item nav-link navbar-size" href="#">Projets</a>
            @endif
            @if(Request::is('admin/users'))
                <a></a>
            @else
                {{--<a class="nav-item nav-link navbar-size" href="{{ route('admin/users') }}">Utilisateurs</a>--}}
            @endif
            <a class="nav-item nav-link navbar-size" href="#">Statistiques</a>
        </div>
    </div>

    <form class="form-inline">
        <button class="btn btn-outline-secondary btn-md my-2 my-sm-2" type="submit">Se déconnecter</button>
    </form>

</nav>

