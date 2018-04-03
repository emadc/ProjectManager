<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">MENU</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Branding -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Projet
            </a>
        </div>
        <div class="navbar-collapse collapse" id="app-navbar-collapse">
            <ul class="nav navbar navbar-nav navbar-right">
                <li><a href="{{ url('projets/create') }}">Nouveau projet</a></li>
            </ul>
        </div>
    </div>
</nav>