<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class MenuGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::get();
        return view('admin.menugaleri.index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galeri = Galeri::all();
        return view('admin.menugaleri.create');
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
            'image' => 'required',
        ]);

        //eloquent untuk insert data mahasiswa
        $galeri = new Galeri();
        $galeri->title = $request->get('title');

        //Menyimpan gambar
        if($request->file('image')){
            $filename = $request->file('image')->store('img/profil', 'public');
            $galeri->image = $filename;
        }
        $galeri->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('menugaleri.index')
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
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $galeri = Galeri::find($id);
        return view('admin.menugaleri.detail', compact('galeri'));
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
        $galeri = Galeri::find($id);
        return view('admin.menugaleri.edit', compact('galeri'));
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
        ]);

        //eloquent untuk insert data mahasiswa
        $galeri = Galeri::find($id);
        $galeri->title = $request->get('title');

        //Menghapus gambar profil yang sama
        if($galeri->image && file_exists(storage_path('app/public' . $galeri->image))){
            \Storage::delete('public/' . $galeri->image);
        }
        //Menyimpan gambar
        if($request->file('image')){
            $filename = $request->file('image')->store('img/profil', 'public');
            $galeri->image = $filename;
        }    
        $galeri->save();
        
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('menugaleri.index')
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
        Galeri::find($id)->delete();
        return redirect()->route('menugaleri.index')
            -> with('success', 'Galeri Berhasil Dihapus');
    }
}
