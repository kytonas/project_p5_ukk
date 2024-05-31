<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('admin/css/userjurusan.css') }}">

    <title>Jurusan</title>
</head>

<body>

    <!-- Awal Navbar -->
    @include('user.navbar')
    <!-- Akhir Navbar -->
    <br>
    <br>
    <br>
    <!-- Awal Jumbotron -->
        {{-- <div id="back">
        <div class="row">
            <div class="col">
        <div id="text1"> 
            <br>
            <h1 class="kami">Visi & Misi</h1>
            <br>
            <p class="p">Visi : Menjadikan SMK Assalaam sebagai sekolah IDAMAN</p>
            <p class="p">Misi</p>
            <p class="p">
                <li class="p">Intelek dalam melaksanakan proses pembelajaran</li>
                <li class="p">Disiplin dalam segala aspek kehidupan</li>
                <li class="p">Amanah dalam melaksanakan tugas</li>
                <li class="p">Maju dan menang untuk kepentingan bersama</li>
                <li class="p">Aktif dalam merespon perkembangan</li>
                <li class="p">Norma islam sebagai landasan dalam beraktifitas</li>
            </p>
        </div>
    </div>
    </div>
    </div> --}}
    <div class="bg-image">
        <img src="{{asset('admin/img/IMG_6091.png')}}" width="100%" alt="">
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Awal Home -->

    {{-- /ROW 1 --}}
    {{-- ROW 2 --}}
    <div class="section">
        <div class="container">
            <div class="row mt-5">
                <h2>Jurusan SMK Assalaam Bandung</h2>
            </div>
            <div class="row">
                @foreach ($jurusan as $data)
                    <div class="col-4 mt-5">
                        <div class="card bg-secondary text-light" style="width: 18rem;" >
                            <img src="{{ asset('images/jurusan/' .$data->sampul) }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data -> nama_jurusan }}</h5>
                                <p class="card-text">Kaprog : {{ $data->kaprog }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- /ROW 2 --}}
            </div>
        </div>
    </div>
    <br>
    <!-- Akhir Home -->

    <!-- awal footer -->
    @include('user.footer')
    <!-- Akhir Footer -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
