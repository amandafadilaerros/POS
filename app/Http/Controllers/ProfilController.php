<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index($id, $nama){
        return view('profil.profil')
        ->with('id', $id)
        ->with('nama', $nama);
    }
}
