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

public function cursos()
{
    return view('cursos');
}

public function nosotros()
{
    return view('nosotros');
}

public function login()
{
    return view('login');
}

}
