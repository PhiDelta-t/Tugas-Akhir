<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = "admin";
    protected $fillable = ["username", "password", "nama", "no_hp", "alamat"];
}
