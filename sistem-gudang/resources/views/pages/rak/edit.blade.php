{{-- @extends('layouts.master')

@section('content')
    <h1>Edit Rak</h1>
    <form action="{{ route('rak.update', $rak->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>No Rak:</label>
            <input type="text" name="no_rak" value="{{ $rak->no_rak }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection --}}

@extends('layouts.master')

@section('content')   
<div>
         <h2>Edit Rak {{$rak->id}}</h2>
        <form action="/rak/{{$rak->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="no_rak">Nama</label>
                <input type="text" class="form-control" name="no_rak" value="{{$rak->no_rak}}" id="no_rak" placeholder="Masukkan No.Rak">
                @error('no_rak')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
