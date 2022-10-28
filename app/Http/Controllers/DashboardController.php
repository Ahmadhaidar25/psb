<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use App\Models\kriteria;
Use App\Models\alternatif;
Use App\Models\moora;
Use App\Models\smart;

class DashboardController extends Controller
{
    
    public function index()
    {

        
        $user = User::all()->count();
        $kriteria = kriteria::all()->count();
        $alternatif = alternatif::all()->count();
        $moora = moora::all()->count();
        $smart = smart::all()->count();
        return view('dashboard',compact('user','kriteria','alternatif','moora','smart'));
    }

    
}
