<html>

<head>
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
	<?php
	$fh = fopen("guestbook.txt", "w") or die("Could not open file!");
	fclose($fh);
	?>
	<center>
		<form method="post" action="proses.php"><br>
			<tr>
				<td>
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama" id="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" id="alamat"></td>
			</tr>
			<tr>
				<td>E-Mail</td>
				<td><input type="text" name="email" id="email"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><select name="status" id="status">
						<option>-Pilih-</option>
						<option>Menikah</option>
						<option>Single</option>
					</select></td>
			</tr>
			<tr>
				<td>Komentar</td>
				<td><textarea name="komentar" id="komentar"></textarea></td>
			</tr>
			<tr>
				</td>
			</tr>
			<input type="submit" value="Update">
		</form><br>
		<a href="home.html" style="color:blue">Back Home</a><br>
		<a href="daftar.html" style="color:blue"> Pendaftaran </a><br>
		<a href="view.php" style="color:blue"> Lihat Pendaftar </a><br>
	</center>
</body>

</html>