<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class MenuProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program = Program::get();
        return view('menuprogram.index', compact('program'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $program = Program::all();
        return view('menuprogram.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no1' => 'required',
            'kegiatan1' => 'required',
			'no2' => 'required',
            'kegiatan2' => 'required',
			'no3' => 'required',
            'lainnya' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        Program::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('menuprogram.index')
            ->with('success', 'Program Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $program = Program::find($id);
        return view('menuprogram.show', compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program = Program::find($id);
        return view('menuprogram.edit', compact('program'));
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
        $request->validate([
            'no1' => 'required',
            'kegiatan1' => 'required',
			'no2' => 'required',
            'kegiatan2' => 'required',
			'no3' => 'required',
            'lainnya' => 'required',
        ]);

        Program::find($id)->update($request->all());

        return redirect()->route('menuprogram.index')->with('success', 'Program Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Program::find($id)->delete();
        return redirect()->route('menuprogram.index')->with('success', 'Program Berhasil Dihapus');
    }
}
