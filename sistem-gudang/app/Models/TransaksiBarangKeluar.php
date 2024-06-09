<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiBarangKeluar extends Model
{
    use HasFactory;
    protected $table = 'transaksi_barang_keluar';
    protected $fillable = ['jumlah_keluar', 'tanggal_keluar', 'barang_id', 'admin_id'];


    public static function rules()
    {
        return [
            'jumlah_keluar' => 'required|integer|min:1', // Jumlah keluar harus lebih dari 0
            'tanggal_keluar' => 'required|date',
            'barang_id' => 'required|exists:barang,id', // Validasi apakah barang tersedia
            'admin_id' => 'required|exists:admin,id', // Validasi apakah admin tersedia
        ];
    }
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    
}
