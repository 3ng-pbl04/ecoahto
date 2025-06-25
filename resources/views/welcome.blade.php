<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trash 2 Move - Solusi Daur Ulang untuk Masa Depan Lebih Hijau</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/LOGO.png') }}" type="image/png">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


</head>

<body>
    <!-- Header & Navigation -->
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

    <!-- Hero Section -->
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
            <a href="/pengaduan/create">
                <button class="btn btn-primary" onclick="openModal('location-modal')">
                    Ajukan Lokasi Aksi
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


    <!-- Stats Section -->
    <section class="stats">
        <div class="container stats-container">
            <div class="stat-item">
                <div class="stat-number">15,000+</div>
                <div class="stat-label">Ton Sampah Didaur Ulang</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">500+</div>
                <div class="stat-label">Produk Inovatif</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">250+</div>
                <div class="stat-label">Komunitas Terlibat</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">10,000+</div>
                <div class="stat-label">Pohon Ditanam</div>
            </div>
        </div>
    </section>

    <!-- Company Profile Section -->
    <section id="company" class="company-profile">
    <div class="container">
        <div class="section-title">
            <h2>{{ $page_settings->about_title ?? 'Tentang Kami' }}</h2>
        </div>

        <div class="about-grid">
            <div class="about-image">
                <img src="{{ $page_settings->about_image ? asset('storage/' . $page_settings->about_image) : asset('images/team.jpg') }}"
                     alt="Tentang Kami"
                     style="width: 100%; border-radius: 10px;">
            </div>
            <div class="about-content">
                <h3>Visi</h3>
                {!! $page_settings->visi ?? '<p>Tidak ada visi yang tersedia.</p>' !!}

                <br>

                <h3>Misi</h3>
                {!! $page_settings->misi ?? '<p>Tidak ada misi yang tersedia.</p>' !!}

                <br>

                <h3>Kenapa Kami?</h3>
                {!! $page_settings->keunggulan ?? '<p>Tidak ada keunggulan yang tersedia.</p>' !!}
            </div>
            </div>
        </div>
    </section>


    <!-- Product Section -->
    <section id="products" class="products">
        <div class="container">
            <div class="section-title">
                <h2>Produk Kami</h2>
            </div>

            <div class="product-filters">
                <button class="filter-btn active">Semua</button>
                <button class="filter-btn">Furniture</button>
                <button class="filter-btn">Aksesori</button>
                <button class="filter-btn">Kemasan</button>
            </div>

            <div class="product-grid">
    @foreach ($postingans as $post)
        <div class="product-card">
            <div class="product-image">
            <img src="{{ Storage::url($post->gambar) }}" alt="{{ $post->judul }}">
            </div>
            <div class="product-info">
                <h3 class="product-title">{{ $post->nama }}</h3>
                <p class="product-description">{{ $post->deskripsi }}</p>
                <div class="product-meta">
                    <span class="product-price">Rp {{ number_format($post->harga, 0, ',', '.') }}</span>
                    <span class="product-rating">{!! render_stars($post->rating) !!}</span>
                </div>
                <button class="buy-btn" onclick="window.open('{{ $post->link }}', '_blank');">Beli</button>
            </div>
        </div>
    @endforeach
</div>
    </section>

<section id="mitra" class="mitra">
    <div class="containerr">
        <div class="section-title">
            <h2>Mitra Kami</h2>
            <div class="underline"></div>
            <p class="section-subtitle">Dipercaya oleh perusahaan terkemuka</p>
        </div>
        <div class="swiper mitra-swiper">
            <div class="swiper-wrapper">
                @foreach($mitras as $mitra)
                    <div class="swiper-slide">
                        <div class="mitra-logo">
                            <div class="logo-bg"></div>
                            <img src="{{ $mitra->logo_mitra ? asset('storage/' . $mitra->logo_mitra) : 'https://via.placeholder.com/95x95/cccccc/FFFFFF?text=Logo' }}" alt="{{ $mitra->nama }}">
                            <div class="shine-effect"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Floating particles background -->
        <div class="particles-container">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
    </div>
