<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengaduan</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        #map { height: 300px; }

        /* Custom styles for hero section */
        .hero {
            background-image: url('../images/sampah.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Animation for file upload preview */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        #previewFoto {
            animation: fadeIn 0.5s ease-in;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">

<!-- Header -->
<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <div class="logo flex items-center">
            <img src="/images/LOGO.png" alt="TRASH2MOVE Logo" class="h-10 w-10 mr-3">
            <h1 class="text-xl font-bold text-green-700">TRASH2MOVE</h1>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="md:hidden text-gray-700 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <!-- Desktop Navigation -->
        <nav class="hidden md:block">
            <ul class="flex space-x-6">
                <li><a href="#home" class="hover:text-green-600 transition">Beranda</a></li>
                <li><a href="#company" class="hover:text-green-600 transition">Tentang Kami</a></li>
                <li><a href="#products" class="hover:text-green-600 transition">Produk</a></li>
                <li><a href="#news" class="hover:text-green-600 transition">Berita</a></li>
                <li><a href="#testimonials" class="hover:text-green-600 transition">Ulasan</a></li>
                <li><a href="#contact" class="hover:text-green-600 transition">Kontak</a></li>
                <li><a href="#login" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Login</a></li>
            </ul>
        </nav>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white">
        <ul class="px-4 py-2 space-y-2">
            <li><a href="#home" class="block py-2 hover:text-green-600">Beranda</a></li>
            <li><a href="#company" class="block py-2 hover:text-green-600">Tentang Kami</a></li>
            <li><a href="#products" class="block py-2 hover:text-green-600">Produk</a></li>
            <li><a href="#news" class="block py-2 hover:text-green-600">Berita</a></li>
            <li><a href="#testimonials" class="block py-2 hover:text-green-600">Ulasan</a></li>
            <li><a href="#contact" class="block py-2 hover:text-green-600">Kontak</a></li>
            <li><a href="#login" class="block bg-green-600 text-white px-4 py-2 rounded text-center hover:bg-green-700">Login</a></li>
        </ul>
    </div>
</header>

<!-- Hero Section -->
<section id="home" class="hero min-h-[50vh] flex items-center justify-center text-white relative">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Ubah Sampah Menjadi Solusi</h2>
        <p class="text-lg md:text-xl mb-8 max-w-3xl mx-auto">Misi kami adalah mendaur ulang limbah menjadi produk berkualitas tinggi yang tidak hanya ramah lingkungan tetapi juga fungsional dan estetis.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="/" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg transition">
                Kembali ke Beranda
            </a>
                <a href="{{ route('volunteer.create') }}" class="bg-transparent border-2 border-white hover:bg-white hover:text-green-700 text-white font-bold py-3 px-6 rounded-lg transition">
            Jadi Volunteer
        </a>
        </div>
    </div>
</section>

<!-- Divider -->
<div class="border-t border-gray-200 my-6"></div>

<!-- Main Form Container -->
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        <!-- Card Header -->
        <div class="bg-green-600 text-white px-6 py-4">
            <h4 class="text-xl font-bold">Form Layanan Pengaduan</h4>
        </div>

        <!-- Card Body -->
        <div class="p-6 md:p-8">
            <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Nama Field -->
                <div>
                    <label for="nama" class="block text-gray-700 font-medium mb-2">Nama</label>
                    <input type="text" name="nama" id="nama"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent"
                           required>
                </div>

                <!-- No Telepon Field -->
                <div>
                    <label for="no" class="block text-gray-700 font-medium mb-2">No Telepon</label>
                    <input type="text" name="no_telp" id="no"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent"
                           required>
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                    <input type="email" name="email" id="email"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent"
                           required>
                </div>

                <!-- Alamat Field -->
                <div>
                    <label for="alamat" class="block text-gray-700 font-medium mb-2">Alamat</label>
                    <textarea name="alamat" id="alamat" rows="3"
                              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent"
                              required></textarea>
                </div>

                <!-- Foto Field -->
                <div>
                    <label for="foto" class="block text-gray-700 font-medium mb-2">Foto</label>
                    <input type="file" name="foto" id="foto"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent"
                           accept="image/*" required>
                    <div class="mt-3">
                        <img id="previewFoto" src="#" alt="Preview Foto"
                             class="hidden max-w-full md:max-w-[300px] border border-gray-300 p-1 rounded-lg" />
                    </div>
                </div>

                <!-- Keterangan Field -->
                <div>
                    <label for="keterangan" class="block text-gray-700 font-medium mb-2">Keterangan</label>
                    <input type="text" name="keterangan" id="keterangan"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent"
                           required>
                </div>

                <!-- Map Field -->
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Pilih Titik Koordinat</label>
                    <div id="map" class="rounded-lg border border-gray-300"></div>
                    <small id="koordinat-terpilih" class="text-gray-500 mt-1 block"></small>
                    <input type="hidden" name="titik_koordinat" id="titik_koordinat">
                    <input type="hidden" name="latitude" id="latitude">
                    <input type="hidden" name="longitude" id="longitude">
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit"
                            class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition">
                        Kirim Pengaduan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white pt-12 pb-6 mt-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
            <!-- About Section -->
            <div class="footer-about">
                <div class="footer-logo flex items-center mb-4">
                    <img src="/images/LOGO.png" alt="Trash2Move Logo" class="h-10 w-10 mr-3">
                    <h2 class="text-xl font-bold">Trash2Move</h2>
                </div>
                <p class="text-gray-400 mb-4">Trash2Move adalah perusahaan daur ulang inovatif yang mendedikasikan diri untuk mengubah limbah menjadi produk bernilai tinggi sambil membangun komunitas yang sadar lingkungan.</p>
                <div class="social-links flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-facebook-f text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-youtube text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Products Section -->
            <div class="footer-links-section">
                <h3 class="text-lg font-semibold text-green-500 mb-4 border-b border-green-500 pb-2">Produk</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Furniture</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Aksesori</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Kemasan</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Dekorasi</a></li>
                </ul>
            </div>

            <!-- Company Section -->
            <div class="footer-links-section">
                <h3 class="text-lg font-semibold text-green-500 mb-4 border-b border-green-500 pb-2">Perusahaan</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Tentang Kami</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Tim</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Karir</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Blog</a></li>
                </ul>
            </div>

            <!-- Contact Section -->
            <div class="footer-links-section">
                <h3 class="text-lg font-semibold text-green-500 mb-4 border-b border-green-500 pb-2">Kontak</h3>
                <ul class="space-y-2 text-gray-400">
                    <li>Jl. Hijau Lestari No.123</li>
                    <li>Jakarta Selatan, Indonesia</li>
                    <li>+62 21 1234 5678</li>
                    <li>info@trash2move.id</li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center text-gray-400 pt-6 border-t border-gray-700">
            &copy; 2025 Trash2Move. Hak Cipta Dilindungi.
        </div>
    </div>
</footer>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
    // Initialize map
    var map = L.map('map').setView([-0.9472, 100.3544], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap',
        maxZoom: 18,
    }).addTo(map);

    // Handle map click
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

        // Get location name from Nominatim (reverse geocoding)
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

    // Load existing reports on map
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

    // Preview image when file is selected
    const inputFoto = document.getElementById('foto');
    const preview = document.getElementById('previewFoto');

    inputFoto.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();

            reader.addEventListener("load", function () {
                preview.setAttribute("src", this.result);
                preview.classList.remove('hidden');
            });

            reader.readAsDataURL(file);
        } else {
            preview.setAttribute("src", "#");
            preview.classList.add('hidden');
        }
    });

    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>



</body>
</html>
