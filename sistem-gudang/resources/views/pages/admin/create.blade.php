@extends('layouts.master')

@section('title')
    Tambah Admin
@endsection

@section('content')
    <form action="{{ route('adm.store') }}" method="post">
        {{-- validation --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- form input --}}
        @csrf
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label>Nomor Handphone</label>
            <input type="number" class="form-control" name="no_hp">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" id="" cols="10" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
