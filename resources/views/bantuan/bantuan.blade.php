@extends('layout.login_layout')

<head>
    @section('title')
    Bantuan
    @endsection
</head>
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootdey">
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <!-- Timeline start -->
                    <div class="timeline">
                        <div class="timeline-row">
                            <div class="timeline-time">
                                1) Register Terlebih Dahulu Bila Belum Mempunyai Akun Sesuai Dengan Level
                            </div>
                            <div class="timeline-dot fb-bg"></div>
                            <div class="timeline-content">
                                <i class="fa fa-info"></i>
                                <img src="{{url('template/img/register.png')}}" class="img-thumbnail" alt="...">
                            </div>
                        </div>
                        <div class="timeline-row">
                            <div class="timeline-time">
                                2) Jika Sudah Register Silahkan Login Dengan Cara Memasukan Email Dan Password
                            </div>
                            <div class="timeline-dot green-one-bg"></div>
                            <div class="timeline-content green-one">
                                <i class="fa fa-info"></i>
                                <img src="{{url('template/img/login.png')}}" class="img-thumbnail" alt="...">
                            </div>
                        </div>
                        <div class="timeline-row">
                            <div class="timeline-time">
                                3) Setelah Login Sesuai Dengan Level Maka Akan Masuk Kedalam Menu Dashboard Berikut Tampilan Dashboard Bagi Wali Kelas
                            </div>
                            <div class="timeline-dot green-two-bg"></div>
                            <div class="timeline-content green-two">
                                <i class="fa fa-list"></i>
                                <img src="{{url('template/img/home.png')}}" class="img-thumbnail" alt="...">
                            </div>
                        </div>
                        <div class="timeline-row">
                            <div class="timeline-time">
                                4) Dan Berikut Juga Tampilan Dashboard Untuk Kesiswaan
                            </div>
                            <div class="timeline-dot green-three-bg"></div>
                            <div class="timeline-content green-three">
                                <i class="icon-directions"></i>
                                <img src="{{url('template/img/home1.png')}}" class="img-thumbnail" alt="...">
                            </div>
                        </div>
                         <div class="timeline-row">
                            <div class="timeline-time">
                                5) Wali Kelas Mengisi Data Siswa
                            </div>
                            <div class="timeline-dot green-three-bg"></div>
                            <div class="timeline-content green-three">
                                <i class="icon-directions"></i>
                                <img src="{{url('template/img/siswa.png')}}" class="img-thumbnail" alt="...">
                            </div>
                        </div>
                        <div class="timeline-row">
                            <div class="timeline-time">
                                6) Kemudian data kriteria
                            </div>
                            <div class="timeline-dot green-three-bg"></div>
                            <div class="timeline-content green-three">
                                <i class="icon-directions"></i>
                                <img src="{{url('template/img/kriteria.png')}}" class="img-thumbnail" alt="...">
                            </div>
                        </div>
                         <div class="timeline-row">
                            <div class="timeline-time">
                                7) Lakukan Penilaian Di Menu Alternatif 
                            </div>
                            <div class="timeline-dot green-three-bg"></div>
                            <div class="timeline-content green-three">
                                <i class="icon-directions"></i>
                                <img src="{{url('template/img/alternatif.png')}}" class="img-thumbnail" alt="...">
                            </div>
                        </div>
                         <div class="timeline-row">
                            <div class="timeline-time">
                                8) Berikut Data Hasil Akhir
                            </div>
                            <div class="timeline-dot green-three-bg"></div>
                            <div class="timeline-content green-three">
                                <i class="icon-directions"></i>
                                <img src="{{url('template/img/Hasil.png')}}" class="img-thumbnail" alt="...">
                            </div>
                        </div>
                          <div class="timeline-row">
                            <div class="timeline-time">
                                9) Wali Kelas bisa langsung mencetak dalam bentuk format pdf
                            </div>
                            <div class="timeline-dot green-three-bg"></div>
                            <div class="timeline-content green-three">
                                <i class="icon-directions"></i>
                                <img src="{{url('template/img/pdf.png')}}" class="img-thumbnail" alt="...">
                            </div>
                        </div>
                        <div class="timeline-row">
                            <div class="timeline-time">
                                10) Dan Kesiwaan pun bisa melihat data hasil akhir sekaligus mencetak dalam format pdf atau excel
                            </div>
                            <div class="timeline-dot green-three-bg"></div>
                            <div class="timeline-content green-three">
                                <i class="icon-directions"></i>
                                <img src="{{url('template/img/excel.png')}}" class="img-thumbnail" alt="...">
                            </div>
                    </div>
                </div>
                <!-- Timeline end -->
            </div>
        </div>
    </div>
</div>
</div>
<br>
@endsection