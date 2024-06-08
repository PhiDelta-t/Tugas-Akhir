@extends('layouts.master')
@section('title')
    Data Supplier
@endsection
@section('content')
    <a href="/supplier/create" class="btn btn-sm btn-primary">Supplier</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Supplier</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kontak</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($supplier as $key=>$item)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $item->nama_supplier }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->kontak }}</td>
                    <td>

                        <form action="/supplier/ {{ $item->id }}" method="Post">
                            @csrf
                            @method('delete')
                            <a href="/supplier/{{ $item->id }}" class="btn btn-sm btn-info">Detail</a>
                            <a href="/supplier/{{ $item->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                            <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                        </form>
                </tr>
            @empty
                <tr>
                    <th>Tidak ada data supplier</th>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
