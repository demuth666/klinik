<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $table = 'obat';

    protected $fillable = [
        'id', 'nama_obat', 'nama_dagang', 'golongan_obat', 'unit', 'perusahaan', 'jenis', 'pemasok', 'expired', 'isexpired',
        'harga_beli', 'harga_beli_strip', 'harga_beli_satuan'
    ];
}
