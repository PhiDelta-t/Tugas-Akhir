@extends('layouts.master')

@section('content')
    <h1>Barang List</h1>
    <a href="{{ route('barang.create') }}">Create New Barang</a>

    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Jumlah Stok</th>
                <th>Tanggal Produksi</th>
                <th>Tanggal Kadaluarsa</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->jumlah_stok }}</td>
                    <td>{{ $item->tanggal_produksi }}</td>
                    <td>{{ $item->tanggal_kadaluarsa }}</td>
                    <td>
                        <a href="{{ route('barang.show', $item->id) }}">Show</a>
                        <a href="{{ route('barang.edit', $item->id) }}">Edit</a>
                        <form action="{{ route('barang.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

