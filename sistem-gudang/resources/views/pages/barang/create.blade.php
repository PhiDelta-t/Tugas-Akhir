@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Tambah Barang Baru</h1>
        <form action="{{ route('barang.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" required>
            </div>
            <div class="form-group">
                <label for="jumlah_stok">Jumlah Stok</label>
                <input type="number" class="form-control" id="jumlah_stok" name="jumlah_stok" required>
            </div>
            <div class="form-group">
                <label for="tanggal_produksi">Tanggal Produksi</label>
                <input type="date" class="form-control" id="tanggal_produksi" name="tanggal_produksi" required>
            </div>
            <div class="form-group">
                <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa</label>
                <input type="date" class="form-control" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" required>
            </div>
            <div class="form-group">
                <label for="rak_id">Nomor Rak</label>
                <select class="form-control" id="rak_id" name="rak_id" required>
                    @foreach($raks as $rak)
                        <option value="{{ $rak->id }}">{{ $rak->no_rak }}</option>
                    @endforeach
                </select>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
