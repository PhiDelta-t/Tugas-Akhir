<!-- resources/views/transaksi_barang_masuk/show.blade.php -->

@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Detail Transaksi Barang Masuk</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID: {{ $transaksiBarangMasuk->id_transaksi }}</h5>
            <p class="card-text">Jumlah Masuk: {{ $transaksiBarangMasuk->jumlah_masuk }}</p>
            <p class="card-text">Tanggal Masuk: {{ $transaksiBarangMasuk->tanggal_masuk }}</p>
            <p class="card-text">Supplier: {{ $transaksiBarangMasuk->supplier->nama_supplier }}</p>
            <p class="card-text">Admin: {{ $transaksiBarangMasuk->admin->nama }}</p>
            <a href="{{ route('transaksi_barang_masuk.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
