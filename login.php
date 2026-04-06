<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Pramuka</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

<style>
body{
background:#f3efec;
}

.navbar{
background:#ffffff;
box-shadow:0 2px 5px rgba(0,0,0,0.1);
}

.login-card{
border:none;
border-radius:15px;
box-shadow:0 4px 15px rgba(0,0,0,0.1);
padding:25px;
}

.logo-circle{
width:60px;
height:60px;
border-radius:50%;
background:#6b4a3c;
color:white;
display:flex;
align-items:center;
justify-content:center;
font-weight:bold;
margin:auto;
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

<nav class="navbar navbar-expand-lg">
<div class="container">
<a class="navbar-brand fw-bold" href="#">Pramuka</a>

<ul class="navbar-nav mx-auto">
<li class="nav-item"><a class="nav-link" href="beranda1.php">Beranda</a></li>
<li class="nav-item"><a class="nav-link" href="daftar.php">Pendaftaran</a></li>
<li class="nav-item"><a class="nav-link" href="#">Galery</a></li>
</ul>

<div>
<button class="btn btn-outline-secondary btn-sm">Login</button>
<button class="btn btn-success btn-sm">Daftar Anggota</button>
</div>

</div>
</nav>


<div class="container text-center mt-5">

<div class="logo-circle">P</div>

<h3 class="mt-3 fw-bold">Login</h3>
<p class="text-muted">Masuk ke dashboard anggota pramuka</p>

<div class="row justify-content-center mt-4">
<div class="col-md-4">

<div class="login-card text-start">

<h6>Selamat Datang</h6>
<small class="text-muted">Masukkan kredensial Anda untuk melanjutkan</small>

<form method="POST" action="proses_login.php">

<div class="mt-3">
<label>Email / Username</label>
<input type="text" name="username" class="form-control" placeholder="email@example.com" required>
</div>

<div class="mt-3">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<button class="btn btn-success w-100 mt-4">Login</button>

</form>

<center class="mt-3">
<small>Belum punya akun? <a href="daftar.php">Daftar di sini</a></small>
</center>

</div>

</div>
</div>

</div>


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