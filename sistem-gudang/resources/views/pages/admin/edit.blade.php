@extends('layouts.master')

@section('title', 'Edit Data Admin')

@section('content')
    <h1>Edit Data Admin</h1>
    <form action="/adm/{{ $admin->id }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Formulir untuk mengedit data admin -->
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ $admin->username }}" readonly>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password"">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $admin->nama }}">
        </div>
        <div class="form-group">
            <label for="no_hp">Nomor Handphone</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $admin->no_hp }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $admin->alamat }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
