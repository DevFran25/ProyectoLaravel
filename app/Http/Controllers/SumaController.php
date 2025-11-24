<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //Recepcionar las solicitudes HTTP

class SumaController extends Controller
{
    public function index(){
        return view('suma', ['res' => null]); // Mostrar la vista inicial sin resultado
    }
}
