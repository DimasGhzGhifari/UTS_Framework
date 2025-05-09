@extends('layouts.app')

@section('content')
    <h3>Tambah Donasi</h3>

    <form action="{{ route('donasi.store') }}" method="POST">
        @csrf
        @include('donasi.form')
        <button class="btn btn-dark">Simpan</button>
    </form>
@endsection
