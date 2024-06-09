<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiBarangKeluar extends Model
{
    use HasFactory;
    protected $table = 'transaksi_barang_keluar';
    protected $fillable = ['jumlah_keluar', 'tanggal_keluar', 'barang_id', 'admin_id'];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
