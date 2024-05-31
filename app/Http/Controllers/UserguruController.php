<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class UserguruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();

        return view('userguru.index', compact('guru'));

    }   
}
