<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanPersampahan extends Model
{
    use HasFactory;

    protected $table = 'kegiatan_persampahans';
    public $timestamps = false;
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey

    protected $fillable = [
        'title_image',
        'content',
        'image',
    ];
}
