@extends('layouts.master')

@section('title')
    Edit Data Admin
@endsection

@section('content')
    <form action="/barangkeluar/{{ $keluar->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Jumlah Keluar</label>
            <input type="number" class="form-control" id="" name="jumlah_keluar" value="{{ $keluar->jumlah_keluar }}">
        </div>
        <div class="form-group">
            <label>Tanggal Keluar</label>
            <input type="date" class="form-control" id="" name="tanggal_keluar"
                value="{{ $keluar->tanggal_keluar }}">
        </div>
        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" class="form-control" value="{{ $keluar->barang->nama_barang }}" readonly>
            <input type="hidden" name="barang_id" value="{{ $keluar->barang_id }}">
        </div>
        <div class="form-group">
            <label>Nama Admin</label>
            <input type="text" class="form-control" value="{{ $keluar->admin->nama }}" readonly>
            <input type="hidden" name="admin_id" value="{{ $keluar->admin_id }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
