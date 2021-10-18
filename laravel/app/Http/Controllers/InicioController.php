<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    //

    public function index()
    {
        //
        return view('telecable.inicio');
    }

    public function canales()
    {
        //
        return view('telecable.canales');
    }
    public function preguntas()
    {
        return view('telecable.preguntas');
    }
    public function sobre()
    {
        // $documento = public_path()."/assets/pdf/AnexoA.pdf";
        // $headers = array('Content-Type:application/pdf');
        // return response()->download($documento, 'AnexoA.pdf', $headers);
        
    }
    public function prueba()
    {
        return view('telecable.prueba');
    }
    public function avisos()
    {
        return view('telecable.legales');
    }
    
}
