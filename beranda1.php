<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pramuka Indonesia - Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fdfaf5;
            color: #333;
        }

        /* Navbar Custom */
        .navbar {
            background-color: #5d4037 !important; /* Warna coklat tua */
        }
        .nav-link, .navbar-brand {
            color: #fff !important;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(45, 90, 39, 0.7), rgba(45, 90, 39, 0.7)), 
                        url('https://images.unsplash.com/photo-1533230408703-a21239612344?auto=format&fit=crop&q=80');
            background-size: cover;
            background-position: center;
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        /* Card Services */
        .service-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .service-icon {
            font-size: 2.5rem;
            color: #2d5a27;
            margin-bottom: 15px;
        }

        /* Section Profile Box */
        .profile-box {
            border: 1px solid #ddd;
            padding: 30px;
            background: white;
            border-radius: 8px;
        }

        /* Footer */
        .footer-top {
            background-color: #2d5a27;
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        .footer-bottom {
            background-color: #5d4037;
            color: #ccc;
            padding: 40px 0;
        }

        .btn-pramuka-yellow {
            background-color: #ffc107;
            color: #000;
            font-weight: 600;
        }
        .btn-pramuka-green {
            background-color: #2d5a27;
            color: white;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                Pramuka
            </a>
            <div class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="beranda1.php">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="daftar.php">Pendaftaran</a></li>
                    <li class="nav-item"><a class="nav-link" href="GaleryLog.php">Galery</a></li>
                </ul>
            </div>
            <div>
                <a href="login.php" class="btn btn-outline-secondary btn-sm">Login</a>
                <button class="btn btn-sm btn-success">Daftar Anggota</button>
            </div>
        </div>
    </nav>

    <header class="hero-section">
        <div class="container" data-aos="zoom-in" data-aos-duration="1000">
            <h1 class="display-3 fw-bold">Satyaku Kudarmabaktikan<br>Darmaku Kubaktikan</h1>
            <p class="lead my-4">Bergabunglah dengan Gerakan Pramuka Indonesia untuk mengembangkan karakter, keterampilan, dan kepemimpinan Anda.</p>
            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-pramuka-yellow px-4 py-2">Daftar Anggota <i class="fas fa-chevron-down ms-1"></i></button>
                <button class="btn btn-light px-4 py-2">Login</button>
            </div>
        </div>
    </header>

    <section class="container py-5 text-center">
        <div data-aos="fade-up">
            <h2 class="fw-bold mb-3">Profile</h2>
            <p class="fst-italic">"Satu pramuka untuk satu Indonesia, ikhlas bakti bina bangsa berbudi bawa laksana."</p>
            
            <div class="row justify-content-center mt-5">
                <div class="col-md-4 mb-4">
                    <div class="profile-box shadow-sm">
                        <h5 class="fw-bold border-bottom pb-2">Visi & Misi</h5>
                        <p class="small">"Satyaku Kudarmabaktikan, Darmaku Kubaktikan"</p>
                    </div>
                </div>
                <div class="col-md-8 mb-4 text-start">
                    <div class="profile-box shadow-sm">
                        <h5 class="fw-bold border-bottom pb-2 text-center">Sejarah</h5>
                        <ul class="small">
                            <li>Tokoh-tokoh kepramukaan banyak lahir di zaman Perang Dunia Pertama.</li>
                            <li>Baden Powell awalnya membawa kegiatannya ke luar Inggris.</li>
                            <li>Buku "Scouting for Boys" menjadi awal populer kepanduan dunia.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold">Layanan Kami</h2>
            <p class="text-muted">Unit layanan digital untuk mendukung kegiatan kepramukaan</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card service-card p-4">
                    <div class="service-icon"><i class="fas fa-user-plus"></i></div>
                    <h5 class="fw-bold">Pendaftaran Anggota</h5>
                    <p class="small text-muted">Daftarkan diri Anda sebagai anggota Pramuka Indonesia.</p>
                    <a href="#" class="text-success text-decoration-none fw-bold small">Selengkapnya →</a>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card service-card p-4">
                    <div class="service-icon"><i class="fas fa-calendar-check"></i></div>
                    <h5 class="fw-bold">Absensi</h5>
                    <p class="small text-muted">Kelola kehadiran anggota dalam setiap kegiatan secara digital.</p>
                    <a href="#" class="text-success text-decoration-none fw-bold small">Selengkapnya →</a>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card service-card p-4">
                    <div class="service-icon"><i class="fas fa-wallet"></i></div>
                    <h5 class="fw-bold">Iuran & Kas</h5>
                    <p class="small text-muted">Pantau transparansi iuran dan keuangan rutin mingguan.</p>
                    <a href="#" class="text-success text-decoration-none fw-bold small">Selengkapnya →</a>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row align-items-center" data-aos="fade-right">
            <div class="col-md-6">
                <h2 class="fw-bold mb-4">Tentang Kami</h2>
                <p>Gerakan Pramuka Indonesia adalah organisasi pendidikan kepanduan yang membentuk karakter generasi muda berlandaskan kedisplinan, kepemimpinan, dan pengabdian masyarakat.</p>
                <button class="btn btn-pramuka-green mt-3 px-4">Tentang Instansi</button>
            </div>
            <div class="col-md-6 mt-4 mt-md-0" data-aos="zoom-in-left">
                <img src="https://images.unsplash.com/photo-1570126688035-1e6adbd61053?auto=format&fit=crop&q=80" class="img-fluid rounded shadow" alt="Pramuka">
            </div>
        </div>
    </section>

    <div class="footer-top">
        <div class="container" data-aos="fade-up">
            <h3 class="fst-italic">"Jadilah dirimu sendiri, bukan orang lain. Kenali dirimu, terima dirimu, dan kembangkan dirimu."</h3>
            <p class="mt-3">- Baden Powell, Pendiri Gerakan Pramuka Dunia</p>
        </div>
    </div>

    <footer class="footer-bottom">
        <div class="container text-start">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b3/Logo_Pramuka.png" width="20" class="me-2">Pramuka Indonesia</h5>
                    <p class="small">Gerakan Pramuka Indonesia melahirkan karakter tangguh dan berintegritas untuk masa depan bangsa.</p>
                </div>
                <div class="col-md-4 mb-4 px-md-5">
                    <h6 class="fw-bold">Hubungi Kami</h6>
                    <p class="small mb-1"><i class="fas fa-map-marker-alt me-2"></i> Jl. Pramuka No. 1, Jakarta Pusat</p>
                    <p class="small mb-1"><i class="fas fa-phone me-2"></i> +62 21 1234 5678</p>
                    <p class="small"><i class="fas fa-envelope me-2"></i> info@pramuka.or.id</p>
                </div>
                <div class="col-md-4 mb-4 text-md-end">
                    <h6 class="fw-bold">Media Sosial</h6>
                    <div class="d-flex justify-content-md-end gap-3 fs-4">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                    </div>
                </div>
            </div>
            <hr>
            <p class="text-center small mb-0">© 2024 Gerakan Pramuka Indonesia. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
</body>
</html>