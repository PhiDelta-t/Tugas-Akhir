@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <h1>Transaksi Barang Keluar List</h1>
        <a href="{{ route('barangkeluar.create') }}" class="btn btn-primary">Add Transaksi Barang Keluar</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Barang</th>
                    <th>Jumlah Keluar</th>
                    <th>Tanggal Keluar</th>
                    <th>Admin</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($barang_keluar as $key=>$item)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $item->barang->nama_barang }}</td>
                        <td>{{ $item->jumlah_keluar }}</td>
                        <td>{{ $item->tanggal_keluar }}</td>
                        <td>{{ $item->admin->username }}</td>
                        <td>
                            <form action="{{ route('barangkeluar.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('barangkeluar.show', $item->id) }}" class="btn btn-info">Detail</a>
                                <a href="{{ route('barangkeluar.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
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
