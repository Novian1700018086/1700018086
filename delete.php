<!DOCTYPE html>
<html>

<head>
	<title>Daftar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<center>
		<?php
		$fh = fopen("pendaftar.txt", "w");
		fclose($fh);
		echo "<h1>File berhasil di hapus</h1><br>";


		echo "<a href=daftar.html style=color:blue>Pendaftaran</a><br>";
		echo "<a href=view.php style=color:blue> Lihat Pendaftar</a><br>";
		echo "<a href=index.html style=color:blue> Back Home</a>";

		?>
	</center>
</body>

</html>