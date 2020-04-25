<?php 
include 'koneksi.php';

if (isset($_POST['submit'])) {
	$id 		= $_POST['id'];
	$nama   	= $_POST['nama'];
	$umur 		= $_POST['umur'];
	$alamat 	= $_POST['alamat'];
	$suhu 		= $_POST['suhu'];
	
	$query = ("UPDATE odepe SET nama = '$nama', 
								umur = '$umur', 
								alamat = '$alamat', 
								suhu = '$suhu' 
								WHERE id = '$id'");

	$p = mysqli_query($kon, $query);

	var_dump($p);
	echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";

}


 ?>