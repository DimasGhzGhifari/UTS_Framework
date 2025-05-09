<div class="mb-3">
    <label>Nama Donatur</label>
    <input type="text" name="nama_donatur" class="form-control" value="{{ old('nama_donatur', $donasi->nama_donatur ?? '') }}">
</div>

<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $donasi->email ?? '') }}">
</div>

<div class="mb-3">
    <label>Nominal</label>
    <input type="number" name="nominal" class="form-control" value="{{ old('nominal', $donasi->nominal ?? '') }}">
</div>

<div class="mb-3">
    <label>Metode Pembayaran</label>
    <input type="text" name="metode_pembayaran" class="form-control" value="{{ old('metode_pembayaran', $donasi->metode_pembayaran ?? '') }}">
</div>

<div class="mb-3">
    <label>Tanggal Donasi</label>
    <input type="date" name="tanggal_donasi" class="form-control" value="{{ old('tanggal_donasi', $donasi->tanggal_donasi ?? '') }}">
</div>

<div class="mb-3">
    <label>Status</label>
    <select name="status" class="form-control">
        @foreach (['menunggu konfirmasi', 'dikonfirmasi', 'batal'] as $status)
            <option value="{{ $status }}" @selected(old('status', $donasi->status ?? '') == $status)>
                {{ ucfirst($status) }}
            </option>
        @endforeach
    </select>
</div>
