<!-- resources/views/transaksi_barang_masuk/index.blade.php -->

@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Transaksi Barang Masuk List</h1>
    <a href="/barangmasuk/create" class="btn btn-primary">Add Transaksi Barang Masuk</a>

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
                <th>Barang</th>
                <th>Supplier</th>
                <th>Admin</th>
                <th>Actions</th>
            </tr>
        </thead><tbody>
            @forelse ($barang_masuk as $key=>$masuk)
                <tr>
                    <td>{{ $masuk->id }}</td>
                    <td>{{ $masuk->jumlah_masuk }}</td>
                    <td>{{ $masuk->tanggal_masuk }}</td>
                    <td>{{ $masuk->barang_id }}</td>
                    <td>{{ $masuk->supplier_id }}</td>
                    <td>{{ $masuk->admin_id }}</td>
                    <td>
                        <form action="/barangmasuk/{{ $masuk->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/barangmasuk/{{ $masuk->id }}" class="btn btn-info">View</a>
                            <a href="/barangmasuk/{{ $masuk->id }}/edit" class="btn btn-warning">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>   
                @empty
            <tr>
                <th>Tidak Ada Barang Masuk</th>
            </tr>
            @endforelse
            
        </tbody>
</div>
@endsection
