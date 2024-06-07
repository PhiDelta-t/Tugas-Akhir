@extends('layouts.master')

@section('content')
    <h1>Detail Barang</h1>
    <ul>
        <li><strong>Nama Barang:</strong> {{ $barang->nama_barang }}</li>
        <li><strong>Deskripsi:</strong> {{ $barang->deskripsi }}</li>
        <li><strong>Harga:</strong> {{ $barang->harga }}</li>
        <li><strong>Jumlah Stok:</strong> {{ $barang->jumlah_stok }}</li>
        <li><strong>Tanggal Produksi:</strong> {{ $barang->tanggal_produksi }}</li>
        <li><strong>Tanggal Kadaluarsa:</strong> {{ $barang->tanggal_kadaluarsa }}</li>
        <!-- Tambahkan detail lainnya jika diperlukan -->
    </ul>
    <a href="{{ route('barang.index') }}" class="btn btn-primary">Kembali</a>
@endsection
