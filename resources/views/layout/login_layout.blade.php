<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        @yield('title')
    </title>

    <!-- Custom fonts for this template-->
    <link href="{{url('template/img/logo.ico')}}" rel="icon">
    <link href="{{url('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('template/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{url('template/css/bantuan.css')}}" rel="stylesheet">

    <style type="text/css">
        .preloader {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          z-index: 9999;
          background-color: #fff;
      }
      .loading {
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%,-50%);
          font: 14px arial;
      }
  </style>

</head>

<body>
    <body id="page-top">
        <div class="preloader">
            <div class="loading">
              <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <div class="row">
                 <div class="col">
                    <img src="{{url('template/img/logo_stmik.png')}}" class="img-fluid rounded-start" style="height: 60px;">
                 </div> 
                 <div class="col">
                   <img src="{{url('template/img/logo.png')}}" class="img-fluid rounded-start" style="height: 60px;">
               </div>
           </div>


           <a class="navbar-brand"></a>
           <div class="d-flex">



            <div class="row align-items-start">
                <div class="col">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Beranda</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('tentang')}}">Tentang</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('bantuan')}}">Bantuan</a>
                        </li>
                    </ul>
                </div>
                        <!--<div class="col">
              One of three columns
          </div>-->
      </div>

  </div>
</div>
</nav>
</div>

<div class="container">
    @yield('content')
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Register Account</h5>

            </div>
            <form action="{{url('post-register')}}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nama Lengkap:</label>
                        <input type="text" class="form-control" name="nama" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Email:</label>
                        <input type="text" class="form-control" name="email" id="recipient-name">
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Password:</label>
                        <input type="text" class="form-control" name="password" id="recipient-name">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="L" name="jk" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" value="P" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Perempuan
                        </label>
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Level:</label>
                        <select class="form-control" name="level">
                            <option value="">--Pilih Level--</option>
                            <option value="wali kelas">Wali Kelas</option>
                            <option value="kesiswaan">Kesiswaan</option>
                        </select>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Sistem Penunjang Keputusan Pemilihan Siswa Berprestasi dengan Metode MOORA & SMART<br>
                Pengembang : Mutiara Sri Rusmanti
                Pembimbing 1: Dedih, M.Kom | Pembimbing 2: Wahyudi, S.Kom., M.M<br>
                STMIK Horizon Karawang - © Copyleft <script> document.write(new Date().getFullYear()); </script></span>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript-->
    <script src="{{url('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('template/js/sb-admin-2.min.js')}}"></script>
    <script src="{{url('template/js/bootstrap.js')}}"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $(".preloader").fadeOut("slow");
    });

</script>

</body>
@include('sweetalert::alert')

</html>