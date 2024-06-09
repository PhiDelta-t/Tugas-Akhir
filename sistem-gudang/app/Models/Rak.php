<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Rak extends Model
{
    protected $table = "rak";

    protected $fillable = [
        'no_rak'
    ];

    public function barang()
    {
        return $this->hasOne(Barang::class);
    }

    
}
