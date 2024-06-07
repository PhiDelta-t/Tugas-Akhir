@extends('layouts.master')

@section('title')
    Detail Supplier
@endsection

@section('content')
    <p>Nama : {{$supplier->nama_Supplier}}</p>
    <p>Alamat : {{$supplier->alamat}}</p>
    <p>Kontak : {{$supplier->kontak}}</p>
    <p>Email : {{$supplier->email}}</p>


    <a href="/supplier" class="btn btn-sm btn-secondary">Kembali</a>
@endsection