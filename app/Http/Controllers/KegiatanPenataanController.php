<?php

namespace App\Http\Controllers;

use App\Models\KegiatanPenataan;
use Illuminate\Http\Request;

class KegiatanPenataanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penataan = KegiatanPenataan::get();
        return view('admin.kegiatanpenataan.index', compact('penataan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penataan = KegiatanPenataan::all();
        return view('admin.kegiatanpenataan.create');
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
        $penataan = new KegiatanPenataan();
        $penataan ->content = $request->get('content');
        $penataan ->title_image = $request->get('title_image');

        //Menyimpan gambar
        if($request->file('image')){
            $filename = $request->file('image')->store('img/kegiatan-penataan', 'public');
            $penataan->image = $filename;
        }
        $penataan->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('kegiatanpenataan.index')
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
        $penataan = KegiatanPenataan::find($id);
        return view('admin.kegiatanpenataan.detail', compact('penataan'));
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
         $penataan = KegiatanPenataan::find($id);
         return view('admin.kegiatanpenataan.edit', compact('penataan'));
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
        $penataan = KegiatanPenataan::find($id);
        $penataan->content = $request->get('content');
        $penataan->title_image = $request->get('title_image');

        //Menghapus gambar profil yang sama
        if($penataan->image && file_exists(storage_path('app/public' . $penataan->image))){
            \Storage::delete('public/' . $penataan->image);
        }
        //Menyimpan gambar
        if($request->file('image')){
            $filename = $request->file('image')->store('img/kegiatan-penataan', 'public');
            $penataan->image = $filename;
        }    
        $penataan->save();
        
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('kegiatanpenataan.index')
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
         KegiatanPenataan::find($id)->delete();
         return redirect()->route('kegiatanpenataan.index')
             -> with('success', 'Galeri Berhasil Dihapus');
    }
}
