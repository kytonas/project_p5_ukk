<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eskul;

class UsereskulController extends Controller
{
    public function index()
    {
        $eskul = Eskul::all();

        return view('userseskul.index', compact('eskul'));

    }   
}
