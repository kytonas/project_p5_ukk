<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class BerandaController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();

        return view('welcome', compact('artikel'));

    }   

    public function show($id){
        $artikel = Artikel::findOrFail($id);
        return view('beranda.show', compact('artikel'));
    }
}
