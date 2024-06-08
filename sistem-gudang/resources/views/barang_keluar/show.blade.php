@extends('layouts.master')

@section('title')
    Detail Transaksi Barang Keluar
@endsection

@section('content')
<table class="table table-bordered mt-3">
  <div class="card">
    <div class="card-body">
        <h5 class="card-title">ID: {{ $keluar->id }}</h5>
        <p class="card-text"><strong>Jumlah Keluar:  </strong>{{ $keluar->jumlah_keluar }}</p>
        <p class="card-text"><strong>Tanggal Keluar:  </strong>{{ $keluar->tanggal_keluar }}</p>
        <p class="card-text"><strong>Id Barang: </strong>{{ $keluar->barang_id }}</p>
        <p class="card-text"><strong>Id Admin:  </strong>{{ $keluar->admin_id }}</p>
    </div>
    <div class="card-footer">
        <a href="{{ route('barangkeluar.index') }}" class="btn btn-primary">Kembali</a>
    </div>
</div>
@endsection
