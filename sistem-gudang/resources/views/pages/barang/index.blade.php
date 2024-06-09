@extends('layouts.master')

@section('content')
    <h1>Daftar Barang</h1>
    <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah Barang</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Jumlah Stok</th>
                <th>Tanggal Produksi</th>
                <th>Tanggal Kadaluarsa</th>
                <th>Nomor Rak</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $barang)
                <tr>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->deskripsi }}</td>
                    <td>{{ $barang->harga }}</td>
                    <td>{{ $barang->jumlah_stok }}</td>
                    <td>{{ $barang->tanggal_produksi }}</td>
                    <td>{{ $barang->tanggal_kadaluarsa }}</td>
                    <td>{{ $barang->rak ? $barang->rak->no_rak : 'N/A' }}</td>
                    <td>
                        <a href="{{ route('barang.show', $barang->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
