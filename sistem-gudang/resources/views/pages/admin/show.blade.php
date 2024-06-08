@extends('layouts.master')

@section('title', 'Detail Data Admin')

@section('content')
    <h1>Detail Data Admin</h1>
    <p><strong>Username:</strong> {{ $admin->username }}</p>
    <p><strong>Nama:</strong> {{ $admin->nama }}</p>
    <p><strong>Nomor Handphone:</strong> {{ $admin->no_hp }}</p>
    <p><strong>Alamat:</strong> {{ $admin->alamat }}</p>
    
    <a href="{{ route('adm.index') }}">Back to list</a>
@endsection
