<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
class ContactanosController extends Controller
{
    public function store(Request $request){
        // validar los campos
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ]);

    $correo = new ContactanosMailable($request->all());
    Mail::to('chanrodrigo8c1@gmail.com')->send($correo);
    return redirect()->back()->with('info','Tu mensaje a sido Enviado, te contestamos ala brevedad ');
    }
}
