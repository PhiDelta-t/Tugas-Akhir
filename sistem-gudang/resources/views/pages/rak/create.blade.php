@extends('layouts.master')

@section('content')
    <h2>Tambah Data</h2>
        <form action="/rak" method="POST">
            @csrf
            <div class="form-group">
                <label for="no_rak">No Rak</label>
                <input type="text" class="form-control" name="no_rak" id="no_rak" placeholder="Masukkan No Rak">
                @error('no_rak')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
@endsection