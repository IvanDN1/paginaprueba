<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{

    public function cursoate()
    {
        return view('cursoate');
    }

    public function cursootec()
    {
        return view('cursootec');
    }

}