</section>
</section>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Section Styling with Enhanced Background */
        #mitra {
            padding: 80px 0;
            background: linear-gradient(135deg, #ffffff 0%, #ffffff 100%);
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        #mitra::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 20% 50%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, rgba(255,255,255,0.1) 0%, transparent 50%);
            animation: backgroundShift 20s ease-in-out infinite;
        }

        @keyframes backgroundShift {
            0%, 100% { opacity: 0.8; }
            50% { opacity: 1; }
        }

        .containerr {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 2;
        }

        /* Enhanced Section Title */
        .section-title {
            margin-bottom: 60px;
            opacity: 0;
            animation: fadeInUp 1s ease-out 0.3s forwards;
        }

        .section-title h2 {
            font-size: clamp(28px, 4vw, 42px);
            font-weight: 700;
            color: #111111;
            margin-bottom: 15px;
            letter-spacing: 1px;
            position: relative;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.3) 50%, transparent 70%);
            transform: translateX(-100%);
            animation: titleShine 3s ease-in-out infinite;
        }

        @keyframes titleShine {
            0% { transform: translateX(-100%); }
            50% { transform: translateX(100%); }
            100% { transform: translateX(100%); }
        }

        .underline {
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #ff6b6b, #ffa726);
            margin: 0 auto 20px auto;
            border-radius: 2px;
            box-shadow: 0 2px 10px rgba(255,107,107,0.5);
            animation: underlineGlow 2s ease-in-out infinite alternate;
        }

        @keyframes underlineGlow {
            0% {
                box-shadow: 0 2px 10px rgba(255,107,107,0.5);
                transform: scaleX(1);
            }
            100% {
                box-shadow: 0 4px 20px rgba(255,107,107,0.8);
                transform: scaleX(1.1);
            }
        }

        .section-subtitle {
            color: rgba(46, 42, 42, 0.9);
            font-size: 16px;
            font-weight: 300;
            letter-spacing: 0.5px;
        }

        /* Enhanced Swiper Container */
        .mitra-swiper {
            max-width: 100%;
            margin: 0 auto;
            overflow: visible;
            padding: 20px 0;
        }

        .mitra-swiper .swiper-slide {
            width: 140px !important;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            animation: slideInUp 0.8s ease-out forwards;
        }

        .mitra-swiper .swiper-slide:nth-child(1) { animation-delay: 0.5s; }
        .mitra-swiper .swiper-slide:nth-child(2) { animation-delay: 0.6s; }
        .mitra-swiper .swiper-slide:nth-child(3) { animation-delay: 0.7s; }
        .mitra-swiper .swiper-slide:nth-child(4) { animation-delay: 0.8s; }
        .mitra-swiper .swiper-slide:nth-child(5) { animation-delay: 0.9s; }
        .mitra-swiper .swiper-slide:nth-child(6) { animation-delay: 1.0s; }
        .mitra-swiper .swiper-slide:nth-child(7) { animation-delay: 1.1s; }
        .mitra-swiper .swiper-slide:nth-child(8) { animation-delay: 1.2s; }

        @keyframes slideInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Premium Logo Styling */
        .mitra-logo {
            width: 120px;
            height: 120px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 50%;
            box-shadow:
                0 8px 32px rgba(0,0,0,0.1),
                0 2px 8px rgba(0,0,0,0.05),
                inset 0 1px 0 rgba(255,255,255,0.8);
            border: 2px solid rgba(21, 129, 30, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            aspect-ratio: 1 / 1;
        }

        .logo-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 50%;
        }

        .mitra-logo img {
            width: 85px;
            height: 85px;
            object-fit: cover;
            border-radius: 50%;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            z-index: 2;
            filter: saturate(0.8);
            aspect-ratio: 1 / 1;
        }


        .shine-effect {
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.6) 50%, transparent 70%);
            transform: rotate(45deg) translateX(-100%);
            transition: transform 0.6s ease;
            border-radius: 50%;
        }

        /* Hover Effects */
        .mitra-logo:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow:
                0 20px 40px rgba(0,0,0,0.15),
                0 5px 15px rgba(0,0,0,0.1),
                inset 0 1px 0 rgba(255,255,255,0.9);
        }

        .mitra-logo:hover .logo-bg {
            opacity: 0.1;
        }

        .mitra-logo:hover img {
            transform: scale(1.1) rotate(5deg);
            filter: saturate(1.2) brightness(1.1);
        }

        .mitra-logo:hover .shine-effect {
            transform: rotate(45deg) translateX(100%);
        }

        /* Floating Particles */
        .particles-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(28, 216, 59, 0.6);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .particle:nth-child(1) {
            left: 10%;
            animation-delay: 0s;
            animation-duration: 6s;
        }

        .particle:nth-child(2) {
            left: 30%;
            animation-delay: 1s;
            animation-duration: 8s;
        }

        .particle:nth-child(3) {
            left: 50%;
            animation-delay: 2s;
            animation-duration: 7s;
        }

        .particle:nth-child(4) {
            left: 70%;
            animation-delay: 3s;
            animation-duration: 9s;
        }

        .particle:nth-child(5) {
            left: 90%;
            animation-delay: 4s;
            animation-duration: 5s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(100vh) scale(0);
                opacity: 0;
            }
            10% {
                opacity: 1;
                transform: translateY(90vh) scale(1);
            }
            90% {
                opacity: 1;
                transform: translateY(-10vh) scale(1);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            #mitra {
                padding: 60px 0;
            }

            .mitra-logo {
                width: 100px;
                height: 100px;
            }

            .mitra-logo img {
                width: 70px;
                height: 70px;
            }

            .mitra-swiper .swiper-slide {
                width: 120px !important;
            }
        }

        /* Pulse Animation for Active State */
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(102, 126, 234, 0.7);
            }
            70% {
                box-shadow: 0 0 0 20px rgba(102, 126, 234, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(102, 126, 234, 0);
            }
        }

        .mitra-logo:active {
            animation: pulse 0.6s ease-out;
        }

        /* Smooth Loading Animation */
        .mitra-swiper .swiper-wrapper {
            transition-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Swiper with smooth animations
            const mitraSwiper = new Swiper('.mitra-swiper', {
                slidesPerView: 'auto',
                spaceBetween: 40,
                loop: true,
                speed: 5000,
                allowTouchMove: true,
                grabCursor: true,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                    reverseDirection: false
                },
                breakpoints: {
                    320: {
                        spaceBetween: 20,
                        speed: 4000
                    },
                    768: {
                        spaceBetween: 30,
                        speed: 4500
                    },
                    1024: {
                        spaceBetween: 40,
                        speed: 5000
                    }
                },
                on: {
                    init: function() {
                        // Add entrance animation
                        this.slides.forEach((slide, index) => {
                            slide.style.animationDelay = (0.5 + index * 0.1) + 's';
                        });
                    }
                }
            });

            // Pause on hover for better UX
            const swiperContainer = document.querySelector('.mitra-swiper');
            swiperContainer.addEventListener('mouseenter', () => {
                mitraSwiper.autoplay.stop();
            });

            swiperContainer.addEventListener('mouseleave', () => {
                mitraSwiper.autoplay.start();
            });

            // Add intersection observer for scroll animations
            const observerOptions = {
                threshold: 0.3,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                    }
                });
            }, observerOptions);

            // Observe section for scroll animations
            observer.observe(document.querySelector('#mitra'));

            // Add smooth parallax effect
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const section = document.querySelector('#mitra');
                const rect = section.getBoundingClientRect();

                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    const particles = document.querySelectorAll('.particle');
                    particles.forEach((particle, index) => {
                        const speed = (index + 1) * 0.1;
                        particle.style.transform = `translateY(${scrolled * speed}px)`;
                    });
                }
            });

            // Add click effect for logos
            document.querySelectorAll('.mitra-logo').forEach(logo => {
                logo.addEventListener('click', function(e) {
                    const ripple = document.createElement('div');
                    ripple.classList.add('ripple');

                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;

                    ripple.style.cssText = `
                        position: absolute;
                        width: ${size}px;
                        height: ${size}px;
                        left: ${x}px;
                        top: ${y}px;
                        background: rgba(255,255,255,0.6);
                        border-radius: 50%;
                        transform: scale(0);
                        animation: ripple 0.6s ease-out;
                        pointer-events: none;
                    `;

                    this.appendChild(ripple);

                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });

            // Add ripple animation
            const style = document.createElement('style');
            style.textContent = `
                @keyframes ripple {
                    to {
                        transform: scale(2);
                        opacity: 0;
                    }
                }
            `;
            document.head.appendChild(style);
        });
    </script>

 <!-- News Section - Added new section -->
    <section id="news" class="news">
        <div class="container">
            <div class="section-title">
                <h2>Berita Terkini</h2>
            </div>

            <div class="news-grid">
      @foreach ($beritas as $berita)
    <div class="news-card">
        <div class="news-image">
            <img src="{{ Storage::url($berita->gambar) }}" alt="{{ $berita->judul }}">
            <div class="news-date">{{ \Carbon\Carbon::parse($berita->tanggal)->format('d F Y') }}</div>
        </div>
        <div class="news-content">
            <div class="news-category">{{ $berita->admin->username }}</div>
            <h3 class="news-title">{{ $berita->judul }}</h3>
            <p class="news-excerpt">{{ Str::limit($berita->deskripsi, 150) }}</p>

            {{-- Jika berita punya slug, arahkan ke detail dinamis --}}
            @if ($berita->slug)
                <a href="{{ route('berita.detail', ['slug' => $berita->slug]) }}" class="read-more">Baca selengkapnya →</a>
            @else
                {{-- Fallback ke route berbasis id --}}
                <a href="{{ route('berita.detail1', ['id' => $berita->id]) }}" class="read-more">Baca selengkapnya →</a>
            @endif
        </div>
    </div>
@endforeach

    </div>
            </div>

            <div class="see-all-news">
                <a href="#" class="btn btn-primary">Lihat Semua Berita</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>Ulasan Pelanggan</h2>
            </div>

            <div class="swiper testimonial-carousel" style="margin-bottom: 80px;">
                <div class="swiper-wrapper">
                    @foreach($ulasans->take(5) as $ulasan)
                    <div class="swiper-slide testimonial-item">
                        <p class="testimonial-text">"{{ $ulasan->deskripsi }}"</p>
                        <p class="testimonial-author">{{ $ulasan->nama }}</p>
                        <p class="testimonial-role">{{ $ulasan->pekerjaan ?? 'Pelanggan' }}</p>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>


            <!-- Add Comment Section -->
            <div class="add-comment mt-3">
                <h3>Tambahkan Komentar Anda</h3>
                <form method="POST" id="comment-form" action="{{ route('ulasan.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="comment-name">Nama</label>
                        <input type="text" name="nama" id="comment-name" class="form-input" placeholder="Masukkan nama Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="comment-role">Peran</label>
                        <input type="text" name="peran" id="comment-role" class="form-input" placeholder="Masukkan peran Anda (misalnya, Pelanggan, Volunteer, dll.)" required>
                    </div>
                    <div class="form-group">
                        <label for="comment-text">Komentar</label>
                        <textarea name="komentar" id="comment-text" class="form-textarea" placeholder="Tulis komentar Anda di sini..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Komentar</button>
                </form>
                @if (session('success'))
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: '{{ session('success') }}',
                        });
                    </script>
                @endif
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Bergabunglah Dengan Gerakan Daur Ulang</h2>
            <p>Bersama kita bisa menciptakan masa depan yang lebih berkelanjutan. Daftarkan diri Anda sebagai volunteer atau ajukan lokasi daur ulang hari ini!</p>
            <div class="cta-buttons">
                <button class="btn btn-white" onclick="openModal('location-modal')">Ajukan Lokasi Aksi</button>
                <button class="btn btn-white" onclick="openModal('volunteer-modal')">Jadi Volunteer</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <div class="footer-logo">
                        <img src="images/LOGO.png" alt="EcoRecycle Logo">
                        <h2>Trash2Move</h2>
                    </div>
                    <p>
                        {{ $page_settings->footer_text ?? '' }}
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
                <li>
                        {{ $page_settings->alamat ?? 'Informasi kontak belum tersedia' }}
                    </a>
                </li>
            </ul>
        </div>


            </div>

            <div class="copyright">
                &copy; 2025 Zikry. Hak Cipta Dilindungi.
            </div>
        </div>
    </footer>

    <!-- Modal - Volunteer Form -->
    <div id="volunteer-modal" class="modal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeModal('volunteer-modal')">&times;</span>
            <h2 class="modal-title">Daftar Sebagai Volunteer</h2>

            <form id="volunteer-form">
                <div class="form-group">
                    <label class="form-label" for="volunteer-name">Nama Lengkap</label>
                    <input type="text" id="volunteer-name" class="form-input" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="volunteer-email">Email</label>
                    <input type="email" id="volunteer-email" class="form-input" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="volunteer-phone">Nomor Telepon</label>
                    <input type="tel" id="volunteer-phone" class="form-input" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="volunteer-availability">Ketersediaan Waktu</label>
                    <select id="volunteer-availability" class="form-select" required>
                        <option value="">Pilih ketersediaan</option>
                        <option value="weekday">Hari Kerja</option>
                        <option value="weekend">Akhir Pekan</option>
                        <option value="both">Keduanya</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label" for="volunteer-skills">Keahlian & Pengalaman</label>
                    <textarea id="volunteer-skills" class="form-textarea" placeholder="Ceritakan tentang keahlian dan pengalaman yang relevan..."></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label" for="volunteer-motivation">Motivasi</label>
                    <textarea id="volunteer-motivation" class="form-textarea" placeholder="Mengapa Anda tertarik menjadi volunteer EcoRecycle?"></textarea>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%;">Kirim Aplikasi</button>
            </form>
        </div>
    </div>

    <!-- Modal - Location Form -->
    <div id="location-modal" class="modal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeModal('location-modal')">&times;</span>
        </div>
    </div>

            <!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap"
    async defer
></script>

   <script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.testimonial-carousel', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 1,
            spaceBetween: 20,
            autoplay: {
                delay: 5000,
            },
        });
    });
</script>



