<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiBarangMasuk extends Model
{
    use HasFactory;

    protected $fillable = ['jumlah_masuk', 'tanggal_masuk', 'supplier_id_supplier', 'admin_id_admin'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id_supplier');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id_admin');
    }
}

