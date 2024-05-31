<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('admin/css/userartikel.css') }}">

    <title>{{ $artikel->judul }}</title>
</head>

<body>

    <!-- Awal Navbar -->
    @include('user.navbar')
    <!-- Akhir Navbar -->
    <br>
    <br>
    <br>
    <!-- Awal Jumbotron -->
    <div class="bg-image">
        <div class="row text-white">
          <div class="col">
              <img src="{{ asset('images/artikel/' . $artikel->sampul) }}" class="card-img-top" alt="...">
              <br>
        <div id="text1"> 
            <br>
            <h1 class="kami">{{ $artikel->judul }}</h1>
            <br>
            <p class="p">{{ $artikel->isi }}</p>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Awal Home -->
   
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
