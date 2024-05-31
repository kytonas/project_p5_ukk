<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Jabatan;
use App\Models\Struktural;
use Illuminate\Http\Request;

class StrukturalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $struktural = Struktural::all();
        return view('struktural.index', compact('struktural'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::all();
        $jabatan = Jabatan::all();
        return view('struktural.create', compact('guru', 'jabatan'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $struktural = new Struktural;
        $struktural->id_guru = $request->id_guru;
        $struktural->id_jabatan = $request->id_jabatan;
        //upload image
        if ($request->hasFile('sampul')) {
            $img = $request->file('sampul');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/struktural', $name);
            $struktural->sampul = $name;

        }

        $struktural->save();
        return redirect()->route('struktural.index')->with('success', 'Data Berhasil Ditambah');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $struktural = Struktural::findOrFail($id);
        return view('struktural.show', compact('struktural'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $struktural = Struktural::findOrFail($id);
        $guru = Guru::all();
        $jabatan = Jabatan::all();
        return view('struktural.edit', compact('struktural', 'guru', 'jabatan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $struktural = Struktural::findOrFail($id);
        $struktural->id_guru = $request->id_guru;
        $struktural->id_jabatan = $request->id_jabatan;
        if ($request->hasFile('sampul')) {
            $struktural->deleteImage();
            $img = $request->file('sampul');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/struktural', $name);
            $struktural->sampul = $name;

        }

        $struktural->save();
        return redirect()->route('struktural.index')->with('success', 'Data Berhasil Ditambah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $struktural = Struktural::findOrFail($id);
        $struktural->delete();
        return redirect()->route('struktural.index');
    }
}
