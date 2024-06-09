@extends('layouts.master')

@section('title')
    Edit Transaksi Barang Masuk
@endsection

@section('content')
    <div class="container">

        <form action="/barangmasuk/{{ $masuk->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="jumlah_masuk">Jumlah Masuk</label>
                <input type="number" name="jumlah_masuk" id="jumlah_masuk" class="form-control"
                    value="{{ $masuk->jumlah_masuk }}" required>
            </div>
            <div class="form-group">
                <label for="tanggal_masuk">Tanggal Masuk</label>
                <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control"
                    value="{{ $masuk->tanggal_masuk }}" required>
            </div>
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" class="form-control" value="{{ $masuk->barang->nama_barang }}" readonly>
                <input type="hidden" name="barang_id" value="{{ $masuk->barang_id }}">
            </div>
            <div class="form-group">
                <label>Nama Supplier</label>
                <input type="text" class="form-control" value="{{ $masuk->supplier->nama_supplier }}" readonly>
                <input type="hidden" name="supplier_id" value="{{ $masuk->supplier_id }}">
            </div>
            <div class="form-group">
                <label>Nama Admin</label>
                <input type="text" class="form-control" value="{{ $masuk->admin->nama }}" readonly>
                <input type="hidden" name="admin_id" value="{{ $masuk->admin_id }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
