@extends('layout.main')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Kriteria</h1>

</div>

<!-- Content Row -->
<div class="row">

    <div class="container-fluid">



        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"></h6>
                <!--<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah
                </button>-->
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table_id" class="display table">
                        <thead>
                            <tr>
                              
                                <th>Kode Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Bobot</th>
                                <th>Jenis</th>
                                <!--<th>Action</th>-->
                            </tr>
                        </thead>
                        <tbody>
                        
                            @foreach ($data as $k)
                            <tr>
                                
                                <td>{{$k->kode_kriteria}}</td>
                                <td>{{$k->nama_kriteria}}</td>
                                <td>{{$k->bobot}}</td>
                                <td>{{$k->jenis}}</td>
                                <!--<td>
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit-{{$k->kode_kriteria}}">Edit</a>
                                        <a href="{{url('/hapus/kriteria')}}/{{$k->kode_kriteria}}" class="btn btn-danger btn1">Hapus</a>

                                    </div>
                                </td>-->
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kriteria</h5>
                
            </div>
            <form action="{{url('simpan-kriteria')}}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Kode Kriteria<label class="text-danger form-label">*</label></label>
                        <input type="text" class="form-control" name="kode_kriteria" value="{{$nomer}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nama Kriteria <label class="text-danger form-label">*</label></label>
                        <input type="text" class="form-control" name="nama_kriteria" required>
                    </div>
                    
                    

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Bobot<label class="text-danger form-label">*</label></label>
                        <input type="text" class="form-control" name="bobot" required>
                    </div>

                    <div class="mb-3">
                        <label class="col-form-label">Jenis<label class="text-danger form-label">*</label></label>
                        <select class="form-control" name="jenis" required>
                            <option value="">--Pilih Jenis--</option>
                            <option value="benefit">Benefit</option>
                            <option value="cost">Cost</option>

                        </select>
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


<!-- Edit Modal -->
@foreach($data as $edit)
<div class="modal fade" id="edit-{{$edit->kode_kriteria}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Edit Kriteria</h5>
            </div>
            <form action="{{url('/ubah/kriteria')}}/{{$edit->kode_kriteria}}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Kode Kriteria<label class="text-danger form-label">*</label></label>
                        <input type="text" class="form-control" name="kode_kriteria" value="{{$edit->kode_kriteria}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nama Kriteria <label class="text-danger form-label">*</label></label>
                        <input type="text" class="form-control" name="nama_kriteria" value="{{$edit->nama_kriteria}}">
                    </div>
                   
                    

                     <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Bobot<label class="text-danger form-label">*</label></label>
                        <input type="text" class="form-control" name="bobot" value="{{$edit->bobot}}">
                    </div>

                    <div class="mb-3">
                        <label class="col-form-label">Jenis<label class="text-danger form-label">*</label></label>
                        <select class="form-control" name="jenis">
                            <option value="{{$edit->jenis}}">{{$edit->jenis}}</option>
                            <option value="">--Pilih Jenis--</option>
                            <option value="benefit">Benefit</option>
                            <option value="cost">Cost</option>

                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-success">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection