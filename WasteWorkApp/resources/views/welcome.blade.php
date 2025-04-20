<!DOCTYPE html>
<html lang="id">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trash 2 Move- Solusi Daur Ulang untuk Masa Depan Lebih Hijau</title>

</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <img src="images/LOGO.png" alt="EcoRecycle Logo">
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
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container"> 
            <h2>Ubah Sampah Menjadi Solusi</h2>
            <p>Misi kami adalah mendaur ulang limbah menjadi produk berkualitas tinggi yang tidak hanya ramah lingkungan tetapi juga fungsional dan estetis.</p>
            <div class="cta-buttons">
                <button class="btn btn-primary" onclick="openModal('location-modal')">Ajukan Lokasi Aksi</button>
                <button class="btn btn-secondary" onclick="openModal('volunteer-modal')">Jadi Volunteer</button>
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
                <h2>Tentang Kami</h2>
            </div>

            <div class="about-grid">
                <div class="about-image">
                    <img src="images/team.jpg" alt="Tim EcoRecycle" style="width: 100%; border-radius: 10px;">
                </div>
                <div class="about-content">
                    <h3>Visi</h3>
                    <p>Menciptakan dunia yang lebih hijau dan berkelanjutan melalui inovasi dalam daur ulang.</p>
                    <br>
                    <h3>Misi</h3>
                    <p>Mengubah limbah menjadi produk berkualitas tinggi yang ramah lingkungan, fungsional, dan estetis.</p>
                    <br>
                    <h3>Kenapa Kami?</h3>
                    <ul>
                        <li><strong>Keunikan:</strong> Produk kami dirancang dengan kreativitas dan inovasi yang tinggi.</li>
                        <li><strong>Keberlanjutan:</strong> Kami berkomitmen untuk menjaga lingkungan dengan menggunakan bahan daur ulang.</li>
                        <li><strong>Perawatan Rendah:</strong> Produk kami mudah dirawat dan tahan lama.</li>
                        <li><strong>Tahan Cuaca:</strong> Dirancang untuk bertahan dalam berbagai kondisi cuaca.</li>
                    </ul>
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
                <button class="filter-btn">Dekorasi</button>
            </div>
    
            <div class="product-grid">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://down-id.img.susercontent.com/file/id-11134207-7rbke-m70i1p45n60aaa@resize_w450_nl.webp" alt="Kursi Eco">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">GANTUNGAN KUNCI MASJID RAYA SUMBAR (100% Recycled)</h3>
                        <p class="product-description">Gantungan Kunci yang estetik berbentuk Penyu </p>
                        <div class="product-meta">
                            <span class="product-price">Rp 1.250.000</span>
                            <span class="product-rating">★★★★★</span>
                        </div>
                        <button class="buy-btn" onclick="window.location.href='https://shopee.co.id/GANTUNGAN-KUNCI-MASJID-RAYA-SUMBAR-(100-Recycled)-i.391796385.28262865031';">Beli</button>
                    </div>
                </div>
    
                <!-- Product 2 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://down-id.img.susercontent.com/file/id-11134207-7r992-lnto447yi3x2d5.webp" alt="Lampu Gantung">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Kursi Daur Ulang (TA) </h3>
                        <p class="product-description">Kursi Cafe / Kursi Santai / Kursi Plastik</p>
                        <div class="product-meta">
                            <span class="product-price">Rp 350.000</span>
                            <span class="product-rating">★★★★☆</span>
                        </div>
                        <button class="buy-btn" onclick="window.location.href='https://shopee.co.id/Kursi-Daur-Ulang-(TA)-Kursi-Cafe-Kursi-Santai-Kursi-Plastik-i.391796385.19495097824';">Beli</button>
                   
                    </div>
                </div>
    
                <!-- Product 3 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98t-ls8obrjqe3tl44@resize_w450_nl.webp" alt="Set Meja">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"> Kursi Santai Senderan</h3>
                        <p class="product-description">Kursi Cafe dari Daur Ulang Sampah Plastik</p>
                        <div class="product-meta">
                            <span class="product-price">Rp 500.000</span>
                            <span class="product-rating">★★★★★</span>
                        </div>
                        <button class="buy-btn" onclick="window.location.href='https://shopee.co.id/Kursi-Senderan-Motif-Merah-Orange-Kursi-Santai-Senderan-Kursi-Cafe-dari-Daur-Ulang-Sampah-Plastik-i.391796385.25215511419';">Beli</button>
                   
                    </div>
                </div>
    
                <!-- Product 4 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://down-id.img.susercontent.com/file/id-11134207-7r991-ls8obrjq2va1e6@resize_w450_nl.webp" alt="Tas Tote">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Kursi Bulat / Kursi Santai</h3>
                        <p class="product-description">Kursi Cafe dari Daur Ulang Sampah Plastik</p>
                        <div class="product-meta">
                            <span class="product-price">Rp 325.000</span>
                            <span class="product-rating">★★★★☆</span>
                        </div>
                        <button class="buy-btn" onclick="window.location.href='https://shopee.co.id/Kursi-Bulat-Kursi-Santai-Kursi-Cafe-dari-Daur-Ulang-Sampah-Plastik-i.391796385.25215510623';">Beli</button>
                    </div>
                </div>
    
                <!-- Product 5 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98u-ls8obrjq8hjt3d.webp" alt="Tas Tote">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Kursi Bulat</h3>
                        <p class="product-description">Kursi Cafe dari Bahan Full Daur Ulang Sampah Plastik.</p>
                        <div class="product-meta">
                            <span class="product-price">Rp 500.000</span>
                            <span class="product-rating">★★★★☆</span>
                        </div>
                        <button class="buy-btn" onclick="window.location.href='https://shopee.co.id/Kursi-Bulat-Kursi-Cafe-dari-Bahan-Full-Daur-Ulang-Sampah-Plastik-i.391796385.24015510764';">Beli</button>
                   
                    </div>
                </div>
    
                <!-- Product 6 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://down-id.img.susercontent.com/file/id-11134207-7rase-m0tvvcf68llicc@resize_w450_nl.webp" alt="Tas Tote">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">GANTUNGAN KUNCI JAM GADANG (100% Recycled)</h3>
                        <p class="product-description">Gantungan Kunci yang estetik berbentuk jam gadang.</p>
                        <div class="product-meta">
                            <span class="product-price">Rp 19.000</span>
                            <span class="product-rating">★★★★☆</span>
                        </div>
                        <button class="buy-btn" onclick="window.location.href='https://shopee.co.id/GANTUNGAN-KUNCI-JAM-GADANG-(100-Recycled)-i.391796385.29412844986';">Beli</button>
                   
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Product Card with different image -->
        <div class="container" style="display: flex; justify-content: center; align-items: center; height: 50vh; margin-top: 20px;">
            <div class="product-card">
                <div class="product-image">
                    <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98y-ls8obrjqcp9517.webp" alt="Tas Tote">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Kursi Persegi  </h3>
                    <p class="product-description">Kursi Cafe dari Bahan Full Daur Ulang Sampah Plastik</p>
                    <div class="product-meta">
                        <span class="product-price">Rp 350.000</span>
                        <span class="product-rating">★★★★☆</span>
                    </div>
                    <button class="buy-btn" onclick="window.location.href='https://shopee.co.id/Kursi-Persegi-Kursi-Cafe-dari-Bahan-Full-Daur-Ulang-Sampah-Plastik-i.391796385.25115510650">Beli</button>
                   
                </div>
            </div>
        </div>
    </section>
 

    <!-- News Section - Added new section -->
    <section id="news" class="news">
        <div class="container">
            <div class="section-title">
                <h2>Berita Terkini</h2>
            </div>

            <div class="news-grid">
                <!-- News Item 1 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="/api/placeholder/350/200" alt="Peluncuran Program Baru">
                        <div class="news-date">15 April 2025</div>
                    </div>
                    <div class="news-content">
                        <div class="news-category">Program</div>
                        <h3 class="news-title">T2M Meluncurkan Program "Sekolah Hijau"</h3>
                        <p class="news-excerpt">Program baru kami bertujuan mengajarkan praktik daur ulang kepada siswa sekolah di seluruh Indonesia, dengan target 1.000 sekolah pada tahun 2026.</p>
                        <a href="#" class="read-more">Baca selengkapnya →</a>
                    </div>
                </div>

                <!-- News Item 2 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="/api/placeholder/350/200" alt="Kolaborasi Baru">
                        <div class="news-date">10 April 2025</div>
                    </div>
                    <div class="news-content">
                        <div class="news-category">Kemitraan</div>
                        <h3 class="news-title">Kolaborasi dengan Desainer Lokal untuk Koleksi Baru</h3>
                        <p class="news-excerpt">Kami bangga mengumumkan kemitraan dengan 5 desainer terkemuka Indonesia untuk menghasilkan koleksi produk daur ulang eksklusif.</p>
                        <a href="#" class="read-more">Baca selengkapnya →</a>
                    </div>
                </div>

                <!-- News Item 3 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="/api/placeholder/350/200" alt="Penghargaan Lingkungan">
                        <div class="news-date">2 April 2025</div>
                    </div>
                    <div class="news-content">
                        <div class="news-category">Penghargaan</div>
                        <h3 class="news-title">T2M Menerima Penghargaan "Green Innovation Award 2025"</h3>
                        <p class="news-excerpt">Solusi daur ulang inovatif kami telah diakui dalam ajang penghargaan lingkungan tingkat nasional yang diselenggarakan oleh Kementerian Lingkungan Hidup.</p>
                        <a href="#" class="read-more">Baca selengkapnya →</a>
                    </div>
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

            <div class="testimonial-carousel">
                <div class="testimonial-item">
                    <p class="testimonial-text">"Produk Trash2Move tidak hanya ramah lingkungan tetapi juga sangat berkualitas. Kursi Eco Bambu yang saya beli sudah bertahan 3 tahun dan masih terlihat seperti baru!"</p>
                    <p class="testimonial-author">Budi Santoso</p>
                    <p class="testimonial-role">Arsitek & Environmentalist</p>
                </div>
            </div>

            <!-- Add Comment Section -->
            <div class="add-comment mt-3">
                <h3>Tambahkan Komentar Anda</h3>
                <form id="comment-form">
                    <div class="form-group">
                        <label for="comment-name">Nama</label>
                        <input type="text" id="comment-name" class="form-input" placeholder="Masukkan nama Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="comment-role">Peran</label>
                        <input type="text" id="comment-role" class="form-input" placeholder="Masukkan peran Anda (misalnya, Pelanggan, Volunteer, dll.)" required>
                    </div>
                    <div class="form-group">
                        <label for="comment-text">Komentar</label>
                        <textarea id="comment-text" class="form-textarea" placeholder="Tulis komentar Anda di sini..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Komentar</button>
                </form>
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
                    <p>Trash2Move adalah perusahaan daur ulang inovatif yang mendedikasikan diri untuk mengubah limbah menjadi produk bernilai tinggi sambil membangun komunitas yang sadar lingkungan.</p>
                    <div class="social-links">
                        <a href="#"><span>FB</span></a>
                        <a href="#"><span>IG</span></a>
                        <a href="#"><span>TW</span></a>
                        <a href="#"><span>YT</span></a>
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
            <span class="close-modal" onclick="closeModal('