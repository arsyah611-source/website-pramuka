<?php
session_start();

// koneksi database
$conn = mysqli_connect("localhost","root","","pramuka");

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password'");

$data = mysqli_fetch_assoc($query);

if($data){

$_SESSION['login'] = true;
$_SESSION['nama'] = $data['nama'];

header("location:index.php");

}else{

echo "Login gagal";

}

?>