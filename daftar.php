<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pendaftaran Anggota</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

<style>

body{
background:#f3efec;
}

.navbar{
background:white;
box-shadow:0 2px 5px rgba(0,0,0,0.1);
}

.form-card{
border-radius:15px;
padding:25px;
border:none;
box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

.footer{
background:#5c3a2e;
color:white;
padding:40px 0;
margin-top:100px;
}

</style>

</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
<div class="container">
<a class="navbar-brand fw-bold" href="#">Pramuka</a>
<div class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="beranda1.php">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="daftar.php">Pendaftaran</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Galery</a></li>
                </ul>
            </div>
<a href="login.php" class="btn btn-outline-secondary btn-sm">Login</a>
<a href="daftar.php" class="btn btn-success btn-sm">Daftar Anggota</a>
</div>

</div>
</nav>


<div class="container mt-5">

<div class="text-center">
<h3 class="fw-bold">Pendaftaran Anggota</h3>
<p class="text-muted">Lengkapi formulir di bawah ini untuk mendaftar sebagai anggota pramuka</p>
</div>


<div class="row justify-content-center mt-4">
<div class="col-md-6">

<div class="card form-card">

<h6>Formulir Pendaftaran</h6>
<small class="text-muted">Semua data yang diisi akan dijaga kerahasiaannya</small>

<form action="proses_daftar.php" method="POST">

<div class="mt-3">
<label>Nama Lengkap *</label>
<input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
</div>

<div class="mt-3">
<label>NTA *</label>
<input type="text" name="nta" class="form-control" placeholder="Masukkan NTA" required>
</div>

<div class="mt-3">
<label>Gugus Depan *</label>
<input type="text" name="gugus" class="form-control" placeholder="Contoh: 12-001" required>
</div>

<div class="mt-3">
<label>Jenis Kelamin *</label>
<select name="jk" class="form-control" required>
<option value="">Pilih jenis kelamin</option>
<option>Laki-laki</option>
<option>Perempuan</option>
</select>
</div>

<div class="mt-3">
<label>Email / No. Telepon *</label>
<input type="text" name="kontak" class="form-control" placeholder="email@example.com" required>
</div>

<div class="row mt-4">

<div class="col-md-6">
<button type="reset" class="btn btn-secondary w-100">Batal</button>
</div>

<div class="col-md-6">
<button class="btn btn-success w-100">Daftar</button>
</div>

</div>

</form>

<center class="mt-3">
<small>Sudah punya akun? <a href="login.php">Login di sini</a></small>
</center>

</div>

</div>
</div>

</div>


<!-- Footer -->
<div class="footer">
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
```

---

# 5. proses_daftar.php

```php
<?php

$conn = mysqli_connect("localhost","root","","pramuka");

$nama = $_POST['nama'];
$nta = $_POST['nta'];
$gugus = $_POST['gugus'];
$jk = $_POST['jk'];
$kontak = $_POST['kontak'];

mysqli_query($conn,"INSERT INTO users VALUES('', '$nama','$nta','$gugus','$jk','$kontak')");

header("location:login.php");

?>