<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zoo;

class ZoosController extends Controller
{
    //
    function index(Request $req) {
        $zoos = Zoo::all();
        return view('zoos.index', ['zoos' => $zoos]);
    }

    function create(Request $req) {
        return view('zoos.create');
    }

    function show(Request $req, Zoo $zoo) {
        return view('zoos.show', ['zoo' => $zoo]);
    }

    function store(Request $req) {
        $zoo = $req->input('zoo');
        Zoo::create($zoo);
        return redirect()->route('zoos.index');
    }
}
