
<!DOCTYPE html>
<html>
<head>
	<title>Tambah ODP</title>
	<link rel="stylesheet" type="text/css" href="stylecrud.css">
</head>
<body class="body-tbh">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	<h2>Tambah ODP</h2>
<form action="ptambah.php" method="post">
<div class="wrapper">
  <div class="contact-form">
    <div class="input-fields">
      <input type="text" class="input" placeholder="Name" name="nama">
      <input type="text" class="input" placeholder="Umur" name="umur">
      <input type="text" class="input" placeholder="Alamat" name="alamat">
      <input type="text" class="input" placeholder="Suhu" name="suhu">
    </div>
    <div class="msg">
      <div class="btn">
      	<input type="submit" value="submit" name="submit"></div>
    </div>
    <!-- <input type="submit" value="Tambah Data" name="submit"> -->
  </div>
</div>	
</form>
</body>
</html>