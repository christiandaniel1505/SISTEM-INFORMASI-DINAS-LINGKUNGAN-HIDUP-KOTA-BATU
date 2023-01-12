<?php

namespace App\Http\Controllers;

use App\Models\KegiatanPengendalian;
use Illuminate\Http\Request;

class KegiatanPengendalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengendalian = KegiatanPengendalian::get();
        return view('admin.kegiatanpengendalian.index', compact('pengendalian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengendalian = KegiatanPengendalian::all();
        return view('admin.kegiatanpengendalian.create');
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
            'title_image' => 'nullable',
            'content' => 'nullable',
            'image' => 'nullable',
        ]);

        //eloquent untuk insert data mahasiswa
        $pengendalian = new KegiatanPengendalian();
        $pengendalian ->content = $request->get('content');
        $pengendalian ->title_image = $request->get('title_image');

        //Menyimpan gambar
        if($request->file('image')){
            $filename = $request->file('image')->store('img/kegiatan-pengendalian', 'public');
            $pengendalian->image = $filename;
        }
        $pengendalian->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('kegiatanpengendalian.index')
            ->with('success', 'Galeri Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengendalian = KegiatanPengendalian::find($id);
        return view('admin.kegiatanpengendalian.detail', compact('pengendalian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
         $pengendalian = KegiatanPengendalian::find($id);
         return view('admin.kegiatanpengendalian.edit', compact('pengendalian'));
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
            'title_image' => 'nullable',
            'content' => 'nullable',
            'image' => 'nullable',
        ]);

        //eloquent untuk insert data mahasiswa
        $pengendalian = KegiatanPengendalian::find($id);
        $pengendalian->content = $request->get('content');
        $pengendalian->title_image = $request->get('title_image');

        //Menghapus gambar profil yang sama
        if($pengendalian->image && file_exists(storage_path('app/public' . $pengendalian->image))){
            \Storage::delete('public/' . $pengendalian->image);
        }
        //Menyimpan gambar
        if($request->file('image')){
            $filename = $request->file('image')->store('img/kegiatan-pengendalian', 'public');
            $pengendalian->image = $filename;
        }    
        $pengendalian->save();
        
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('kegiatanpengendalian.index')
            ->with('success', 'Galeri Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //fungsi eloquent untuk menghapus data
         KegiatanPengendalian::find($id)->delete();
         return redirect()->route('kegiatanpengendalian.index')
             -> with('success', 'Galeri Berhasil Dihapus');
    }
}
