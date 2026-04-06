<?php
// Simulasi data dari database
$nama = "Ahmad Wijaya";
$nis = "12345678";
$gugus = "12-001";
$status = "Aktif";

$kehadiran = "8/10";
$status_iuran = "Lunas";
$event = "3";
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Pramuka</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

<style>
body{
background:#f5f1ed;
}

.navbar{
background:#ffffff;
box-shadow:0 2px 5px rgba(0,0,0,0.1);
}

.card{
border:none;
border-radius:15px;
box-shadow:0 4px 10px rgba(0,0,0,0.05);
}

.quick-card{
padding:25px;
text-align:center;
transition:0.3s;
}

.quick-card:hover{
transform:translateY(-5px);
}

.footer{
background:#5c3a2e;
color:white;
padding:40px 0;
}

.badge-aktif{
background:#e6f4ea;
color:#28a745;
padding:5px 15px;
border-radius:20px;
}

</style>

</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
<div class="container">
<a class="navbar-brand fw-bold" href="#">Pramuka</a>

<ul class="navbar-nav mx-auto">
<li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
<li class="nav-item"><a class="nav-link" href="#">Event</a></li>
<li class="nav-item"><a class="nav-link" href="#">Materi</a></li>
<li class="nav-item"><a class="nav-link" href="#">Iuran & Kas</a></li>
<li class="nav-item"><a class="nav-link" href="#">Absensi</a></li>
<li class="nav-item"><a class="nav-link" href="#">Galery</a></li>
</ul>

<a href="login.php" class="btn btn-outline-dark btn-sm">Logout</a>

</div>
</nav>


<div class="container mt-4">

<h3 class="fw-bold">Selamat Datang, <?php echo $nama ?>!</h3>
<p class="text-muted">Kelola aktivitas kepramukaan Anda dengan mudah</p>


<!-- Profil -->
<div class="card p-4 mt-3">
<h6 class="mb-3">Profil Anggota</h6>

<div class="row">
<div class="col-md-3">
<label>Nama</label>
<h6><?php echo $nama ?></h6>
</div>

<div class="col-md-3">
<label>NIS/NIM</label>
<h6><?php echo $nis ?></h6>
</div>

<div class="col-md-3">
<label>Gugus Depan</label>
<h6><?php echo $gugus ?></h6>
</div>

<div class="col-md-3">
<label>Status</label>
<br>
<span class="badge-aktif"><?php echo $status ?></span>
</div>

</div>
</div>


<h5 class="mt-4">Akses Cepat</h5>

<div class="row mt-3">

<div class="col-md-6">
<div class="card quick-card">
<i class="fa fa-check fa-2x text-success"></i>
<h6 class="mt-2">Absensi</h6>
<small>Catat kehadiran</small>
</div>
</div>

<div class="col-md-6">
<div class="card quick-card">
<i class="fa fa-wallet fa-2x text-warning"></i>
<h6 class="mt-2">Iuran & Kas</h6>
<small>Lihat riwayat kas</small>
</div>
</div>

<div class="col-md-6 mt-3">
<div class="card quick-card">
<i class="fa fa-calendar fa-2x text-dark"></i>
<h6 class="mt-2">Event Tahunan</h6>
<small>Lihat event</small>
</div>
</div>

<div class="col-md-6 mt-3">
<div class="card quick-card">
<i class="fa fa-book fa-2x text-success"></i>
<h6 class="mt-2">Materi</h6>
<small>Akses pembelajaran</small>
</div>
</div>

</div>


<div class="row mt-4">

<div class="col-md-4">
<div class="card p-3">
<h6>Kehadiran Bulan Ini</h6>
<h3 class="text-success"><?php echo $kehadiran ?></h3>
<small>pertemuan</small>
</div>
</div>

<div class="col-md-4">
<div class="card p-3">
<h6>Status Iuran</h6>
<h3 class="text-warning"><?php echo $status_iuran ?></h3>
<small>Februari 2026</small>
</div>
</div>

<div class="col-md-4">
<div class="card p-3">
<h6>Event Mendatang</h6>
<h3><?php echo $event ?></h3>
<small>event</small>
</div>
</div>

</div>


</div>


<!-- Footer -->
<div class="footer mt-5">
<div class="container">
<div class="row">

<div class="col-md-4">
<h6>Pramuka Indonesia</h6>
<p>Gerakan Pramuka Indonesia membentuk karakter pemuda</p>
</div>

<div class="col-md-4">
<h6>Hubungi Kami</h6>
<p>Jl. Pramuka No 123</p>
</div>

<div class="col-md-4">
<h6>Media Sosial</h6>
<i class="fab fa-facebook"></i>
<i class="fab fa-instagram"></i>
<i class="fab fa-twitter"></i>
</div>

</div>

<hr>
<center>
<small>© 2026 Gerakan Pramuka Indonesia</small>
</center>

</div>
</div>


</body>
</html>