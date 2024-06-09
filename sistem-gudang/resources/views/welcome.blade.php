@extends('layouts.master')

@section('title')
    Beranda
@endsection

@section('content')
    <ul>
        @if (session()->has('username'))
            <h5>Welcome, {{ session('username') }}</h5>
        @else
        <br>
            <a href="/login">Please Login</a>
        @endif<br>
        <h2> Selamat Datang di Sistem Gudang Kelompok 2</h2><br><br>
        <h3> Sistem Informasi Gudang</h3>
        <p>Sistem Informasi Gudang adalah aplikasi berbasis web yang dirancang untuk mengelola proses penyimpanan dan
            pengelolaan inventaris di sebuah gudang. Aplikasi ini menyediakan antarmuka pengguna yang intuitif untuk
            melakukan berbagai tugas terkait manajemen gudang.</p>
    </ul>
    <br><br>
@endsection
