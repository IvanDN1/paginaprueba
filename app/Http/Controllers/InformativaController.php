<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformativaController extends Controller
{
public function welcome()
{
    return view('welcome');
}

public function contacto()
{
    return view('contacto');
}

public function mision()
{
    return view('mision');
}

public function about()
{
    return view('about');
}

public function login()
{
    return view('login');
}

}
