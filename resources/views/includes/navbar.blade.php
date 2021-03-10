<nav class="navbar navbar-expand-lg navbar-light bg-white mb-3">
    <div class="container">
      <a class="navbar-brand" href="{{ route('index') }}">LARA QUORA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
          <li class="nav-item {{ Request::is('/recent') ? 'active' : '' }}"><a class="nav-link" href="/recent">Recent</a></li>
          <li class="nav-item {{ Request::is('/popular') ? 'active' : '' }}"><a class="nav-link" href="/popular">Popular</a></li>
          @if (!Auth::check())
            <li class="nav-item {{ Request::is('/login') ? 'active' : '' }}"><a class="nav-link" href="/login">Login</a></li>
            <li class="nav-item {{ Request::is('/register') ? 'active' : '' }}"><a class="nav-link" href="/register">Register</a></li>
          @endif
          <li class="nav-item"><a href="/questions/create" class="btn btn-primary btn-sm">Ask A Question</a></li>
        </ul>
      </div>
    </div>
  </nav>
