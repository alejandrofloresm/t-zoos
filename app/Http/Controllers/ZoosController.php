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
        $name = $req->input('zoo.name');
        $city = $req->input('zoo.city');
        $country = $req->input('zoo.country');
        $size = $req->input('zoo.size');
        $annual_budget = $req->input('zoo.budget');

        Zoo::create([
            'name' => $name,
            'city' => $city,
            'country' => $country,
            'size' => $size,
            'annual_budget' => $annual_budget,
        ]);

        return redirect()->route('zoos.index');
    }
}
