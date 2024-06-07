<!-- resources/views/transaksi_barang_masuk/create.blade.php -->

@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Add Transaksi Barang Masuk</h1>

    <form action="{{ route('transaksi_barang_masuk.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="jumlah_masuk">Jumlah Masuk:</label>
            <input type="number" name="jumlah_masuk" id="jumlah_masuk" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tanggal_masuk">Tanggal Masuk:</label>
            <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="supplier_id_supplier">Supplier:</label>
            <select name="supplier_id_supplier" id="supplier_id_supplier" class="form-control" required>
                @foreach($suppliers as $supplier)
                    <option value="{{ $supplier->id_supplier }}">{{ $supplier->nama_supplier }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="admin_id_admin">Admin:</label>
            <select name="admin_id_admin" id="admin_id_admin" class="form-control" required>
                @foreach($admins as $admin)
                    <option value="{{ $admin->id_admin }}">{{ $admin->nama }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Transaksi Barang Masuk</button>
    </form>
</div>
@endsection
