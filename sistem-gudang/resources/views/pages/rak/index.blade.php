@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <a href="/rak/create" class="btn btn-primary mb-3">Tambah</a>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No Rak</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($rak as $key => $items)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $items->no_rak }}</td>
                        <td>{{ $items->barang->nama_barang }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="/rak/{{ $items->id }}" class="btn btn-info btn-sm mr-1">Show</a>
                                <a href="/rak/{{ $items->id }}/edit" class="btn btn-primary btn-sm mr-1">Edit</a>
                                <form action="/rak/{{ $items->id }}" method="POST" class="">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No data rak</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
