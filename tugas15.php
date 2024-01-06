<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php 

	$negara = array (
			array("Indonesia", "D.K.I. Jakarta", "+62" ),
			array("Singapura", "Singapura", "+65"),
			array("Malaysia", "Kuala Lumpur", "+60"),
			array("Brunei", "BandarSeriBegawan", "+673"),
			array("Thailand", "Bangkok", "+66"),
			array("Laos", "Vientiane", "+856"),
			array("Filipina", "Manila", "+63"),
			array("Myanmar", "Naypyidaw", "+95")
	);
				
	echo "<table border = '1' cellpadding='5' cellspacing='2'>";			
	echo "<tr>";
	echo "<th>Negara</th>";
	echo "<th>Ibu Kota</th>";
	echo "<th>Kode Telepon</th> </tr>";
				
	foreach ($negara as $lengkap) {
			// code...
		echo "<tr>"; 
		foreach ($lengkap as $akhir)
		echo "<td> $akhir </td>";
		}
		echo "</tr>";	
				
	echo "</table>";			
				
				


	 ?>

</body>
</html>