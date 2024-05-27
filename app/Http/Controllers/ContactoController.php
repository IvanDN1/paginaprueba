<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index() {
        return view('Contacto.index');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'correo' =>'required|email',
            'mensaje' => 'required'
        ]);


        Mail::to('Practicas')
        ->send(new ContactoMailable($request->all()));
    }



}
