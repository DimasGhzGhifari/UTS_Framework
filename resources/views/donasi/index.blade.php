@extends('layouts.app')

@section('content')
    <h3>Data Donasi</h3>

    <a href="{{ route('donasi.create') }}" class="btn btn-dark mb-2">Tambah Donasi</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Donatur</th>
                <th>Email</th>
                <th>Nominal</th>
                <th>Metode</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($donasis as $donasi)
            <tr>
                <td>{{ $donasi->nama_donatur }}</td>
                <td>{{ $donasi->email }}</td>
                <td>Rp {{ number_format($donasi->nominal, 0, ',', '.') }}</td>
                <td>{{ $donasi->metode_pembayaran }}</td>
                <td>{{ $donasi->tanggal_donasi }}</td>
                <td>{{ ucfirst($donasi->status) }}</td>
                <td>
                    <a href="{{ route('donasi.edit', $donasi) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('donasi.destroy', $donasi) }}" method="POST" style="display:inline-block;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus donasi ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $donasis->links() }}
@endsection
