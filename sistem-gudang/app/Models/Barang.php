<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barang";

    protected $fillable = [
        'nama_barang',
        'deskripsi',
        'harga',
        'jumlah_stok',
        'tanggal_produksi',
        'tanggal_kadaluarsa',
        'rak_id'
    ];
    public function rak()
    {
        return $this->belongsTo(Rak::class, 'rak_id');
    }
}
