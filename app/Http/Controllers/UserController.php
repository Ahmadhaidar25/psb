<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
{
   
    public function index()
    {
       $user = User::all();
       return view('user.user', compact('user'));
   }

    public function ubah_password()
    {
        return view('ubah-password.ubah-password');
    }

    public function update_password(Request $request)
    {
        //dd('success');

        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed'],

        ]);

        if (Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
            alert()->success('Update Password Berhasil');
            return back();



        }else{
            alert()->warning('Warning','Password Lama Anda Tidak Sesuai');
            return redirect('reset-password');
        }

    }

    public function store(Request $request)
    {
        //dd($request->all());
       $request->validate([
        'nama' => 'required',
        'email' => 'required',
        'password' => 'required',
        'jk' => 'required',
        'level' => 'required',
    ]);

       $register = new User;
       $register->nama = $request->nama;
       $register->email = $request->email;
       $register->password = Hash::make($request->password);
       $register->jk = $request->jk;
       $register->level = $request->level;
       alert()->success('Success','User Berhasil Di tambahkan');
       $register->save();

       return back();
   }

    
    public function show($id)
    {
      $hapus = User::find($id);
      $hapus->delete();
      alert()->success('Success','User Berhasil Di Hapus');
      return back();
  }

  

    public function update(Request $request, $id)
    {


       $ubah = User::find($id);
       $ubah->nama = $request->nama;
       $ubah->email = $request->email;
       $ubah->password = Hash::make($request->password);
       $ubah->jk = $request->jk;
       $ubah->level = $request->level;
       alert()->success('Success','User Berhasil Di Ubah');
       $ubah->update();

       return back();
   }

    
}
