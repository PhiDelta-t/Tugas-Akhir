<?php

namespace App\Http\Controllers;

use App\Models\TransaksiBarangMasuk;
use App\Models\Supplier;
use App\Models\Admin;
use Illuminate\Http\Request;

class TransaksiBarangMasukController extends Controller
{
    public function index()
    {
        return view('barang_masuk.index');
    }

    public function create()
    {
        $suppliers = Supplier::all();
        $admins = Admin::all();
        return view('barang_masuk.create', compact('suppliers', 'admins'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jumlah_masuk' => 'required|integer',
            'tanggal_masuk' => 'required|date',
            'supplier_id_supplier' => 'required|exists:supplier,id_supplier',
            'admin_id_admin' => 'required|exists:admin,id_admin',
        ]);

        TransaksiBarangMasuk::create($validatedData);

        return redirect()->route('transaksi_barang_masuk.index')->with('success', 'Transaksi Barang Masuk created successfully.');
    }

    public function show(TransaksiBarangMasuk $transaksiBarangMasuk)
    {
        return view('transaksi_barang_masuk.show', compact('transaksiBarangMasuk'));
    }

    public function edit(TransaksiBarangMasuk $transaksiBarangMasuk)
    {
        $suppliers = Supplier::all();
        $admins = Admin::all();
        return view('transaksi_barang_masuk.edit', compact('transaksiBarangMasuk', 'suppliers', 'admins'));
    }

    public function update(Request $request, TransaksiBarangMasuk $transaksiBarangMasuk)
    {
        $validatedData = $request->validate([
            'jumlah_masuk' => 'required|integer',
            'tanggal_masuk' => 'required|date',
            'supplier_id_supplier' => 'required|exists:supplier,id_supplier',
            'admin_id_admin' => 'required|exists:admin,id_admin',
        ]);

        $transaksiBarangMasuk->update($validatedData);

        return redirect()->route('transaksi_barang_masuk.index')->with('success', 'Transaksi Barang Masuk updated successfully.');
    }

    public function destroy(TransaksiBarangMasuk $transaksiBarangMasuk)
    {
        $transaksiBarangMasuk->delete();
        return redirect()->route('transaksi_barang_masuk.index')->with('success', 'Transaksi Barang Masuk deleted successfully.');
    }
}
