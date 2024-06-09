@extends('layouts.master')

@section('title')
    Laporan Stok Barang
@endsection

@section('content')
<div class="container">
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Jumlah Masuk</th>
                <th>Jumlah Keluar</th>
                <th>Stok Akhir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangs as $barang)
            @php
                $totalMasuk = $barangMasuk->where('barang_id', $barang->id)->sum('jumlah_masuk');
                $totalKeluar = $barangKeluar->where('barang_id', $barang->id)->sum('jumlah_keluar');
                $stokAkhir = $barang->jumlah_stok + $totalMasuk - $totalKeluar;
                
            @endphp
            <tr>
                <td>{{ $barang->id }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->jumlah_stok }}</td>
                <td>{{ $totalMasuk }}</td>
                <td>{{ $totalKeluar }}</td>
                <td>{{ $stokAkhir }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
