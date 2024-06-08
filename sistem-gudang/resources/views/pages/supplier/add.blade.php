@extends('layouts.master')

@section('title')
    Supplier
@endsection

@section('content')
    <form action="/supplier" method="post">
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
            <label>Nama Supplier</label>
            <input type="text" class="form-control" name="nama_supplier">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" id="" cols="10" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>kontak</label>
            <input type="text" class="form-control" name="kontak">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
