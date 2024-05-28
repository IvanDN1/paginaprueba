<?php

namespace App\Http\Controllers;

use App\Mail\ContactoForm;
use App\Mail\ContactoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function form(){
        return view('contacto.form');
        }



    public function store(Request $request){

        $data = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required' ]);



        Mail::to('practicas@tmcapacitacion.cl')->send(new ContactoMailable($data));
   return back()->with('data', $data)->with('message', ['success', 'Message sent succesfully']);
    }



}
