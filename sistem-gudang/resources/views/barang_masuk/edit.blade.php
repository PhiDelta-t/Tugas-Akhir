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
            <input type="number" name="jumlah_masuk" id="jumlah_masuk" class="form-control" value="{{ $masuk->jumlah_masuk }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal_masuk">Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" value="{{ $masuk->tanggal_masuk }}" required>
        </div>
        <div class="form-group">
            <label>Nama Barang</label>
                    <select name="barang_id" class="form-control" id="" >
                        <option value="{{ $masuk->barang_id }}">--pilih barang--</option>
                    @forelse ($barang as $item)
                        <option value="{{$item->rak_id}}">{{$item->nama_barang}}</option>
                    @empty
                        <option value="">Tidak Ada Data Barang</option>
                    @endforelse
                </select>
        </div>
        <div class="form-group">
            <label>Nama Supplier</label>
                    <select name="supplier_id" class="form-control" id="">
                        <option value="{{ $masuk->supplier_id }}">--pilih supplier--</option>
                    @forelse ($supplier as $suppliers)
                        <option value="{{$suppliers->id}}">{{$suppliers->nama_supplier}}</option>
                    @empty
                        <option value="">Tidak Ada Data Supplier</option>
                    @endforelse
                </select>
        </div>
        <div class="form-group">
            <label>Nama Admin</label>
                    <select name="admin_id" class="form-control" id="">
                        <option value="{{ $masuk->admin_id }}">--pilih admin--</option>
                    @forelse ($admin as $items)
                        <option value="{{$items->id}}">{{$items->nama}}</option>
                    @empty
                        <option value="">Tidak Ada Data Admin</option>
                    @endforelse
                </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
