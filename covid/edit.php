
<!DOCTYPE html>
<html>
<head>
	<title>Edit ODP</title>
	<link rel="stylesheet" type="text/css" href="stylecrud.css">
</head>
<body class="body-tbh">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	<h2>Edit ODP</h2>

<?php 
include 'koneksi.php';
$id = $_GET["id"];
$query = mysqli_query($kon, ("SELECT * FROM odepe where id = $id" ));

$p = mysqli_fetch_assoc ($query);

 ?>

<form action="pedit.php" method="post">
	<div class="wrapper">
  	<div class="contact-form">
    <div class="input-fields">
    
    	<input type="hidden" name="id" value="<?php echo $p["id"]; ?>" required>
      <input type="text" class="input" placeholder="Name" name="nama" value="<?php echo $p["nama"]; ?>" required>
      <input type="text" class="input" placeholder="Umur" name="umur" value="<?php echo $p["umur"]; ?>" required>
      <input type="text" class="input" placeholder="Alamat" name="alamat" value="<?php echo $p["alamat"]; ?>" required>
      <input type="text" class="input" placeholder="Suhu" name="suhu" value="<?php echo $p["suhu"]; ?>" required>
    </div>
    <div class="msg">
      <div class="btn">
      	<input type="submit" value="submit" name="submit"></div>
    </div>
  </div>
</div>
</form>	
</body>
</html>