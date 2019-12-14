<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class page extends Controller
{
     public function services()
    {
        return view('services');
    }
    public function location()
    {
        return view('location');
    }
      public function portfolio()
    {
        return view('portafolio');
    }
     public function peinados()
    {
        return view('peinados');
    }

    public function unas()
    {
        return view('unas');
    }
    public function maquillaje()
    {
        return view('maquillaje');
    }
}
