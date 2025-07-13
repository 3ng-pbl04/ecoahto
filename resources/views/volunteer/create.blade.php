<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Volunteer | Trash2Move</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>

    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .mobile-menu.open {
            max-height: 500px;
        }

        .radio-card {
            transition: all 0.2s ease;
        }

        .radio-card:hover {
            transform: translateY(-2px);
        }

        .radio-card input:checked + label {
            border-color: #3b82f6;
            background-color: #eff6ff;
            box-shadow: 0 0 0 2px #bfdbfe;
        }

        .hero-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/images/sampah.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="bg-gray-50 font-sans antialiased">

<!-- Header -->
<header class="bg-white shadow-md sticky top-0 z-[1000]">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <div class="logo flex items-center">
            <img src="{{ asset('storage/' . $page_settings->company_logo) }}"
                 alt="Logo"
                 class="h-10 w-10 object-contain mr-3">
            <h1 class="text-xl font-bold text-green-700">{{ $page_settings->company_name ?? 'Trash2Move' }}</h1>
        </div>

        <!-- Desktop Menu -->
        <nav class="hidden md:block">
            <ul class="flex space-x-6">
                <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'text-green-600 font-semibold' : 'hover:text-green-600' }} transition">Beranda</a></li>
                <li><a href="{{ url('/#company') }}" class="hover:text-green-600 transition">Tentang Kami</a></li>
                <li><a href="{{ url('/#products') }}" class="hover:text-green-600 transition">Produk</a></li>
                <li><a href="{{ url('/#news') }}" class="hover:text-green-600 transition">Berita</a></li>
                <li><a href="{{ url('/#testimonials') }}" class="hover:text-green-600 transition">Ulasan</a></li>
                <li><a href="{{ route('login') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Login</a></li>
            </ul>
        </nav>

        <!-- Hamburger Menu Button -->
        <button id="mobile-menu-button" class="md:hidden text-gray-700 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu md:hidden bg-white z-50">
        <ul class="px-4 py-2 space-y-2">
            <li><a href="{{ url('/') }}" class="block py-2 hover:text-green-600">Beranda</a></li>
            <li><a href="{{ url('/#company') }}" class="block py-2 hover:text-green-600">Tentang Kami</a></li>
            <li><a href="{{ url('/#products') }}" class="block py-2 hover:text-green-600">Produk</a></li>
            <li><a href="{{ url('/#news') }}" class="block py-2 hover:text-green-600">Berita</a></li>
            <li><a href="{{ url('/#testimonials') }}" class="block py-2 hover:text-green-600">Ulasan</a></li>
            <li><a href="{{ route('login') }}" class="block bg-green-600 text-white px-4 py-2 rounded text-center hover:bg-green-700">Login</a></li>
        </ul>
    </div>
</header>

    <!-- Hero Section -->
   <section class="hero-bg min-h-[40vh] flex items-center justify-center text-white">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Formulir Volunteer</h1>
        <p class="text-lg max-w-2xl mx-auto mb-6">Setiap aksi kecil bisa membawa perubahan besar. Jadi relawan Trash2Move hari ini dan jadilah pahlawan lingkungan di komunitasmu</p>
        <div class="flex flex-wrap justify-center gap-3">
            <a href="/" class="inline-flex items-center gap-2 bg-primary-600 hover:bg-primary-700 text-white font-medium py-2 px-5 rounded-lg transition">
                <i class="fas fa-arrow-left"></i> Kembali ke Beranda
            </a>
            <a href="{{ route('pengaduan.create') }}" class="inline-flex items-center gap-2 bg-white/20 hover:bg-white/30 text-white font-medium py-2 px-5 rounded-lg transition border border-white">
                <i class="fas fa-hands"></i> Ajukan Aksi
            </a>
        </div>
    </div>
