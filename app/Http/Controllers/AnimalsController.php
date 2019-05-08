<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;

class AnimalsController extends Controller
{
    //
    function index(Request $req) {
        $animals = Animal::all();
        return view('animals.index', ['animals' => $animals]);
    }

}
