@extends('layout.main')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data User</h1>

</div>

<!-- Content Row -->
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
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Gander</th>
                                <th>Level</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $x)
                            <tr>
                                <td>{{$x->nama}}</td>
                                <td>{{$x->email}}</td>
                                <td>{{$x->password}}</td>
                                <td>{{$x->jk}}</td>
                                <td>{{$x->level}}</td>
                                <td>

                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit-{{$x->id}}">Edit</a>
                                        <a href="{{url('/hapus/user')}}/{{$x->id}}" class="btn btn-danger btn1">Hapus</a>

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


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{url('simpan-user')}}" method="post">
                    <div class="modal-body">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="L">
                            <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="P">
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>

                        <select class="form-control mt-2" name="level">
                            <option selected>--Pilih Level--</option>
                            <option value="wali-kelas">Wali Kelas</option>
                            <option value="kesiswaan">Kesiswaan</option>
                        </select>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!--edit Modal -->
    @foreach ($user as $edit)
    <div class="modal fade" id="edit-{{$edit->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{url('/ubah/user')}}/{{$edit->id}}" method="post">
                    <div class="modal-body">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{$edit->nama}}">
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{$edit->email}}">
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Password</label>
                            <input type="password" class="form-control" name="password" value="{{$edit->password}}">
                        </div>
                        @if($edit->jk == "L")
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="L">
                            <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="P">
                            <label class="form-check-label" for="inlineRadio1">Perempuan</label>
                        </div>
                        @elseif($edit->jk == "P")
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="L">
                            <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="P">
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                        @endif

                        <select class="form-control mt-2" name="level">
                            <option value="{{$edit->level}}">{{$edit->level}}</option>
                            <option value="">--Pilih Level--</option>
                            <option value="wali-kelas">Wali Kelas</option>
                            <option value="kesiswaan">Kesiswaan</option>
                        </select>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection