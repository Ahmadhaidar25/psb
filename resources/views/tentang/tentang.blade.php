@extends('layout.login_layout')

<head>
	@section('title')
	Tentang
	@endsection
</head>
@section('content')
<header class="bg-primary text-center py-5 mb-4">
	<div class="container">
		<h1 class="fw-light text-white">
			Aplikasi Sistem Pendukung Keputusan Pemilihan Siswa Berprestasi Berbasis Web
		</h1>
	</div>
</header>

<!-- Page Content -->
<div class="container">

	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Tentang</h5>
			<p class="card-text">
				Aplikasi Sistem Pendukung Keputusan Pemilihan Siswa Berprestasi merupakan Project Skripsi Tahun 2022 dengan pengambilan data di SMPN 1 KUTAWALUYA. Dengan Hasil yang sudah semaksimal mungkin berusaha dan tidak lupa ucapan terimakasih kepada Tempat Penelitian dan rasa syukur telah menyelesaikan aplikasi ini.
			</p>

		</div>
	</div>
	<div class="card mb-3 mt-5">
		<div class="row g-0">
			<div class="col-md-4">
				<img src="{{url('template/img/dev.png')}}" class="img-fluid rounded-start" alt="...">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title">
						Development Team
					</h5>
					
					<div class="row">
						<div class="col-md-4">
							Nama Lengkap :
						</div>
						<div class="col-md-4">
							Mutiara Sri Rusmanti
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							Npm :
						</div>
						<div class="col-md-4">
							43E57027185014
						</div>

					</div>

					<div class="row">
						<div class="col-md-4">
							Prodi :
						</div>
						<div class="col-md-4">
							S1-Sistem Informasi
						</div>

					</div>

					<div class="row">
						<div class="col-md-4">
							Pembimbing 1 :
						</div>
						<div class="col-md-4">
							Dedih, M. Kom
						</div>

					</div>

					<div class="row">
						<div class="col-md-4">
							Pembimbing 2 :
						</div>
						<div class="col-md-4">
							Wahyudi, S.Kom., M.M
						</div>

					</div>

					<div class="row">
						<div class="col-md-4">
							Judul :
						</div>
						<div class="col-md-4">
							Aplikasi Sistem Pendukung Keputusan Pemilihan Siswa Berprestasi
						</div>

					</div>

					<div class="row">
						<div class="col-md-4">
							Tempat :
						</div>
						<div class="col-md-4">
							STMIK Horizon Karawang
						</div>

					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /.container -->
	@endsection