<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class UserjurusanController extends Controller
{
     public function index()
    {
        $jurusan = Jurusan::all();

        return view('userjurusan.index', compact('jurusan'));

    }  
}
