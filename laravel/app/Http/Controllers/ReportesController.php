<?php

namespace App\Http\Controllers;

use App\Mail\ReportesMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReportesController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'contractNumber'=> 'required',
            'Faultdescription' =>'required',
            'telephoneR'=> 'required',
            'emailR'=> 'required'
        ]);
        $reporte = new ReportesMailable($request->all());
        Mail::to('chanrodrigo8c1@gmail.com')->send($reporte);
        return redirect()->back()->with('info', 'Tu mensaje a sido Enviado, te contestamos ala brevedad ');
    }
}
