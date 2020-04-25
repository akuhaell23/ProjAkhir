<?php 
include 'koneksi.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pendataan ODP</title>
	<link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>
<center>	
	
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>

	<h2>Pendataan ODP Daerah Tulungagung</h2>

	<table class="content-table">
  	<thead>
    	<tr>
     		<th>No</th>
			<th>Nama</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Suhu</th>
			<th>Aksi</th>
    	</tr>
  	</thead>
  	<tbody>
    	
    </tbody>
    <?php 
    $i = 1;
			$query = mysqli_query($kon, "SELECT * FROM odepe");
			while ($pjm = mysqli_fetch_assoc($query)){
				?>
				<tr>
				
				<td><?php echo $i++; ?></td>
				
				<td><?php echo $pjm["nama"]; ?></td>
				<td><?php echo $pjm["umur"]; ?></td>
				<td><?php echo $pjm["alamat"]; ?></td>
				<td><?php echo $pjm["suhu"]; ?></td>
				<td>
				<a href="edit.php?id=<?php echo $pjm['id']; ?>" class = "tombol_edit"> Edit </a>
				<a href="hapus.php?id=<?php echo $pjm['id']; ?>" class = "tombol_delete"> Hapus </a>
				</td>
				</tr>

			<?php  }
			 ?>

    </table>
    <br/>
    	<a href="tambah.php" class="tambah">Tambah ODP</a>


</center>
</body>
</html>