<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('admin/css/beranda.css')}}">

    <title>Beranda</title>
  </head>
  <body>

    <!-- Awal Navbar -->
    @include('user.navbar')
    <!-- Akhir Navbar -->
    <br>
    <br>
    <br>
    <!-- Awal Jumbotron -->
    <div id="bg1">
        <div class="row text-white mt-5">
            <div class="col">
        <div id="text1">
            <br>
            <h1 class="kami">Tentang Kami</h1>
            <br>
            <p class="p">SMK Assalaam merupakan sekolah kejuruan dengan kompetensi keahlian teknik kendaraan ringan (roda empat) plus sepeda motor dalam 
              proses pendidikan pelatihan. 
              Peka terhadap perubahan perkembangan teknologi baru dan tuntutan kebutuhan pasar kerja, agar lulusannya siap menghadapi perubahan.
            </p>
            <p class="p">SMK Assalaam dengan penuh kesadaran berani melakukan perubahan dengan berbagai 
              inovasi dan improvisasi, 
              mencari terobosan untuk meraih keberhasilan bagi peserta didiknya.
            </p>
            <p class="p">Tekad tersebut sebagai wujud nyata dari SMK Assalaam didukung oleh sarana praktek yang lengkap UP TO DATE, 
              waktu praktek memadai dan praktek berstandar industri dengan pelayanan prima.
            </p>
        </div>
    </div>
    </div>
    </div>
  <!-- Akhir Jumbotron -->
    
   <!-- Awal Home -->
   <div class="section" id="artikel">
        <div class="container">
            {{-- ROW 1 --}}
            <div class="row mt-5 justify-content-center text-light">
                <h2>Artikel</h2>
            </div>
            {{-- /ROW 1 --}}
            {{-- ROW 2 --}}
            <div class="row">
                @foreach ($artikel as $data)
                    <div class="col-4 mt-5">
                        <div class="card bg-secondary text-light" style="width: 18rem;" >
                            <img src="{{ asset('images/artikel/' .$data->sampul) }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data -> judul }}</h5>
                                {{-- <p class="card-text">Jumlah : {{ $data->jumlah }}</p>
                                <p class="card-text">Tanggal Produk : {{ $data->tanggal_produksi }}</p>
                                <p class="card-text">Merek : {{ $data -> merek -> nama_merek }}</p> --}}
                                <a href="{{ route('beranda.show', ( $data -> id)) }}" class="btn btn-primary">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- /ROW 2 --}}
            </div>
        </div>
    <br>
    <div id="bg2">
    <div class="container mt-5">
        <div class="row text-white">
          <div id="text2">
            <p class="think"><h2>Sekolah berkualitas dengan program pembelajaran yang berkualitas,
               sumber daya pengajar yang berkualitas, dan sarana prasarana yang lengkap dan mutakhir
              </h2></p>
          </div>
          <div class="col">
            <img src="{{asset('admin/img/orangbelajar.png.png')}}" class="text-center" id="crew" alt="">
          </div>
        </div>
    </div>
      </div>
   <!-- Akhir Home -->

<!-- awal footer -->
@include('user.footer')
<!-- Akhir Footer -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>