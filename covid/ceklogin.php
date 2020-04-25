<?php
session_start();
include 'koneksi.php';

// if(isset($_POST["login"])){

	$username = $_POST["username"];
	$password = $_POST["password"];

	$res = mysqli_query($kon, "SELECT * FROM login WHERE username = '$username' AND password = '$password'");
	$cek = mysqli_num_rows($res);
	
	if($cek>0){
		
		header("location:index.php");
	}else{
		echo "<script>alert('Maaf username / password salah ');window.location='indexl.php';</script>";
		header("location:indexl.php");
	}
	//cek username dan pass
	// if ($cek == 1) {
	// 	$_SESSION['username'] = $username;
	// 	$_SESSION['status'] = "login";
	// 	header("Location : index.php");
	// 	exit;
	// }else{
	// 	header("location : index.php?pesan=gagal;");
	// }
//}


 ?>
