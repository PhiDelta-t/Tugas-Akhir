@extends('layouts.master')

@section('content')
    <h1>Create New Barang</h1>
    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <div>
            <label>Nama Barang:</label>
            <input type="text" name="nama_barang" required>
        </div>
        <div>
            <label>Deskripsi:</label>
            <textarea name="deskripsi" required></textarea>
        </div>
        <div>
            <label>Harga:</label>
            <input type="number" name="harga" step="0.01" required>
        </div>
        <div>
            <label>Jumlah Stok:</label>
            <input type="number" name="jumlah_stok" required>
        </div>
        <div>
            <label>Tanggal Produksi:</label>
            <input type="date" name="tanggal_produksi" required>
        </div>
        <div>
            <label>Tanggal Kadaluarsa:</label>
            <input type="date" name="tanggal_kadaluarsa" required>
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection
