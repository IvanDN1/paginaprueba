<?php

namespace App\Http\Controllers;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function form()
    {
        return view('Contact.form');
    }
    public function send(Request $request){
        $data = $request->validate([
        'name' => 'required',
        'subject' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'message' => 'required' ]);

        Mail::to('practicas@tmcapacitacion.cl')->send(new ContactForm($data));
        return back()->with('data', $data)->with('message', ['success', 'Message sent succesfully']);
}

}
