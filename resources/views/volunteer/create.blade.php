<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Volunteer</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-B8f6f2vA0ZzcvGLpMnq98zO23NBF7U9Ck2J+BB3OQcrWikDbdAG3WjO4CX84yGB3qABeWwF0LKJpKkI0a43pbg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #map { height: 300px; }
        .form-container { background-color: #f8f9fa; padding: 20px; border-radius: 8px; }
        .card-header { background-color: #28a745; }
        .hero {
            background-image: url('/images/sampah.jpg');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            text-align: center;
            color: white;
            position: relative;
        }
        .hero::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        }
        .hero .container {
            position: relative;
            z-index: 1;
        }
        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        .header-container { display: flex; align-items: center; padding: 20px 0; }
        .logo { display: flex; align-items: center; }
        .logo img { height: 50px; margin-right: 15px; }
        .stats-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 30px 0;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .stat-item { text-align: center; margin: 10px; padding: 15px; }
        .stat-item h3 { color: #28a745; font-size: 2rem; margin-bottom: 5px; }
        .divider { border-top: 1px solid #dee2e6; margin: 20px 0; }

        footer {
            background-color: #2c3e50;
            color: white;
            padding: 50px 0 20px;
            margin-top: 50px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }

        .footer-about { padding-right: 20px; }
        .footer-logo { display: flex; align-items: center; margin-bottom: 20px; }
        .footer-logo img { height: 40px; margin-right: 15px; }
        .footer-logo h2 { color: white; font-size: 1.5rem; margin: 0; }
        .footer-about p { margin-bottom: 20px; line-height: 1.6; }

        .social-links { display: flex; gap: 15px; }
        .social-links a {
            display: inline-block;
            width: 36px;
            height: 36px;
            background-color: #34495e;
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 36px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background-color: #28a745;
            transform: translateY(-3px);
        }

        .footer-heading {
            color: #28a745;
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-heading::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: #28a745;
        }

        .footer-links { list-style: none; padding: 0; margin: 0; }
        .footer-links li { margin-bottom: 10px; }
        .footer-links a { color: #ecf0f1; text-decoration: none; transition: color 0.3s ease; }
        .footer-links a:hover { color: #28a745; }
        .footer-links li:not(a) { color: #bdc3c7; }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #34495e;
            color: #bdc3c7;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<header>
        <div class="container header-container">
            <div class="logo">
                   <img src="/images/LOGO.png" alt="TRASH2MOVE Logo">
                <h1>TRASH2MOVE</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#company">Tentang Kami</a></li>
                    <li><a href="#products">Produk</a></li>
                    <li><a href="#news">Berita</a></li>
                    <li><a href="#testimonials">Ulasan</a></li>
                    <li><a href="#contact">Kontak</a></li>
                    <li><a href="#login">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

<section id="home" class="hero">
    <div class="container">
        <h2 class="display-4 fw-bold">Ubah Sampah Menjadi Solusi</h2>
        <p class="lead fs-5">Misi kami adalah mendaur ulang limbah menjadi produk berkualitas tinggi yang tidak hanya ramah lingkungan tetapi juga fungsional dan estetis.</p>
        <div class="cta-buttons">
        <a href="/" class="btn btn-success btn-lg px-4">Kembali ke Beranda</a>

            <button class="btn btn-outline-light btn-lg px-4">Jadi Volunteer</button>
        </div>
    </div>
</section>

<div class="divider"></div>


<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-info text-white">
            <h4>Form Volunteer</h4>
        </div>
        <div class="card-body form-container">
      <form action="{{ route('volunteer.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Nama -->
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>

    <!-- No Telepon -->
    <div class="mb-3">
        <label for="no_telp" class="form-label">No Telepon</label>
        <input type="text" class="form-control" id="no_telp" name="no_telp">
    </div>

    <!-- Riwayat Penyakit -->
    <div class="mb-3">
        <label class="form-label">Apakah Kamu Punya Riwayat Penyakit</label><br>

        <input type="radio" class="btn-check" name="status_kesehatan" id="ya" value="ya" autocomplete="off" checked>
        <label class="btn btn-outline-success" for="ya">Ya</label>

        <input type="radio" class="btn-check" name="status_kesehatan" id="tidak" value="tidak" autocomplete="off">
        <label class="btn btn-outline-danger" for="tidak">Tidak</label>
    </div>

    <!-- Penjelasan Penyakit -->
    <div class="mb-3">
        <label for="penjelasan_penyakit" class="form-label">Jika Iya, Jelaskan</label>
        <div class="form-floating">
            <textarea class="form-control" name="penjelasan_penyakit" placeholder="Jelaskan riwayat penyakit" id="penjelasan_penyakit"></textarea>
            <label for="penjelasan_penyakit">Penjelasan Riwayat Penyakit</label>
        </div>
    </div>

    <!-- Alamat -->
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <div class="form-floating">
            <textarea class="form-control" name="alamat" placeholder="Tulis alamat lengkap" id="alamat"></textarea>
            <label for="alamat">Alamat Lengkap</label>
        </div>
    </div>

    <!-- Tombol Submit & Reset -->
    <button type="submit" class="btn btn-success">Kirim Data Volunteer</button>
    <button type="reset" class="btn btn-warning">Reset</button>
</form>

        </div>
    </div>
</div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>


<footer>
    <div class="container">
        <div class="footer-grid">
            <div class="footer-about">
                <div class="footer-logo">
                    <img src="/images/LOGO.png" alt="Trash2Move Logo">
                    <h2>Trash2Move</h2>
                </div>
                <p>Trash2Move adalah perusahaan daur ulang inovatif yang mendedikasikan diri untuk mengubah limbah menjadi produk bernilai tinggi sambil membangun komunitas yang sadar lingkungan.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-links-section">
                <h3 class="footer-heading">Produk</h3>
                <ul class="footer-links">
                    <li><a href="#">Furniture</a></li>
                    <li><a href="#">Aksesori</a></li>
                    <li><a href="#">Kemasan</a></li>
                    <li><a href="#">Dekorasi</a></li>
                </ul>
            </div>

            <div class="footer-links-section">
                <h3 class="footer-heading">Perusahaan</h3>
                <ul class="footer-links">
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Tim</a></li>
                    <li><a href="#">Karir</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>

            <div class="footer-links-section">
                <h3 class="footer-heading">Kontak</h3>
                <ul class="footer-links">
                    <li>Jl. Hijau Lestari No.123</li>
                    <li>Jakarta Selatan, Indonesia</li>
                    <li>+62 21 1234 5678</li>
                    <li>info@trash2move.id</li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            &copy; 2025 Trash2Move. Hak Cipta Dilindungi.
        </div>
    </div>
</footer>

</body>
</html>
