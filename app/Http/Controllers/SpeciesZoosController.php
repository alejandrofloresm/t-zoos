<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Zoo;
use App\Species;

class SpeciesZoosController extends Controller
{
    //
    public function edit(Request $req, Zoo $zoo) {
        $species = Species::all();
        return view('zoos.species.edit', ['zoo' => $zoo, 'species' => $species]);
    }

    public function update(Request $req, Zoo $zoo) {
        $sp = $req->input('species');
        dd($sp);
    }
}
