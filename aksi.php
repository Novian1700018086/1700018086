<html>

<head>
	<title>Daftar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<center>

		<?php
		echo "<head><title>Daftar</head></title>";
		$fp = fopen("pendaftar.txt", "a+");
		$nama = $_POST["nama"];
		$asal = $_POST["asal"];
		$alamat = $_POST["alamat"];
		$email = $_POST["email"];
		$status = $_POST["status"];
		$komentar = $_POST["komentar"];

		fputs($fp, "$nama|$asal|$alamat|$email|$status|$komentar\n");
		fclose($fp);

		echo "<h1>Terima Kasih Sudah Mendaftar di Kursus ini</h1><br>";
		echo "<a href=daftar.html style=color:blue>Pendaftaran</a><br>";
		echo "<a href=view.php style=color:blue> Lihat Pendaftar</a><br>";


		?>
		<a href="home.html" style="color:blue">Back home</a>

	</center>
</body>

</html>