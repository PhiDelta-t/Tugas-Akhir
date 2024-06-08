@extends('layouts.master')

@section('title')
    Data Admin
@endsection

@section('content')
    <a href="/adm/create" class="btn btn-sm btn-primary">Tambah</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Nama</th>
                <th scope="col">Nomor Handphone</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($admin as $key=>$item)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->no_hp }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>
                        <form action="/adm/{{ $item->id }}" method="Post">
                            @csrf
                            @method('delete')
                            <a href="/adm/{{ $item->id }}" class="btn btn-sm btn-info">Detail</a>
                            <a href="/adm/{{ $item->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
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
