<?php 
include 'koneksi.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Pendataan ODP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>

<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>

<form method="post" action="ceklogin.php">
	<div class="login">
		<div class="avatar">
			<i class="fas fa-user-md"></i>
		</div>

		<h2>Login Petugas COVID-19</h2>

		<div class="box-login">
			<i class="fas fa-user"></i>
			<input type="text" placeholder="Username" name="username">
		</div>
		<div class="box-login">
			<i class="fas fa-lock"></i>
			<input type="password" placeholder="Password" name="password">
		</div>

		<button type="submit" class="btn-login" value="simpan">Login</button>
		
	</div>
</form>


</body>
</html>