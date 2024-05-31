<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('admin/css/userguru.css') }}">

    <title>Daftar guru</title>
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

    {{-- /ROW 1 --}}
    {{-- ROW 2 --}}
    <div class="section">
        <div class="container">
            <div class="row mt-5">
                <h2>Daftar Guru SMK Assalaam Bandung</h2>
            </div>
            @foreach ($guru as $data)
                    <div class="guru-card">
                        <div class="col-md-2"><img src="{{ asset('images/guru/' .$data->sampul) }}" width="80%"></div>
                        <div class="guru-info">
                            <h4 class="card-title guru-name">{{ $data->nama_guru }} - Guru {{ $data->mapel->nama_mapel }}</h4>
                            <p class="card-text guru-subject">Nomor Telepon : {{ $data->telepon }}</p>
                            <p class="card-text guru-subject">Email : {{ $data->email }}</p>
                        </div>
                    </div>
            @endforeach
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
