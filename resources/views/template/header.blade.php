<header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-pink">
        <div class="container-fluid">
          <a class="navbar-brand" href="/"><img src="{{ asset('/img/logo.png') }}" width="40%"></a>
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link active" aria-current="page" href="{{ route('Site.home') }}">Home</a>
              <a class="nav-link" href="{{ route('Site.sobre') }}">Sobre</a>
              <a class="nav-link" href="{{ route('Site.contato') }}">Contato</a>
            </div>
          </div>
        </div>
      </nav>
  </header>