<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformativaController extends Controller
{
public function welcome()
{
    return view('welcome');
}


public function nosotros()
{
    return view('nosotros');
}


}
