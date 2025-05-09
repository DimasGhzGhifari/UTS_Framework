<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function index()
    {
        $donasis = Donasi::paginate(10); // 10 data per halaman
        return view('donasi.index', compact('donasis'));
    }
    public function create()
    {
        return view('donasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_donatur' => 'required',
            'email' => 'required|email',
            'nominal' => 'required|numeric|min:1000',
            'metode_pembayaran' => 'required',
            'tanggal_donasi' => 'required|date',
            'status' => 'required|in:menunggu konfirmasi,dikonfirmasi,batal',
        ]);

        Donasi::create($request->all());

        return redirect()->route('donasi.index')->with('success', 'Donasi berhasil ditambahkan');
    }

    public function edit(Donasi $donasi)
    {
        return view('donasi.edit', compact('donasi'));
    }

    public function update(Request $request, Donasi $donasi)
    {
        $request->validate([
            'nama_donatur' => 'required',
            'email' => 'required|email',
            'nominal' => 'required|numeric|min:1000',
            'metode_pembayaran' => 'required',
            'tanggal_donasi' => 'required|date',
            'status' => 'required|in:menunggu konfirmasi,dikonfirmasi,batal',
        ]);

        $donasi->update($request->all());

        return redirect()->route('donasi.index')->with('success', 'Donasi berhasil diperbarui');
    }

    public function destroy(Donasi $donasi)
    {
        $donasi->delete();
        return redirect()->route('donasi.index')->with('success', 'Donasi berhasil dihapus');
    }
}

