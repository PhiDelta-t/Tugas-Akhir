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
            <label >Tanggal Keluar</label>
            <input type="date" class="form-control" id="" name="tanggal_keluar" value="{{ $keluar->tanggal_keluar }}">
        </div>
        <div class="form-group">
            <label>Nama Barang</label>
                    <select name="barang_id" class="form-control" id="" >
                        <option value="{{ $keluar->barang_id }}">--pilih barang--</option>
                    @forelse ($barang as $item)
                        <option value="{{$item->rak_id}}">{{$item->nama_barang}}</option>
                    @empty
                        <option value="">Tidak Ada Data Barang</option>
                    @endforelse
                </select>
        </div>
        <div class="form-group">
            <label>Nama Admin</label>
                    <select name="admin_id" class="form-control" id="">
                        <option value="{{ $keluar->admin_id }}">--pilih admin--</option>
                    @forelse ($admin as $items)
                        <option value="{{$items->id}}">{{$items->nama}}</option>
                    @empty
                        <option value="">Tidak Ada Data Admin</option>
                    @endforelse
                </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
