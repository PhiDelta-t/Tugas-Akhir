@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Detail Barang
        </div>
        <div class="card-body">
            
            <p class="card-text"><strong>Nama Barang:</strong> {{ $barang->nama_barang }}</p>
            <p class="card-text"><strong>Deskripsi:</strong> {{ $barang->deskripsi }}</p>
            <p class="card-text"><strong>Harga:</strong> {{ $barang->harga }}</p>
            <p class="card-text"><strong>Jumlah Stok:</strong> {{ $barang->jumlah_stok }}</p>
            <p class="card-text"><strong>Tanggal Produksi:</strong> {{ $barang->tanggal_produksi }}</p>
            <p class="card-text"><strong>Tanggal Kadaluarsa:</strong> {{ $barang->tanggal_kadaluarsa }}</p>
            <p class="card-text"><strong>Nomor Rak:</strong> {{ $barang->rak->no_rak }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('barang.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection
