<nav class="navbar navbar-expand-lg navbar-light bg-white mb-3">
    <div class="container">
      <a class="navbar-brand" href="{{ route('index') }}">LARA QUORA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
          <li class="nav-item {{ Request::is('todo/create') ? 'active' : '' }}"><a class="nav-link" href="/todo/create">Create Todo</a></li>
          <li class="nav-item"><a href="#" class="btn btn-primary">Ask A Question</a></li>
        </ul>
      </div>
    </div>
  </nav>
