@extends('layout.main')
@section('content')
<div class="container">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Data Siswa</h1>

	</div>
</div>

<div class="row">

	<div class="container-fluid">



		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary"></h6>
				<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
					Tambah Data
				</button>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="table_id" class="display table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Siswa</th>
								<th>Kelas</th>
								<th>Jenis Kelamin</th>
								<th>Rata-Rata Raport</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@php $no = 1; @endphp
							@foreach ($siswa as $x)
							<tr>
								<td>{{$no++}}</td>
								<td>{{$x->nama_siswa}}</td>
								<td>{{$x->kelas}}</td>
								<td>{{$x->jenis_kelamin}}</td>
								<td>{{$x->nilai_rapot}}</td>
								<td>
									<div class="btn-group" role="group" aria-label="Basic mixed styles example">
										<a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit-{{$x->id_siswa}}">Edit</a>
										<a href="{{url('/hapus-siswa')}}/{{$x->id_siswa}}" class="btn btn-danger btn1">Hapus</a>

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



<!-- Modal tambah data -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			
			<form action="{{url('post-siswa')}}" method="post">
				<div class="modal-body">
					@csrf
					<div class="mb-3">
						<label class="form-label">Nama Siswa<label 	class="text-danger">*</label></label>
						<input type="text" class="form-control {{ $errors->has('nama_siswa') ? ' is-invalid' : '' }}" name="nama_siswa" required>
						@if($errors->has('nama_siswa'))
						<span class="invalid-feedback">{{ $errors->first('nama_siswa') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label class="form-label">Kelas<label 	class="text-danger">*</label></label>
						<select class="form-control {{ $errors->has('kelas') ? ' is-invalid' : '' }}" name="kelas" required>
							<option value="">--Pilih Kelas--</option>
							<option value="7">Kelas 7</option>
							<option value="8">Kelas 8</option>
							<option value="9">Kelas 9</option>
						</select>
						@if($errors->has('kelas'))
						<span class="invalid-feedback">{{ $errors->first('kelas') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label 	class="text-danger form-label">*</label>
						<div class="form-check form-check-inline">

							<input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="laki-laki">
							<label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="perempuan">
							<label class="form-check-label" for="inlineRadio2">Perempuan</label>
						</div>
					</div>

					<div class="mb-3">
						<label class="form-label">Nilai Rapot<label class="text-danger">*</label></label>
						<input type="number" class="form-control {{ $errors->has('nilai_rapot') ? ' is-invalid' : '' }}" name="nilai_rapot" required>
						@if($errors->has('nilai_rapot'))
						<span class="invalid-feedback">{{ $errors->first('nilai_rapot') }}</span>
						@endif
					</div>
				</div>


				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-success">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>


<!-- Modal edit data -->
@foreach ($siswa as $e)
<div class="modal fade" id="edit-{{$e->id_siswa}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h5 class="modal-title" id="exampleModalLabel">Edit Siswa</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="{{url('/update-siswa')}}/{{$e->id_siswa}}" method="post">
				<div class="modal-body">
					@csrf
					<div class="mb-3">
						<label class="form-label">Nama Siswa</label>
						<input type="text" class="form-control" name="nama_siswa" value="{{$e->nama_siswa}}"
						required>
					</div>

					<div class="mb-3">
						<label class="form-label">Kelas</label>
						<select class="form-control" name="kelas" required>

							<option value="{{$e->kelas}}">{{$e->kelas}}</option>
							<hr>
							<option value="7">Kelas 7</option>
							<option value="8">Kelas 8</option>
							<option value="9">Kelas 9</option>
						</select>
					</div>

					<div class="mb-3">
						<label for="jenis_kelamin">Jenis Kelamin :</label> <br>
						<div class="form-check form-check-inline">
							<label for="jenis_kelamin">
								<input type="radio" name="jenis_kelamin" value="laki-laki" id="jenis_kelamin" {{$e->jenis_kelamin == 'laki-laki'? 'checked' : ''}}>Laki-Laki
								<input type="radio" name="jenis_kelamin" value="perempuan" id="jenis_kelamin" {{$e->jenis_kelamin == 'perempuan'? 'checked' : ''}}>Perempuan
							</label>
						</div>
					</div>
					<div class="mb-3">
						<label class="form-label">Nilai Rapot</label>
						<input type="number" class="form-control" name="nilai_rapot" value="{{$e->nilai_rapot}}" required>
					</div>
				</div>


				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-success">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endforeach
@endsection