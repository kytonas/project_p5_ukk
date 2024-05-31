<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('admin/css/usereskul.css')}}">

    <title>Eskul</title>
  </head>
  <body>

    <!-- Awal Navbar -->
    @include('user.navbar')
    <!-- Akhir Navbar -->
    <br>
    <br>
    <br>
    <!-- Awal Jumbotron -->
    <div class="section">
        <div class="container">
    <div class="row mt-5">
        <div class="col">
            <h6>EKSTRAKULIKULER SMK ASSALAM BANDUNG</h6>
            <h2>Have a look our extracurricular activities.</h2>
            <p>
              Kegiatan ekstrakurikuler menjembatani kebutuhan perkembangan peserta didik yang berbeda seperti 
                perbedaan sense akan nilai moral dan sikap, kemampuan dan kreativitas. 
                Melalui partipasinya dalam kegiatan ekstrakurikuler peserta didik dapat belajar dan mengembangkan kemampuan berkomunikasi, bekerja sama dengan orang lain, serta menemukan dan mengembangkan potensinya. 
                Kegiatan ekstrakurikuler juga memberikan manfaat sosial yang besar.
            </p>
        </div>
        <br>
        <div class="col">
            <img class="futsal" src="{{asset('admin/img/png-clipart-football-player-graphy-others-photography-sports-equipment-removebg-preview.png')}}" alt="">
        </div>
    </div>
    </div>
    </div>
  <!-- Akhir Jumbotron -->
    
   <!-- Awal Home -->
   <div class="section" id="bg-color">
        <div class="container">
            {{-- ROW 1 --}}
            {{-- /ROW 1 --}}
            {{-- ROW 2 --}}
            <div class="row" >
                @foreach ($eskul as $data)
                    <div class="col-4 mt-5 ">
                        <div class="card" id="eskul"  >
                            <img src="{{ asset('images/eskul/' .$data->sampul) }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data -> nama_eskul }}</h5>
                                <p class="card-text">{{ $data->isi }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
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