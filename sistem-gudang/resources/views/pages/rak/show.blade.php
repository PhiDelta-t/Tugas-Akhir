@extends('layouts.master')

@section('content')
    <h1>Detail Rak</h1>
    <p>ID: {{ $rak->id }}</p>
    <p>No Rak: {{ $rak->no_rak }}</p>
    <a href="{{ route('rak.index') }}">Back to list</a>
@endsection
