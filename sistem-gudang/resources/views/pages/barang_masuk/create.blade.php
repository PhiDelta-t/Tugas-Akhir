@extends('layouts.master')

@section('title')
    Add Transaksi Barang Masuk
@endsection

@section('content')
    <form action="{{ route('barangmasuk.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Jumlah Masuk</label>
            <input type="number" name="jumlah_masuk" id="jumlah_masuk" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nama Barang</label>
            <select name="barang_id" class="form-control" id="">
                <option value="">--pilih barang--</option>
                @forelse ($barang as $barangs)
                    <option value="{{ $barangs->id }}">{{ $barangs->nama_barang }}</option>
                @empty
                    <option value="">Tidak Ada Data Barang</option>
                @endforelse
            </select>
        </div>
        <div class="form-group">
            <label>Nama Supplier</label>
            <select name="supplier_id" class="form-control" id="">
                <option value="">--nama supplier--</option>
                @forelse ($supplier as $suppliers)
                    <option value="{{ $suppliers->id }}">{{ $suppliers->nama_supplier }}</option>
                @empty
                    <option value="">Tidak Ada Data Supplier</option>
                @endforelse
            </select>
        </div>
        <div class="form-group">
            <label>Nama Admin</label>
            <select name="admin_id" class="form-control" id="">
                <option value="">--pilih admin--</option>
                @forelse ($admin as $admins)
                    <option value="{{ $admins->id }}">{{ $admins->nama }}</option>
                @empty
                    <option value="">Tidak Ada Data Admin</option>
                @endforelse
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    @endsection
