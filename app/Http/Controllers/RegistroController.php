<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    //
    function index(Request $req) {
        return view('registro.index');
    }

    function pruebas(Request $req) {
        return view('registro.pruebas');
    }
}
