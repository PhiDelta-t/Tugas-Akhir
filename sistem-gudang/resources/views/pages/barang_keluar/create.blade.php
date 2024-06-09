@extends('layouts.master')

@section('title')
    Add Transaksi Barang Keluar
@endsection

@section('content') 
<form action="{{ route('barangkeluar.store') }}" method="POST">
    @csrf
        <div class="form-group">
            <label>Jumlah Keluar</label>
            <input type="number" name="jumlah_keluar" class="form-control">
        </div>
        <div class="form-group">
            <label>Tanggal keluar</label>
            <input type="date" name="tanggal_keluar" class="form-control">
        </div>
        <div class="form-group">
            <label>Nama Barang</label>
            <select name="barang_id" class="form-control">
                <option value="">--pilih barang--</option>
                @forelse ($barang as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_barang }}</option>
                @empty
                    <option value="">Tidak Ada Data Barang</option>
                @endforelse
            </select>
        </div>
        <div class="form-group">
            <label>Nama Admin</label>
            <select name="admin_id" class="form-control">
                <option value="">--pilih admin--</option>
                @forelse ($admin as $items)
                    <option value="{{ $items->id }}">{{ $items->nama }}</option>
                @empty
                    <option value="">Tidak Ada Data Admin</option>
                @endforelse
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
