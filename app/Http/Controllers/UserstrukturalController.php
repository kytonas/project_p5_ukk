<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Struktural;

class UserstrukturalController extends Controller
{
    public function index()
    {
        $struktural = Struktural::all();

        return view('userstruktural.index', compact('struktural'));

    }   
}
