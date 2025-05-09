<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Donasi Sosial</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            background: #f8f9fa;
            color: #333;
        }
        header {
            background: #000000;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .hero {
            text-align: center;
            padding: 60px 20px;
            background: #e9ecef;
        }
        .hero h1 {
            font-size: 40px;
            margin-bottom: 10px;
        }
        .hero p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .cta {
            background: #000000;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .features {
            display: flex;
            justify-content: space-around;
            padding: 40px 20px;
            flex-wrap: wrap;
        }
        .feature-box {
            background: white;
            width: 250px;
            margin: 10px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        footer {
            background: #343a40;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<header>
    <h1>Aplikasi Manajemen Donasi Sosial</h1>
</header>

<div class="hero">
    <h1>Kelola Donasi Dengan Mudah</h1>
    <p>Mencatat, melacak, dan mengelola donasi sosial secara efisien dan transparan.</p>
    <a href="{{ route('donasi.index') }}" class="cta">Lihat Donasi</a>
</div>

{{-- <div class="features">
    <div class="feature-box">
        <h3>CRUD Donasi</h3>
        <p>Tambah, ubah, dan hapus data donasi dengan cepat.</p>
    </div>
    <div class="feature-box">
        <h3>Riwayat Transparan</h3>
        <p>Melihat daftar donasi masuk berdasarkan tanggal & status.</p>
    </div>
    <div class="feature-box">
        <h3>Validasi Otomatis</h3>
        <p>Setiap form memiliki pengecekan input yang akurat.</p>
    </div>
</div> --}}

<footer>
    &copy; Copyright Aplikasi Manajemen Donasi Sosial {{ date('Y') }}. by Dimas Ghazial Ghifari 
</footer>

</body>
</html>
