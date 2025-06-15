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

        <<div class="container d-flex justify-content-center">
    <div class="row justify-content-center my-5 w-100" style="max-width: 900px;">
        <div class="col-lg-12">
            <!-- Artikel Berita -->
            <div class="about-right shadow-sm p-4 rounded bg-white">
                <!-- Gambar -->
                <div class="about-img text-center mb-4">
                    <img src="/images/.png" alt="Gambar Berita" class="img-fluid rounded shadow-sm">
                </div>

                <!-- Judul -->
                <div class="section-tittle mb-3 text-center">
                    <h3 class="text-success">Here come the moms in space</h3>
                </div>

                <!-- Konten -->
                <div class="about-prea mb-4">
                    <p class="mb-3">Moms are like…buttons? Moms are like glue. Moms are like pizza crusts...</p>
                    <p class="mb-3">My hero when I was a kid was my mom. Same for everyone I knew...</p>
                </div>

                <!-- Subjudul -->
                <div class="section-tittle mb-3">
                    <h4>Unordered List Style?</h4>
                </div>

                <div class="about-prea mb-4">
                    <p class="mb-3">The refractor telescope uses a convex lens to focus the light...</p>
                </div>

                <!-- Bagikan -->
                <div class="social-share pt-3 border-top">
                    <div class="section-tittle mb-2">
                        <h5>Share:</h5>
                    </div>
                    <ul class="list-inline">
                        <li class="list-inline-item me-2"><a href="#"><img src="assets/img/news/icon-ins.png" width="32"></a></li>
                        <li class="list-inline-item me-2"><a href="#"><img src="assets/img/news/icon-fb.png" width="32"></a></li>
                        <li class="list-inline-item me-2"><a href="#"><img src="assets/img/news/icon-tw.png" width="32"></a></li>
                        <li class="list-inline-item"><a href="#"><img src="assets/img/news/icon-yo.png" width="32"></a></li>
                    </ul>
                </div>
            </div>

            <!-- Form Kontak -->
            <div class="mt-5">
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm">
                    <div class="row g-3">
                        <div class="col-12">
                            <textarea class="form-control" name="message" id="message" rows="5" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="col-sm-6">
                            <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                        </div>
                        <div class="col-sm-6">
                            <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                        </div>
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-success px-4">Send</button>
                        </div>
                    </div>
                </form>
            </div>
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
