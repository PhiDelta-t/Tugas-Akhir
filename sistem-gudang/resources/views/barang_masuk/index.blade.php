<!-- resources/views/transaksi_barang_masuk/index.blade.php -->

@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Transaksi Barang Masuk List</h1>
    <a href="" class="btn btn-primary">Add Transaksi Barang Masuk</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Jumlah Masuk</th>
                <th>Tanggal Masuk</th>
                <th>Supplier</th>
                <th>Admin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($transaksiBarangMasuk as $transaksi)
            <tr>
                <td>{{ $transaksi->id_transaksi }}</td>
                <td>{{ $transaksi->jumlah_masuk }}</td>
                <td>{{ $transaksi->tanggal_masuk }}</td>
                <td>{{ $transaksi->supplier->nama_supplier }}</td>
                <td>{{ $transaksi->admin->nama }}</td>
                <td>
                    <a href="{{ route('transaksi_barang_masuk.show', $transaksi->id_transaksi) }}" class="btn btn-info">View</a>
                    <a href="{{ route('transaksi_barang_masuk.edit', $transaksi->id_transaksi) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('transaksi_barang_masuk.destroy', $transaksi->id_transaksi) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach --}}
        </tbody>
    </table>
</div>
@endsection
