<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('admin/css/beranda.css')}}">

    <title>Detail Artikel</title>
  </head>
  <body>

    <!-- Awal Navbar -->
    @include('user.navbar')
    <!-- Akhir Navbar -->
    <br>
    <br>
    <br>
    <!-- Awal Jumbotron -->
    <!-- Akhir Jumbotron -->
    
   <!-- Awal Home -->
   <div class="section">
        <div class="container">
            {{-- ROW 1 --}}
            <div class="row mt-5 justify-content-center">
                <h2>Detail Artikel</h2>
            </div>
            {{-- /ROW 1 --}}
            {{-- ROW 2 --}}
            <div class="row">
                    <div class="col-4 mt-5">
                        <div class="card bg-secondary text-light" style="width: 18rem;" >
                            <img src="{{ asset('images/artikel/' .$artikel->sampul) }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $artikel -> judul }}</h5>
                                <p class="text-light">{{$artikel->isi}}</p>
                                {{-- <p class="card-text">Jumlah : {{ $data->jumlah }}</p>
                                <p class="card-text">Tanggal Produk : {{ $data->tanggal_produksi }}</p>
                                <p class="card-text">Merek : {{ $data -> merek -> nama_merek }}</p> --}}
                                <a href="{{ route('beranda')}}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
            </div>
                {{-- /ROW 2 --}}
            </div>
        </div>
    <br>
   <!-- Akhir Home -->

<!-- awal footer -->
@include('user.footer')
<!-- Akhir Footer -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>