</section>

    <!-- Divider -->
    <div class="border-t border-gray-200/50 my-6"></div>

    <!-- Volunteer Form Section -->
    <div class="container mx-auto px-4 py-8 md:py-12">
        <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md overflow-hidden">
            <div class="bg-blue-600 text-white py-4 px-6">
                <h4 class="text-xl font-bold">Form Volunteer</h4>
                <p class="text-blue-100">Bergabunglah dengan kami untuk menciptakan perubahan!</p>
            </div>

            <div class="p-6 md:p-8">
                <form action="{{ route('volunteer.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <!-- Nama -->
                    <div class="space-y-2">
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                    </div>

                    <!-- No Telepon -->
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-phone text-gray-400"></i>
                        </div>
                        <input type="tel" name="no_telp" id="no_telp" required
                            pattern="^(?:\+628\d{9,12}|08\d{9,12})$"
                            minlength="12" maxlength="15"
                            oninvalid="this.setCustomValidity('Masukkan nomor telepon yang valid (12–15 digit). Contoh: 081234567890 atau +628123456789')"
                            oninput="this.setCustomValidity('')"
                            class="pl-10 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                            placeholder="Contoh: 081234567890 atau +628123456789"  autocomplete="tel">

                            <p id="no_telp_error" class="mt-1 text-sm text-red-600 hidden"></p>
                    </div>



                    <!-- Status Kesehatan -->
                    <div class="space-y-3">
                        <legend class="block text-sm font-medium text-gray-700">Apakah Anda memiliki riwayat penyakit?</legend>

                        <div class="flex flex-col sm:flex-row gap-4">
                            <!-- Ya Option -->
                            <div class="radio-card flex-1">
                                <input type="radio" id="status_ya" name="status_kesehatan" value="ya" class="sr-only peer">
                                <label for="status_ya" class="flex flex-col items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-500 peer-checked:bg-blue-50 peer-checked:shadow-sm transition-all">
                                    <span class="text-lg font-medium text-gray-700">Ya</span>
                                    <span class="text-sm text-gray-500">Saya memiliki riwayat penyakit</span>
                                </label>
                            </div>

                            <!-- Tidak Option -->
                            <div class="radio-card flex-1">
                                <input type="radio" id="status_tidak" name="status_kesehatan" value="tidak" class="sr-only peer" checked>
                                <label for="status_tidak" class="flex flex-col items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-500 peer-checked:bg-blue-50 peer-checked:shadow-sm transition-all">
                                    <span class="text-lg font-medium text-gray-700">Tidak</span>
                                    <span class="text-sm text-gray-500">Saya tidak memiliki riwayat penyakit</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Penjelasan Penyakit (Conditional) -->
                    <div id="penjelasan-container" class="hidden space-y-2">
                        <label for="penjelasan" class="block text-sm font-medium text-gray-700">Jelaskan riwayat penyakit Anda</label>
                        <textarea id="penjelasan" name="penjelasan" rows="3"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                            placeholder="Mohon jelaskan riwayat penyakit Anda secara singkat dan jelas"></textarea>
                    </div>

                    <!-- Alamat -->
                    <div class="space-y-2">
                        <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat Lengkap</label>
                        <textarea id="alamat" name="alamat" rows="3" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                            placeholder="Tulis alamat lengkap termasuk RT/RW, Kecamatan, dan Kota"></textarea>
                    </div>

                    <!-- Submit Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition-colors shadow-md flex-1">
                            <i class="fas fa-paper-plane mr-2"></i> Kirim Data Volunteer
                        </button>
                        <button type="reset" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-3 px-6 rounded-lg transition-colors shadow-md flex-1">
                            <i class="fas fa-undo mr-2"></i> Reset Form
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('tampilan.footer')

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Toggle mobile menu
        const menuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (menuButton && mobileMenu) {
            menuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('open');
            });

            document.querySelectorAll('#mobile-menu a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.remove('open');
                });
            });
        }

        // Toggle penjelasan penyakit field based on radio selection
        const statusYa = document.getElementById('status_ya');
        const statusTidak = document.getElementById('status_tidak');
        const penjelasanContainer = document.getElementById('penjelasan-container');
        const penjelasanField = document.getElementById('penjelasan');

        function togglePenjelasanField() {
            if (statusYa?.checked) {
                penjelasanContainer?.classList.remove('hidden');
                if (penjelasanField) penjelasanField.required = true;
            } else {
                penjelasanContainer?.classList.add('hidden');
                if (penjelasanField) penjelasanField.required = false;
            }
        }

        if (statusYa && statusTidak) {
            statusYa.addEventListener('change', togglePenjelasanField);
            statusTidak.addEventListener('change', togglePenjelasanField);
        }

        // Initialize field on page load
        togglePenjelasanField();
    });
</script>


<script>
        document.addEventListener('DOMContentLoaded', () => {
        const input  = document.getElementById('no_telp');
        const error  = document.getElementById('no_telp_error');
        const regex  = /^(?:\+628\d{9,12}|08\d{9,12})$/; // 12–15 digit & prefix 08 / +628

        /**
         * Tampilkan atau sembunyikan pesan error.
         * @param {string|null} message
         */
        function showError(message = null) {
            if (message) {
                error.textContent = message;
                error.classList.remove('hidden');
                input.classList.add('border-red-500', 'focus:border-red-500', 'focus:ring-red-500');
            } else {
                error.textContent = '';
                error.classList.add('hidden');
                input.classList.remove('border-red-500', 'focus:border-red-500', 'focus:ring-red-500');
            }
        }

        /**
         * Validasi telepon: panjang 12–15 digit & pola 08 / +628.
         * @param {string} value
         * @returns {boolean}
         */
        function isValidPhone(value) {
            return regex.test(value);
        }

        // Validasi saat pengguna mengetik & saat keluar dari field
        ['input', 'blur'].forEach(eventType => {
            input.addEventListener(eventType, () => {
                const value = input.value.trim();

                if (!value) {
                    showError(null); // kosong = tidak ada pesan
                } else if (!isValidPhone(value)) {
                    showError('Nomor harus 12–15 digit dan diawali 08 atau +628');
                } else {
                    showError(null); // valid
                }
            });
        });

        // Validasi ulang sebelum submit form
        const form = input.closest('form');
        if (form) {
            form.addEventListener('submit', e => {
                const value = input.value.trim();

                if (!isValidPhone(value)) {
                    e.preventDefault(); // cegah submit
                    showError('Nomor harus 12–15 digit dan diawali 08 atau +628');
                    input.focus();
                }
            });
        }
    });
</script>

</body>
</html>
