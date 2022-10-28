@extends('layout.main')
@section('content')

@if (auth()->user()->level == 'kesiswaan')

<div class="alert alert-success text-center" role="alert">
    <marquee>
        <h2>SELAMAT DATANG DI SMPN 1 KUTAWALUYA</h2>
    </marquee>
</div>


<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{url('template/img/4.png')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><b>SMPN 1 KUTAWALUYA</b></h5>
        <p class="card-text">adalah salah satu satuan pendidikan dengan jenjang SMP di Kutakarya, Kec. Kutawaluya, Kab. Karawang, Jawa Barat. Dalam menjalankan kegiatannya, SMPN 1 KUTAWALUYA berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>


<div class="card mb-3">
  <div class="row g-0">
    
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><b>JAM PEMBELAJARAN DI SMPN 1 KUTAWALUYA</b></h5>
        <p class="card-text">Pembelajaran di SMPN 1 KUTAWALUYA dilakukan pada Sehari Penuh. Dalam seminggu, pembelajaran dilakukan selama 5 hari.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>

    <div class="col-md-4">
      <img src="{{url('template/img/9.jpg')}}" class="img-fluid rounded-start" alt="...">
    </div>
  </div>
</div>
@endif

@if (auth()->user()->level == 'wali kelas')
<!-- Page Heading -->
<div class="alert alert-success text-center" role="alert">
    <marquee>
        <h2>SELAMAT DATANG DI SMPN 1 KUTAWALUYA</h2>
    </marquee>
</div>

<!-- Content Row -->

<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            User</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$user}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Data Kriteria</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$kriteria}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-server fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Data Alternatif</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$alternatif}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-server fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>



   <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Hasil Keputusan Moora</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$moora}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-server fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Hasil Keputusan Smart</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$smart}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-server fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@include('sweetalert::alert')
@endsection