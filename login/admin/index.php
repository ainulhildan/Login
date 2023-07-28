<?php
include '../koneksi.php';
// mengaktifkan session
session_start();
// cek apakah user telah logi. jika belum, alihkan ke halaman login
if($_SESSION['status']!="login"){
    header("location:.../index.php");
}
// menampilkan pesan selamat datang
echo "Hai selamat datang".$_SESSION['username'];
?>
<br/>
<br/>
<a href="logout.php">LOGOUT</a>