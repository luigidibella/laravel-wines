<header class="bg-secondary py-3">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home')}}">Winery</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('admin.home')}}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('admin.wines.index')}}">Lista Vini</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('admin.wines.create')}}">Aggiungi Vino</a>
              </li>
            </ul>
          </div>
          <div class="d-flex align-items-center">
            <form class="d-flex me-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <p class="pt-3 me-3">guest</p>
            <button class="btn btn-outline-dark"><a href="{{route('login')}}">Login</a></button>
          </div>
        </div>
      </nav>
</header>
