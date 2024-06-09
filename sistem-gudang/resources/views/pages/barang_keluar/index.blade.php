@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h1>Transaksi Barang Keluar List</h1>
    <a href="/barangkeluar/create" class="btn btn-primary">Add Transaksi Barang Keluar</a>

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
        </thead><tbody>
            @forelse ($barang_keluar as $key=>$keluar)
                <tr>
                    <td>{{ $keluar->id }}</td>
                    <td>{{ $keluar->jumlah_keluar }}</td>
                    <td>{{ $keluar->tanggal_keluar }}</td>
                    <td>{{ $keluar->barang_id }}</td>
                    <td>{{ $keluar->admin_id }}</td>
                    <td>
                        <form action="/barangkeluar/{{ $keluar->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/barangkeluar/{{ $keluar->id }}" class="btn btn-info">View</a>
                            <a href="/barangkeluar/{{ $keluar->id }}/edit" class="btn btn-warning">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>   
                @empty
            <tr>
                <th>Tidak Ada Barang Keluar</th>
            </tr>
            @endforelse
            
        </tbody>
       
    </table>
</div>
@endsection