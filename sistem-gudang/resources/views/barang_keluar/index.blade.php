@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h1>Transaksi Barang Keluar List</h1>
    <a href="" class="btn btn-primary">Add Transaksi Barang Keluar</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Jumlah Keluar</th>
                <th>Tanggal Keluar</th>
                <th>Barang</th>
                <th>Admin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($transaksiBarangKeluar as $transaksi)
            <tr>
                <td>{{ $transaksi->id }}</td>
                <td>{{ $transaksi->jumlah_keluar }}</td>
                <td>{{ $transaksi->tanggal_keluar }}</td>
                <td>{{ $transaksi->barang->nama_barang }}</td>
                <td>{{ $transaksi->admin->nama }}</td>
                <td>
                    <a href="{{ route('transaksi_barang_keluar.show', $transaksi->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('transaksi_barang_keluar.edit', $transaksi->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('transaksi_barang_keluar.destroy', $transaksi->id) }}" method="POST" style="display:inline;">
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