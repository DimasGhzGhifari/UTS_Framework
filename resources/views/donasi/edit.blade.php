@extends('layouts.app')

@section('content')
    <h3>Edit Donasi</h3>

    <form action="{{ route('donasi.update', $donasi) }}" method="POST">
        @csrf @method('PUT')
        @include('donasi.form', ['donasi' => $donasi])
        <button class="btn btn-dark">Update</button>
    </form>
@endsection
