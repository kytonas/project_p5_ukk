<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('beranda')}}"><img src="{{asset('admin/img/logo-custom__1_-removebg-preview.png')}}" alt="" style="height: 70px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" id="navbar" href="{{route('beranda')}}">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="navbar" href="{{route('guru')}}">Guru</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="navbar" href="{{route('struktural')}}">Struktural</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="navbar" href="{{route('eskul')}}">Ekstrakulikuler</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="navbar" href="{{route('jurusan')}}">Jurusan</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>