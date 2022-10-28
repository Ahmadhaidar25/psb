<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerBantuan extends Controller
{
    public function bantuan()
    {
        return view('bantuan.bantuan');
    }
}
