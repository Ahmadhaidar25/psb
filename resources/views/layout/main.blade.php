<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{url('template/img/logo.ico')}}" rel="icon">
    <title>Smpn 1 Kutawaluya</title>

    <!-- Custom fonts for this template-->
    <link href="{{url('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('template/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

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

<body id="page-top">
    <div class="preloader">
        <div class="loading">
          <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
</div>

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
            <div class="sidebar-brand-icon rotate-n-10 mt-2">
                <img src="{{url('template/img/logo.png')}}" width="100px" class="img-thumbnail" alt="logo">
            </div>
            <div class="sidebar-brand-text mx-3">SPK SMART & MOORA</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{url('dashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="bi bi-menu-down"></i>
                    <span>Master Menu</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu</h6>
                        @if (auth()->user()->level=='wali kelas')
                        <a class="collapse-item" href="{{url('user')}}">Data User</a>
                        <a class="collapse-item" href="{{url('kelola-data-kelas')}}">Data Siswa</a>
                        <a class="collapse-item" href="{{url('kriteria')}}">Data Kriteria</a>
                        <a class="collapse-item" href="{{url('perhitungan')}}">Data Perhitungan</a>
                        <a class="collapse-item" href="{{url('alternatif')}}">Data Alternatif</a>
                        <a class="collapse-item" href="{{url('hasil-akhir')}}">Hasil Keputusan</a>
                        @elseif (auth()->user()->level=='kesiswaan')
                        <a class="collapse-item" href="{{url('hasil-akhir')}}">Data Hasil Akhir</a>
                        @endif
                    </div>
                </div>
            </li>




            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->






            <!-- Divider -->


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>





                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth()->user()->nama}}<br>{{Auth()->user()->level}}</span><br>

                                @if (auth()->user()->jk=='L')
                                <img class="img-profile rounded-circle" src="{{url('template/img/undraw_profile.svg')}}">
                                @elseif (auth()->user()->jk=='P')
                                <img class="img-profile rounded-circle" src="{{url('template/img/user2.png')}}">
                                @endif
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="{{url('ubah-password')}}">
                                   <i class="bi bi-arrow-clockwise"></i>
                                   Ubah Password
                               </a>
                               <a class="dropdown-item btn2" href="{{url('logout')}}">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container">

                @yield('content')

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Sistem Pendukung Keputusan 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="{{url('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <script src="{{url('template/vendor/jquery/jquery-calx-2.2.8.min.js')}}"></script>
    <script src="{{url('template/vendor/jquery/numeral.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('template/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>

    <script src="{{url('template/js/bootstrap.js')}}"></script>




    <script type="text/javascript">
        $(document).ready(function() {
            $('#table_id').DataTable();
        });


        $(document).ready(function() {
            $('#akar').DataTable();
        });

        $(document).ready(function() {
            $('#bobot').DataTable();
        });

        $(document).ready(function() {
            $('#matrix').DataTable();
        });

        $(document).ready(function() {
            $('#optimasi').DataTable();
        });

        $(document).ready(function() {
            $('#bobot_smart').DataTable();
        });

        $(document).ready(function() {
            $('#alternatif').DataTable();
        });

        $(document).ready(function() {
            $('#utility').DataTable();
        });

        $(document).ready(function() {
            $('#table_smart').DataTable();
        });

        $(document).ready(function() {
            $('#table_moora').DataTable();
        });
        
      

         

        $(function() {

            var table=$('#points-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: 'http://localhost/edpark/public/get/points',
                columns: [
                { data: 'rank', defaultContent: ''},
                { data: 'first_name'},
                { data: 'last_name'},
                { data: 'TotalPoints'},
                ],
                drawCallback: function () {
                    api = this.api();
                var arr = api.columns(3).data()[0];  //get array of column 3 (extn)
                console.log(arr);
                var sorted = arr.slice().sort(function(a,b){return b-a});
                var ranks = arr.slice().map(function(v){ return sorted.indexOf(v)+1 });
                console.log(sorted);
                console.log(ranks);
                // interate through each row
                api.rows().every( function ( rowIdx, tableLoop, rowLoop ) {
                    var data = this.data();
                    var rank = ranks[rowLoop];
                    data.rank = ranks[arr.indexOf(data.extn)];  //set the rank column = the array index of the extn in the ranked array
                } );
                api.rows().invalidate();
            }
        });
        })

        $('.btn1').click(function(e) {
            e.preventDefault();
            var hapus = $(this).attr('href');
            Swal.fire({
                title: 'Yakin',
                text: "Data Akan Di Hapus",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = hapus;
                }

                
            })
        });




        $('.btn2').click(function(e) {
            e.preventDefault();
            var logout = $(this).attr('href');
            Swal.fire({
                title: 'Yakin',
                text: "Logout",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = logout;
                }
            })
        });


        $(document).ready(function() {
            $(".preloader").fadeOut("slow");
        });

        $.fn.stars = function() {
            return $(this).each(function() {
                $(this).html($('<span />').width(Math.max(0, (Math.min(5, parseFloat($(this).html())))) * 16));
            });
        }




    </script>
    <script type="text/javascript">
       $(document).ready(function () {
        $("#siswa").select2({
            theme: 'bootstrap4',
            placeholder: "Please Select"
        });
    </script>

    <script src="https://cdn.datatables.net/plug-ins/1.10.19/api/sum().js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{url('template/js/bootstrap.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>
@include('sweetalert::alert')


</html>


