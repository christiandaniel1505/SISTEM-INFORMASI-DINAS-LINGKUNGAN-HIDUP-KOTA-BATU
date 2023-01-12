<?php

namespace App\Http\Controllers;

use App\Models\KegiatanPersampahan;
use Illuminate\Http\Request;

class KegiatanPersampahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persampahan = KegiatanPersampahan::get();
        return view('admin.kegiatanpersampahan.index', compact('persampahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $persampahan = KegiatanPersampahan::all();
        return view('admin.kegiatanpersampahan.create');
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
        $persampahan = new KegiatanPersampahan();
        $persampahan ->content = $request->get('content');
        $persampahan ->title_image = $request->get('title_image');

        //Menyimpan gambar
        if($request->file('image')){
            $filename = $request->file('image')->store('img/kegiatan-persampahan', 'public');
            $persampahan->image = $filename;
        }
        $persampahan->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('kegiatanpersampahan.index')
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
        $persampahan = KegiatanPersampahan::find($id);
        return view('admin.kegiatanpersampahan.detail', compact('persampahan'));
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
         $persampahan = KegiatanPersampahan::find($id);
         return view('admin.kegiatanpersampahan.edit', compact('persampahan'));
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
        $persampahan = KegiatanPersampahan::find($id);
        $persampahan->content = $request->get('content');
        $persampahan->title_image = $request->get('title_image');

        //Menghapus gambar profil yang sama
        if($persampahan->image && file_exists(storage_path('app/public' . $persampahan->image))){
            \Storage::delete('public/' . $persampahan->image);
        }
        //Menyimpan gambar
        if($request->file('image')){
            $filename = $request->file('image')->store('img/kegiatan-persampahan', 'public');
            $persampahan->image = $filename;
        }    
        $persampahan->save();
        
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('kegiatanpersampahan.index')
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
         KegiatanPersampahan::find($id)->delete();
         return redirect()->route('kegiatanpersampahan.index')
             -> with('success', 'Galeri Berhasil Dihapus');
    }
}
