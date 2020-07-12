<html>

<head>
	<title>Pendaftar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<center>
		<h3>
			<?php
			echo "<head><title>Pendaftar</head></title>";
			$fp  = fopen("pendaftar.txt", "r");
			echo "<ol>";

			while ($isi = fgets($fp, 80)) {
				$pisah = explode("|", $isi);
				echo "<tr><td>Nama </td></tr> : $pisah[0]</td></tr><br>";
				echo "<tr><td>asal </td></tr> : $pisah[1]</td></tr><br>";
				echo "<tr><td>Alamat </td></tr> : $pisah[2]</td></tr><br>";
				echo "<tr><td>Email </td></tr> : $pisah[3]</td></tr><br>";
				echo "<tr><td>Status </td</tr> : $pisah[4]</td></tr><br>";
				echo "<tr><td>Komentar </td></tr> : $pisah[5]</td></tr><br>";
			}
			echo "<ol><br>";

			?>
		</h3>
		<a href="pendaftar.txt" style="color:blue">Klik Disini </a>Isi Form Kursus<br>
		<a href="daftar.html" style="color:blue">Pendaftar</a><br>
		<a href="home.html" style="color:blue">Back Home</a>

	</center>
</body>

</html>