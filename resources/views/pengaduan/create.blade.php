<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Pengaduan</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-B8f6f2vA0ZzcvGLpMnq98zO23NBF7U9Ck2J+BB3OQcrWikDbdAG3WjO4CX84yGB3qABeWwF0LKJpKkI0a43pbg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #map { height: 300px; }
        .form-container { background-color: #f8f9fa; padding: 20px; border-radius: 8px; }
        .card-header { background-color: #28a745; }
       .hero {
    background-image: url('../images/sampah.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 100px 0;
    color: white;
    text-align: center;
}

.hero h2 {
    font-size: 48px;
    margin-bottom: 20px;
    font-weight: 700;
}

.hero p {
    font-size: 18px;
    max-width: 700px;
    margin: 0 auto 30px;
}

.cta-buttons {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 40px;
}

.btn {
    padding: 12px 30px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s;
    cursor: pointer;
    border: none;
    font-size: 16px;
}

.btn-primary {
    background-color: var(--primary);
    color: white;
}

.btn-primary:hover {
    background-color: var(--primary-dark);
    transform: translateY(-2px);
}

.btn-secondary {
    background-color: var(--secondary);
    color: white;
}

.btn-secondary:hover {
    background-color: #0078D7;
    transform: translateY(-2px);
}

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
        <div class="card-header bg-success text-white">
            <h4>Form Layanan Pengaduan</h4>
        </div>
        <div class="card-body form-container">
          <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">

             @csrf
                <div class="mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="no">No Telepon</label>
                    <input type="text" name="no_telp" id="no" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="no">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto" class="form-control" accept="image/*" required>
                </div>
                <div class="mb-3">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan" id="keterangan" class="form-control" required>
                </div>

              <div class="mb-3">
                <label>Pilih Titik Koordinat</label>
                <div id="map"></div>
                <small id="koordinat-terpilih" class="text-muted"></small>
                <input type="hidden" name="titik_koordinat" id="titik_koordinat">
                <input type="hidden" name="latitude" id="latitude">
                <input type="hidden" name="longitude" id="longitude">
            </div>


                <button type="submit" class="btn btn-success">Kirim Pengaduan</button>
            </form>
        </div>
    </div>
</div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    var map = L.map('map').setView([-0.9472, 100.3544], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap',
        maxZoom: 18,
    }).addTo(map);

    var marker;
    map.on('click', function (e) {
        if (marker) {
            map.removeLayer(marker);
        }
        marker = L.marker(e.latlng).addTo(map);

        const lat = e.latlng.lat.toFixed(6);
        const lng = e.latlng.lng.toFixed(6);
        document.getElementById('latitude').value = lat;
        document.getElementById('longitude').value = lng;
        document.getElementById('titik_koordinat').value = `${lat}, ${lng}`;

        // Ambil nama lokasi dari Nominatim (reverse geocoding)
        fetch(`https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lng}&format=json`)
            .then(response => response.json())
            .then(data => {
                const displayName = data.display_name || "Lokasi tidak ditemukan";
                document.getElementById('koordinat-terpilih').innerText = `Lokasi dipilih: ${displayName}`;
            })
            .catch(error => {
                console.error('Gagal mengambil nama lokasi:', error);
                document.getElementById('koordinat-terpilih').innerText = `Koordinat: ${lat}, ${lng}`;
            });
    });
</script>


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
    <script>
    fetch('/api/pengaduan-maps')
        .then(response => response.json())
        .then(data => {
            data.forEach(item => {
                L.marker([item.latitude, item.longitude])
                    .addTo(map)
                    .bindPopup(`<strong>${item.nama}</strong><br>${item.keterangan}<br><img src="/storage/${item.foto}" width="100">`);
            });
        })
        .catch(error => console.error('Error loading data:', error));
</script>

</body>
</html>
