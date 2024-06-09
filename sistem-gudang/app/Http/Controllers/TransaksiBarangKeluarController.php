<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Admin;
use App\Models\Transaksikeluar;

class TransaksiBarangKeluarController extends Controller
{
    public function index()
    {
        $barang_keluar = TransaksiKeluar::all();
        return view('pages.barang_keluar.index', compact('barang_keluar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Barang::all();
        $admin = Admin::all();
        return view('pages.barang_keluar.add', ['barang' => $barang, 'admin' => $admin]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jumlah_keluar' => 'required|numeric|min:0',
            'tanggal_keluar' => 'required|date',
            'barang_id' => 'required',
            'admin_id' => 'required',
        ]);

        
        $transaksi_barang_keluar= new Transaksikeluar;

        $transaksi_barang_keluar->jumlah_keluar = $request->jumlah_keluar;
        $transaksi_barang_keluar->tanggal_keluar = $request->tanggal_keluar;
        $transaksi_barang_keluar->barang_id = $request->barang_id;
        $transaksi_barang_keluar->admin_id = $request->admin_id;

        $transaksi_barang_keluar->save();

        return redirect('/barangkeluar');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $keluar = TransaksiKeluar::find($id);
        $barang = Barang::all();
        $admin = Admin::all();
        return view('barang_keluar.show', compact('keluar', 'barang', 'admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $keluar = TransaksiKeluar::findOrFail($id);
        $barang = Barang::all();
        $admin = Admin::all();
        return view('pages.barang_keluar.edit', compact('keluar', 'barang', 'admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'jumlah_keluar' => 'required|numeric|min:0',
            'tanggal_keluar' => 'required|date',
            'barang_id' => 'required',
            'admin_id' => 'required',
        ]);

        $transaksi_barang_keluar = Transaksikeluar::findOrFail($id);

        $transaksi_barang_keluar->jumlah_keluar = $request->jumlah_keluar;
        $transaksi_barang_keluar->tanggal_keluar = $request->tanggal_keluar;
        $transaksi_barang_keluar->barang_id = $request->barang_id;
        $transaksi_barang_keluar->admin_id = $request->admin_id;

        $transaksi_barang_keluar->save();

        return redirect('/barangkeluar');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $transaksi_barang_keluar = Transaksikeluar::findOrFail($id);
        $transaksi_barang_keluar->delete();
        return redirect('/barangkeluar');
    }

}



