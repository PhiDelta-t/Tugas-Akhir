<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiBarangMasuk extends Model
{
    use HasFactory;

    protected $table = 'transaksi_barang_masuk';
    protected $fillable = ['jumlah_masuk', 'tanggal_masuk', 'barang_id', 'supplier_id', 'admin_id'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
