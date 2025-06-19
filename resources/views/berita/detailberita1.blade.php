<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Berita</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-B8f6f2vA0ZzcvGLpMnq98zO23NBF7U9Ck2J+BB3OQcrWikDbdAG3WjO4CX84yGB3qABeWwF0LKJpKkI0a43pbg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
    font-family: 'Inter', sans-serif;
    background-color: #f4f6f5;
    color: #333;
    line-height: 1.7;
}

.about-right {
    background-color: #ffffff;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.about-right:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.1);
}

.about-img img {
    width: 100%;
    border-radius: 12px;
    transition: transform 0.3s ease;
}

.about-img img:hover {
    transform: scale(1.03);
}

.section-tittle h3 {
    font-size: 28px;
    font-weight: 700;
    color: #28a745;
    border-left: 4px solid #28a745;
    padding-left: 15px;
    margin-bottom: 20px;
}

.about-prea p {
    font-size: 17px;
    color: #4f4f4f;
    margin-bottom: 20px;
    text-align: justify;
}

.social-share ul {
    display: flex;
    list-style: none;
    padding: 0;
    margin-top: 15px;
    gap: 15px;
}

.social-share ul li a img {
    width: 36px;
    border-radius: 50%;
    transition: transform 0.3s ease;
}

.social-share ul li a:hover img {
    transform: scale(1.1);
}

.form-contact .form-control {
    border-radius: 10px;
    border: 1px solid #c8d6c5;
    padding: 12px 16px;
    font-size: 16px;
    transition: border 0.3s;
    background-color: #fff;
}

.form-contact .form-control:focus {
    border-color: #28a745;
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.2);
}

.button-contactForm {
    background-color: #28a745;
    color: #fff;
    padding: 12px 28px;
    font-size: 16px;
    font-weight: 600;
    border: none;
    border-radius: 10px;
    transition: background-color 0.3s ease;
}

.button-contactForm:hover {
    background-color: #1e7e34;
}

/* Responsive enhancement */
@media (max-width: 768px) {
    .about-right {
        padding: 20px;
    }

    .section-tittle h3 {
        font-size: 24px;
    }

    .about-right {
    background-color: #fff;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
}

.about-img img {
    border-radius: 10px;
    max-height: 400px;
    object-fit: cover;
}

.section-tittle h3,
.section-tittle h4,
.section-tittle h5 {
    font-weight: 700;
    color: #28a745;
    border-left: 4px solid #28a745;
    padding-left: 10px;
}

.about-prea p {
    font-size: 16px;
    line-height: 1.8;
    color: #333;
    text-align: justify;
}

.social-share img:hover {
    transform: scale(1.1);
    transition: 0.3s;
}

.full-center {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}
}
.divider {
    border-top: 2px solid #ddd;
    margin: 15px 0;
}

.about-img img {
    width: 100%;
    max-height: 500px;
    object-fit: cover;
    border-radius: 12px;
}

.container.berita-container {
    padding-top: 20px;
    padding-bottom: 20px;
}
    .add-comment {
        margin-top: 20px;
    }
    </style>
</head>
<body>

<header>
        <div class="container header-container">
            <div class="logo">
            <img src="{{ asset('storage/' . $page_settings->company_logo) }}" alt="Hero Image">
                <h1>{{ $page_settings->company_name ?? 'Judul Default' }}</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#company">Tentang Kami</a></li>
                    <li><a href="#products">Produk</a></li>
                    <li><a href="#news">Berita</a></li>
                    <li><a href="#testimonials">Ulasan</a></li>
                    <li><a href="#contact">Kontak</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
<section id="home" class="hero"
    style="background-image: url('{{ $page_settings->hero_image ? asset('storage/' . $page_settings->hero_image) : asset('images/sampah.jpg') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 100px 0;
    color: white;
    text-align: center;
    ">
    <div class="container">
        <h2>{{ $page_settings->hero_title ?? 'Judul Default' }}</h2>
        <p>{{ $page_settings->hero_description ?? 'Deskripsi Default' }}</p>

        <div class="cta-buttons mt-4">
            <a href="/">
                <button class="btn btn-primary" onclick="openModal('location-modal')">
                    Kembali Ke Beranda
                </button>
            </a>
            <a href="/volunteer/create">
                <button class="btn btn-info" onclick="openModal('location-modal')">
                    Jadi Volunteer
                </button>
            </a>
        </div>
    </div>
