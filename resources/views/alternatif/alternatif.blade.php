@extends('layout.main')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Data Alternatif</h1>

</div>

<!-- Content Row -->
<div class="row">

	<div class="container-fluid">



		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary"></h6>
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
					Tambah
				</button>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="table_id" class="display table">
						<thead>
							<tr>

								<th>Kode Alternatif</th>
								<th>Nama Siswa</th>
								<th>Absensi</th>
								<th>Rata-Rata Raport</th>
								<th>Ekstrakulikuler</th>
								<th>Jumlah Sertifikat</th>
								<th>Sikap Ds</th>
								<th>Sikap Ls</th>
								<th>Prestasi Akademik</th>
								<th>Prestasi Non Akademik</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody class="text-center">
							@foreach ($data as $x)
							<tr>
								<td>{{$x->kode_alternatif}}</td>
								<td>{{$x->siswa->nama_siswa}}</td>
								<td>{{$x->absensi}}</td>
								<td>{{$x->nilai_raport}}</td>
								<td>{{$x->extrakulikuler}}</td>
								<td>{{$x->jumlah_sertifikat}}</td>
								<td>{{$x->sikap_ds}}</td>
								<td>{{$x->sikap_ls}}</td>
								<td>{{$x->prestasi_akademik}}</td>
								<td>{{$x->prestasi_non_akademik}}</td>
								<td>
									<div class="btn-group" role="group" aria-label="Basic mixed styles example">
										<a href="{{url('/hapus-alternatif/'.$x->kode_alternatif)}}" class="btn btn-danger btn1">Hapus</a>

									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Alternatif</h5>
			</div>
			<form action="{{url('tambah_alternatif')}}" method="post">
				<div class="modal-body">
					@csrf
					

					<div class="row align-items-start">
						<div class="col">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Kode Alternatif<label class="text-danger form-label">*</label></label>
								<input type="text" class="form-control" name="kode_alternatif" readonly 
								value="{{$kodeBaru}}" autofocus>
							</div>
						</div>

						

						<div class="col">
							<div class="mb-3">
								<label for="message-text" class="col-form-label">Nama Siswa<label class="text-danger form-label">*</label></label>
								<select class="form-control" name="id_siswa" id="siswa">
									<option value="">Pilih Siswa</option>
									@foreach($siswa as $s)
									<option value="{{$s->id_siswa}}">{{$s->nama_siswa}}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Absensi<label class="text-danger form-label">*</label></label>
								<input type="number" class="form-control" name="absensi">
							</div>
						</div>
        
						<div class="col">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Nilai Rapot<label class="text-danger form-label">*</label></label>
								<select class="form-control" name="nilai_raport" id="nilai">
									<option value="">Pilih Nilai</option>
									@foreach($siswa as $s)
									<option value="{{$s->nilai_rapot}}">{{$s->nama_siswa}}-{{$s->nilai_rapot}}</option>
									@endforeach
								</select>
							</div>
						</div>

					</div>


					<div class="row">
						<div class="col">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Extrakulikuler<label class="text-danger form-label">*</label></label>
								<input type="number" class="form-control" name="extrakulikuler">
							</div>
						</div>

						<div class="col">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Jumlah Sertifikat<label class="text-danger form-label">*</label></label>
								<input type="number" class="form-control" name="jumlah_sertifikat">
							</div>
						</div>

					</div>

					<div class="row">
						<div class="col">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Sikap Dalam Sekolah<label class="text-danger form-label">*</label></label>
								<input type="number" class="form-control" name="sikap_ds">
							</div>
						</div>

						<div class="col">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Sikap Luar Sekolah<label class="text-danger form-label">*</label></label>
								<input type="number" class="form-control" name="sikap_ls">
							</div>
						</div>

					</div>

					<div class="row">
						<div class="col">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Prestasi Akademik<label class="text-danger form-label">*</label></label>
								<input type="number" class="form-control" name="prestasi_akademik">
							</div>
						</div>

						<div class="col">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Prestasi Non Akademik<label class="text-danger form-label">*</label></label>
								<input type="number" class="form-control" name="prestasi_non_akademik">
							</div>
						</div>

					</div>
                  
				</div>
				<div class="modal-footer">
					
					<button type="submit" class="btn btn-success">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>


@foreach ($data as $e)
<div class="modal fade" id="edit-{{$e->kode_alternatif}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="{{url('/ubah/alternatif')}}/{{$e->kode_alternatif}}" method="post">
				<div class="modal-body">
					@csrf
					<div class="row align-items-start">
						<div class="col">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Kode Kriteria<label class="text-danger form-label">*</label></label>
								<input type="text" class="form-control" name="kode_alternatif" value="{{$e->kode_alternatif}}" readonly>
							</div>
						</div>
						<div class="col">
							<div class="mb-3">
								<label for="message-text" class="col-form-label">Nama Siswa<label class="text-danger form-label">*</label></label>
								<select class="form-control" name="id_siswa">
									<option value="{{$e->siswa->id_siswa}}">{{$e->siswa->nama_siswa}}</option>
									<hr>
									@foreach($siswa as $s)
									<option value="{{$s->id_siswa}}">{{$s->nama_siswa}}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Absensi<label class="text-danger form-label">*</label></label>
								<input type="number" class="form-control" name="absensi" value="{{$e->absensi}}">
							</div>
						</div>

						<div class="col">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Nilai Rapot<label class="text-danger form-label">*</label></label>
								<select class="form-control" name="nilai_raport">
									<option value="{{$e->nilai_raport}}">{{$e->nilai_raport}}</option>
									<hr>
									@foreach($siswa as $s)
									<option value="{{$s->nilai_rapot}}">{{$s->nilai_rapot}}</option>
									@endforeach
								</select>
							</div>
						</div>

					</div>


					<div class="row">
						<div class="col">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Extrakulikuler<label class="text-danger form-label">*</label></label>
								<input type="number" class="form-control" name="extrakulikuler" value="{{$e->extrakulikuler}}">
							</div>
						</div>

						<div class="col">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Jumlah Sertifikat<label class="text-danger form-label">*</label></label>
								<input type="number" class="form-control" name="jumlah_sertifikat" value="{{$e->jumlah_sertifikat}}">
							</div>
						</div>

					</div>

					<div class="row">
						<div class="col">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Sikap Dalam Sekolah<label class="text-danger form-label">*</label></label>
								<input type="number" class="form-control" name="sikap_ds" value="{{$e->sikap_ds}}">
							</div>
						</div>

						<div class="col">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Sikap Luar Sekolah<label class="text-danger form-label">*</label></label>
								<input type="number" class="form-control" name="sikap_ls" value="{{$e->sikap_ls}}">
							</div>
						</div>

					</div>

					<div class="row">
						<div class="col">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Prestasi Akademik<label class="text-danger form-label">*</label></label>
								<input type="number" class="form-control" name="prestasi_akademik" value="{{$e->prestasi_akademik}}">
							</div>
						</div>

						<div class="col">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Prestasi Non Akademik<label class="text-danger form-label">*</label></label>
								<input type="number" class="form-control" name="prestasi_non_akademik" value="{{$e->prestasi_non_akademik}}">
							</div>
						</div>

					</div>

				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endforeach

@include('sweetalert::alert')
@endsection