<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class ControllerSiswa extends Controller
{
    public function kelola_data_kelas()
    {
        $siswa = siswa::all();
        return view('siswa.siswa', compact('siswa'));
    }


    public function post_siswa(Request $request)
    {
        $post=new siswa;
        $post->nama_siswa = $request->nama_siswa;
        $post->kelas = $request->kelas;
        $post->jenis_kelamin = $request->jenis_kelamin;
        $post->nilai_rapot = $request->nilai_rapot;
        alert()->success('Success','Data Berhasil Di Simpan');
        $post->save();
        return back();
    }

    
    public function update_siswa(Request $request, $id_siswa)
    {
        $update=siswa::find($id_siswa);
        $update->nama_siswa = $request->nama_siswa;
        $update->kelas = $request->kelas;
        $update->jenis_kelamin = $request->jenis_kelamin;
        $update->nilai_rapot = $request->nilai_rapot;
        alert()->success('Success','Data Berhasil Di Ubah');
        $update->update();
        return back();
    }


    public function hapus_siswa($id)
    {
        $hapus = siswa::find($id);
        alert()->success('Success','Data Berhasil Di Hapus');
        $hapus->delete();
        return back();
    }


}
