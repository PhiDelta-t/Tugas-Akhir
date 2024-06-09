<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Rak;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('pages.barang.index', compact('barangs'));
    }

    public function create()
    {
        $raks = Barang::all();
        return view('pages.barang.create', compact('raks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'jumlah_stok' => 'required|integer',
            'tanggal_produksi' => 'required|date',
            'tanggal_kadaluarsa' => 'required|date',
            'rak_id' => 'required|exists:raks,id'
        ]);

        Barang::create($request->all());
        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan.');
    }

    public function show(Barang $barang)
    {
        return view('pages.barang.show', compact('barang'));
    }

    public function edit(Barang $barang)
    {
        $raks = Rak::all();
        return view('pages.barang.edit', compact('barang', 'raks'));
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang' => 'required|string',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'jumlah_stok' => 'required|integer',
            'tanggal_produksi' => 'required|date',
            'tanggal_kadaluarsa' => 'required|date',
            'rak_id' => 'required|exists:raks,id'
        ]);

        $barang->update($request->all());
        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui.');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus.');
    }
}
