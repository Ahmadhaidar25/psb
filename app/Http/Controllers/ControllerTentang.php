<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerTentang extends Controller
{
    public function tentang()
    {
        return view('tentang.tentang');
    }
}
