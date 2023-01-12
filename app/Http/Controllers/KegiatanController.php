<?php

namespace App\Http\Controllers;

use App\Models\KegiatanPenataan;
use App\Models\KegiatanPengendalian;
use App\Models\KegiatanPersampahan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function persampahan(){
        $persampahan = KegiatanPersampahan::get();
        return view('kegiatan-persampahan', compact('persampahan'));
    }

    public function penataan(){
        $penataan = KegiatanPenataan::get();
        return view('kegiatan-penataan', compact('penataan'));
    }

    public function pengendalian(){
        $pengendalian= KegiatanPengendalian::get();
        return view('kegiatan-pengendalian', compact('pengendalian'));
    }
}
