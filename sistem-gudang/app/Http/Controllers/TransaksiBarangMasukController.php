<?php

namespace App\Http\Controllers;

use App\Models\TransaksiBarangMasuk;
use App\Models\Barang;
use App\Models\Supplier;
use App\Models\Admin;
use Illuminate\Http\Request;

class TransaksiBarangMasukController extends Controller
{
    public function index()
    {
        $barang_masuk = TransaksiBarangMasuk::all();
        return view('barang_masuk.index', compact('barang_masuk'));
    }

    public function create()
    {
        $barang = Barang::all();
        $supplier = Supplier::all();
        $admin = Admin::all();
        return view('barang_masuk.create', ['barang' => $barang, 'supplier' => $supplier, 'admin' => $admin]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'jumlah_masuk' => 'required|numeric|min:0',
            'tanggal_masuk' => 'required|date',
            'barang_id' => 'required',
            'supplier_id' => 'required',
            'admin_id' => 'required',
        ]);

        $transaksi_barang_masuk= new TransaksiBarangMasuk;

        $transaksi_barang_masuk->jumlah_masuk = $request->jumlah_masuk;
        $transaksi_barang_masuk->tanggal_masuk = $request->tanggal_masuk;
        $transaksi_barang_masuk->barang_id = $request->barang_id;
        $transaksi_barang_masuk->supplier_id = $request->supplier_id;
        $transaksi_barang_masuk->admin_id = $request->admin_id;

        $transaksi_barang_masuk->save();

        return redirect('/barangmasuk');

    }

    public function show(string $id)
    {
        $masuk = TransaksiBarangMasuk::find($id);
        $barang = Barang::all();
        $supplier = Supplier::all();
        $admin = Admin::all();
        return view('barang_masuk.show', compact('masuk', 'barang', 'supplier', 'admin'));
    }

    public function edit(string $id)
    {
        $masuk = TransaksiBarangMasuk::findOrFail($id);
        $barang = Barang::all();
        $supplier = Supplier::all();
        $admin = Admin::all();
        return view('barang_masuk.edit', compact('masuk', 'barang', 'supplier', 'admin'));
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'jumlah_masuk' => 'required|integer',
            'tanggal_masuk' => 'required|date',
            'barang_id' => 'required',
            'supplier_id' => 'required',
            'admin_id' => 'required',
        ]);

        $transaksi_barang_masuk= TransaksiBarangMasuk::findOrFail($id);;

        $transaksi_barang_masuk->jumlah_masuk = $request->jumlah_masuk;
        $transaksi_barang_masuk->tanggal_masuk = $request->tanggal_masuk;
        $transaksi_barang_masuk->barang_id = $request->barang_id;
        $transaksi_barang_masuk->supplier_id = $request->supplier_id;
        $transaksi_barang_masuk->admin_id = $request->admin_id;

        $transaksi_barang_masuk->save();

        return redirect('/barangmasuk');
    }

    public function destroy($id)
    {
        $transaksi_barang_masuk = TransaksiBarangMasuk::findOrFail($id);
        $transaksi_barang_masuk->delete();
        return redirect('/barangmasuk');
        
    }
}