</section>


    <div class="divider" style="border: none; background: transparent; height: 1px;"></div>

<div class="container berita-container py-4">
    <div class="row">
        <!-- KONTEN BERITA -->
        <div class="col-lg-8 mb-4">
            <div class="about-right shadow-sm p-4 rounded bg-white">
                <!-- Gambar -->
                <div class="about-img mb-6">
                    <img src="{{ asset('storage/' . $berita->gambar) }}"
                        alt="Gambar Berita"
                        class="w-full max-h-[250px] object-cover rounded-xl shadow">
                </div>


                <!-- Judul -->
                <div class="section-tittle mb-3 text-center">
                    <h3 class="text-success">{{ $berita->judul }}</h3>
                </div>

                <!-- Tanggal & Admin -->
                <p class="text-muted text-center mb-4">
                    {{ \Carbon\Carbon::parse($berita->tanggal)->translatedFormat('d F Y') }}
                    @if ($berita->admin && isset($berita->admin->username))
                        · Diposting oleh: {{ $berita->admin->username }}
                    @endif
                </p>

                <!-- Konten -->
                <div class="about-prea mb-4">
                    <p class="mb-3">{{ $berita->deskripsi }}</p>
                </div>

                <!-- Subjudul -->
                @if (!empty($berita->subjudul))
                    <div class="section-tittle mb-3">
                        <h4>{{ $berita->subjudul }}</h4>
                    </div>
                @endif

                <!-- Bagikan -->
                <div class="social-share pt-4 border-top mt-4">
                    <div class="section-tittle mb-2">
                        <h4>Bagikan:</h4>
                    </div>
                    <ul class="list-inline">
                        <li class="list-inline-item me-2">
                            <a href="#" style="color:#E4405F;"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item me-2">
                            <a href="#" style="color:#1877F2;"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item me-2">
                            <a href="#" style="color:#1DA1F2;"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" style="color:#FF0000;"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
                        <div class="add-comment">
                <h3>Tambahkan Komentar Anda</h3>
            <form id="comment-form" method="POST" action="{{ route('ulasan.store') }}">
                    @csrf
        <div class="form-group">
            <label for="comment-name">Nama</label>
            <input type="text" id="comment-name" name="nama" class="form-input" placeholder="Masukkan nama Anda" required>
        </div>

        <div class="form-group">
            <label for="comment-role">Peran</label>
            <input type="text" id="comment-role" name="peran" class="form-input" placeholder="Masukkan peran Anda (misalnya, Pelanggan, Volunteer, dll.)" required>
        </div>

        <div class="form-group">
            <label for="comment-text">Komentar</label>
            <textarea id="comment-text" name="deskripsi" class="form-textarea" placeholder="Tulis komentar Anda di sini..." required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Kirim Komentar</button>
    </form>
            </div>
            </div>
        </div>
    </div>
</div>


<footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <div class="footer-logo">
                        <img src="{{ asset('storage/' . $page_settings->company_logo) }}" alt="Hero Image">
                        <h2>Trash2Move</h2>
                    </div>
                    <p>
                        {{ $page_settings->footer_text ?? 'Trash2Move adalah perusahaan daur ulang inovatif yang mendedikasikan diri untuk mengubah limbah menjadi produk bernilai tinggi sambil membangun komunitas yang sadar lingkungan.' }}
                    </p>

                <div class="social-links">
                    @if ($page_settings->facebook_link)
                        <a href="{{ $page_settings->facebook_link }}" class="fb" target="_blank" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    @endif

                    @if ($page_settings->instagram_link)
                        <a href="{{ $page_settings->instagram_link }}" class="ig" target="_blank" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    @endif

                    @if ($page_settings->twitter_link)
                        <a href="{{ $page_settings->twitter_link }}" class="tw" target="_blank" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    @endif

                    @if ($page_settings->youtube_link)
                        <a href="{{ $page_settings->youtube_link }}" class="yt" target="_blank" aria-label="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    @endif

                    @if ($page_settings->tiktok_link)
                        <a href="{{ $page_settings->tiktok_link }}" class="tt" target="_blank" aria-label="TikTok">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    @endif
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
                        <li>info@ecorecycle.id</li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                &copy; 2025 Zikry. Hak Cipta Dilindungi.
            </div>
        </div>
    </footer>

</body>
</html>
