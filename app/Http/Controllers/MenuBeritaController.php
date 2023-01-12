<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class MenuBeritaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $berita = Berita::get();
       return view('admin.menuberita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $berita = Berita::all();
        return view('admin.menuberita.create');
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
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        $berita = new Berita();
        $berita->content = $request->get('content');
        $berita->title = $request->get('title');

         //Menyimpan gambar
         if($request->file('image')){
            $filename = $request->file('image')->store('img/berita', 'public');
            $berita->image = $filename;
        }
        $berita->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('menuberita.index')
            ->with('success', 'Berita Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = Berita::find($id);
        return view('admin.menuberita.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('admin.menuberita.edit', compact('berita'));
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
            'title' => 'required',
            'image' => 'required',
            'content' => 'required',
        ]);

        //eloquent untuk insert data mahasiswa
        $berita = Berita::find($id);
        $berita->title = $request->get('title');        
        $berita->content = $request->get('content');

        //Menghapus gambar profil yang sama
        if($berita->image && file_exists(storage_path('app/public' . $berita->image))){
            \Storage::delete('public/' . $berita->image);
        }
        //Menyimpan gambar
        if($request->file('image')){
            $filename = $request->file('image')->store('img/berita', 'public');
            $berita->image = $filename;
        }    
        $berita->save();
        
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('menuberita.index')
            ->with('success', 'Berita Berhasil Diupdate');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Berita::find($id)->delete();
        return redirect()->route('menuberita.index')->with('success', 'Berita Berhasil Dihapus');
    }
}
