<?php 
include 'koneksi.php';
$id = $_GET['id'];

mysqli_query($kon,"DELETE FROM odepe WHERE id ='$id'");

// header("location:index.php");
echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
 ?>