<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_laporan',
        'tanggal_melapor',
        'nama_pelapor',
        'umur',
        'alamat_pelapor',
        'waktu_kejadian',
        'tempat_kejadian',
        'pasal_pidana',
        'identitas_pelapor',
        'identitas_korban',
        'uraian_kejadian',
        'unit',
        'perkembangan',
        'ditangani',
        'identitas_pemilik',
        'jenis_kendaraan',
        'nopol',
        'warna',
        'no_rangka',
        'no_mesin',
    ];
}
