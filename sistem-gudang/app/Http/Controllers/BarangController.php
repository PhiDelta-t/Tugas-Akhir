<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('pages.barang.index', compact('barang'));
    }

    public function create()
    {
        return view('pages.barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'jumlah_stok' => 'required|integer',
            'tanggal_produksi' => 'required|date',
            'tanggal_kadaluarsa' => 'required|date',
        ]);

        Barang::create($request->all());

        return redirect()->route('barang.index')
                         ->with('success', 'Barang created successfully.');
    }

    public function show(Barang $barang)
    {
        return view('pages.barang.show', compact('barang'));
    }

    public function edit(Barang $barang)
    {
        return view('pages.barang.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'jumlah_stok' => 'required|integer',
            'tanggal_produksi' => 'required|date',
            'tanggal_kadaluarsa' => 'required|date',
        ]);

        $barang->update($request->all());

        return redirect()->route('pages.barang.index')
                         ->with('success', 'Barang updated successfully.');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();

        return redirect()->route('pages.barang.index')
                         ->with('success', 'Barang deleted successfully.');
    }
}
