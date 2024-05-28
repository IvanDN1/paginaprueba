<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function form(){
        return view('contact.form');
        }

    public function send(Request $request){
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
            'phone'=> 'required|integer',
            'subject'=> 'required|String']);


            Mail::to('correo@correo.cl')->send(new ContactForm($data));
            return back()->with('data', $data)->with('message', ['success', 'Message sent succesfully']);

    }

}
