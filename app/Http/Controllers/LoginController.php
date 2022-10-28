<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use session;


class LoginController extends Controller
{
    
    public function index()
    {
        return view('auth.login');
    }

    public function login_post(Request $request)
    {
       $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ],[
        'email.required' => "email harus di isi",
        'password.required' => "password harus di isi",
    ]);


       if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        alert()->success('Success','Login Berhasil');
        return redirect()->intended('dashboard');
    }else
    alert()->error('Login gagal','silahkan Priksa email dan password anda');

    return redirect('/');
}

     
    public function store(Request $request)
    {
       
       $request->validate([
        'nama' => 'required',
        'email' => 'required|unique',
        'password' => 'required',
        'jk' => 'required',
        'level' => 'required',
    ],[
        'nama.required' => "nama harus di isi",
        'email.required' => "password harus di isi",
        'password.required' => "password harus di isi",
        'jk.required' => "jenis kelamin harus di isi",
        'level.required' => "level harus di isi",
    ]);

       if ($request == 0) {
          alert()->error('Error','KOlom TIdak BOleh kosong error');
       }else{

       $register = new User;
       $register->nama = $request->nama;
       $register->email = $request->email;
       $register->password = Hash::make($request->password);
       $register->jk = $request->jk;
       $register->level = $request->level;
       alert()->success('Success','Register Berhasil');
       $register->save();

       return back();
   }
   }

    
    public function logout()
    {
      Auth::logout();
      alert()->success('Success','Logout Berhasil');
      return redirect('/');
  }

   
    
}
