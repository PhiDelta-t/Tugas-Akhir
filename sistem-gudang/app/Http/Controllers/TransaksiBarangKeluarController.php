<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiBarangKeluarController extends Controller
{
    public function index()
    {
        return view('barang_keluar.index');
    }
}
