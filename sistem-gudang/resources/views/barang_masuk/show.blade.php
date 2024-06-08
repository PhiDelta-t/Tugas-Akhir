<!-- resources/views/transaksi_barang_masuk/show.blade.php -->

@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Detail Transaksi Barang Masuk</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID: {{ $masuk->id_transaksi }}</h5>
            <p class="card-text">Jumlah Masuk: {{ $masuk->jumlah_masuk }}</p>
            <p class="card-text">Tanggal Masuk: {{ $masuk->tanggal_masuk }}</p>
            <p class="card-text">Barang: {{$masuk->barang_id }}</p>
            <p class="card-text">Supplier: {{ $masuk->supplier_id }}</p>
            <p class="card-text">Admin: {{ $masuk->admin_id }}</p>
            <a href="{{ route('barangmasuk.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
