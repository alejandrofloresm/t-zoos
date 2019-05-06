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
        $name = $req->input('name');
        $city = $req->input('city');
        $country = $req->input('country');
        $size = $req->input('size');
        $budget = $req->input('budget');
        $zoo = new \App\Zoo;
        $zoo->name = $name;
        $zoo->city = $city;
        $zoo->country = $country;
        $zoo->size = $size;
        $zoo->annual_budget = $budget;
        $zoo->save();
        return redirect()->route('zoos.index');
    }
}
