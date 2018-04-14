<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\contactForm;
use App\Mail\contactExecutive;
use App\Contact;
use App\Executive;

class SiteController extends Controller {
    
    public function index() {
        return view('index');
    }

    public function store() {
        session()->flash('message', 'Mensaje Enviado Correctamente.');
        $contact = Contact::create(request(['contact','phone','email','message']));
        Mail::to($contact->email)->queue(new contactForm);
        $executives = Executive::all();
        foreach ($executives as $executive) {
            Mail::to($executive->email)->queue(new contactExecutive($contact->contact, $contact->phone, $contact->email, $contact->message));        
        }
        return redirect ('/');
    }
}
