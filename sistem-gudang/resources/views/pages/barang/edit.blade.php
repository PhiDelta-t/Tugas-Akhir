@extends('layouts.master')

@section('content')
    <h1>Edit Barang</h1>
    <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $barang->nama_barang }}">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ $barang->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ $barang->harga }}">
        </div>
        <div class="form-group">
            <label for="jumlah_stok">Jumlah Stok</label>
            <input type="number" class="form-control" id="jumlah_stok" name="jumlah_stok" value="{{ $barang->jumlah_stok }}">
        </div>
        <div class="form-group">
            <label for="tanggal_produksi">Tanggal Produksi</label>
            <input type="date" class="form-control" id="tanggal_produksi" name="tanggal_produksi" value="{{ $barang->tanggal_produksi }}">
        </div>
        <div class="form-group">
            <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa</label>
            <input type="date" class="form-control" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" value="{{ $barang->tanggal_kadaluarsa }}">
        </div>
        <div class="form-group">
            <label for="rak_id">Nomor Rak</label>
            <select class="form-control" id="rak_id" name="rak_id" required>
                @foreach($raks as $rak)
                    <option value="{{ $rak->id }}" @if($rak->id == $barang->rak_id) selected @endif>{{ $rak->no_rak }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
