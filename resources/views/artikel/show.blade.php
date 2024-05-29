 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>Detail Data Artikel</title>


     <!-- Bootstrap Core CSS -->
     <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

     <!-- MetisMenu CSS -->
     <link href="{{ asset('admin/css/metisMenu.min.css') }}" rel="stylesheet">

     <!-- Timeline CSS -->
     <link href="{{ asset('admin/css/timeline.css') }}" rel="stylesheet">

     <!-- Custom CSS -->
     <link href="{{ asset('admin/css/startmin.css') }}" rel="stylesheet">

     <!-- Morris Charts CSS -->
     <link href="{{ asset('admin/css/morris.css') }}" rel="stylesheet">

     <!-- Custom Fonts -->
     <link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
 </head>

 <body>

     <div id="wrapper">

         <!-- Navigation -->
         <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
             {{-- NAVBAR --}}
             @include('layouts.navbar')
             {{-- /NAVBAR --}}

             {{-- SIDEBAR --}}
             @include('layouts.sidebar')
             {{-- /SIDEBAR --}}
         </nav>

         {{-- CONTENT --}}
         <div id="page-wrapper">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-lg-12">
                         <h1 class="page-header">Detail data artikel</h1>
                         <div class="container">
                             <div class="row justify-content-center">
                                 <div class="col-md-8">
                                     <div class="card">
                                         <div class="card-body">
                                             <form action="{{ route('artikel.store') }}" method="POST">
                                                 @csrf
                                                 <div class="mb-3">
                                                     <label class="form-label">Judul</label>
                                                     <input type="text" class="form-control" name="id_guru"
                                                         value="{{ $artikel->judul }}" disabled>
                                                     <div class="form-floating">
                                                         <label for="floatingTextarea2">Isi</label>
                                                         <textarea class="form-control" name="isi" id="floatingTextarea2" disabled>{{ $artikel->isi }}</textarea>
                                                     </div>
                                                     <label class="form-label">Sampul</label><br>
                                                     <img src="{{ asset('/images/artikel/' . $artikel->sampul) }}"
                                                         width="100">
                                                 </div><br>
                                                 <a href="{{ url('artikel') }}" class="btn btn-danger">Kembali</a>
                                             </form>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>



     </div>
     <!-- /#wrapper -->

     <!-- jQuery -->
     <script src="{{ asset('admin/js/jquery.min.js') }}"></script>

     <!-- Bootstrap Core JavaScript -->
     <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

     <!-- Metis Menu Plugin JavaScript -->
     <script src="{{ asset('admin/js/metisMenu.min.js') }}"></script>

     <!-- Morris Charts JavaScript -->
     <script src="{{ asset('admin/js/raphael.min.js') }}"></script>
     <script src="{{ asset('admin/js/morris.min.js') }}"></script>
     <script src="{{ asset('admin/js/morris-data.js') }}"></script>

     <!-- Custom Theme JavaScript -->
     <script src="{{ asset('admin/js/startmin.js') }}"></script>

 </body>

 </html>
