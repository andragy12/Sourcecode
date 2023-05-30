<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
		<label for="NilaiAwal">Nilai Awal:</label>
		<input type="text" name="NilaiAwal" id="NilaiAwal"><br><br>
		<label for="NilaiAkhir">Nilai Akhir:</label>
		<input type="text" name="NilaiAkhir" id="NilaiAkhir"><br><br>
		<input type="submit" name="submit" value="HITUNG">
	</form>

	<?php

	if(isset($_POST['submit'])) {
		$NilaiAwal = $_POST['NilaiAwal'];
		$NilaiAkhir = $_POST['NilaiAkhir'];

		$series_count = 0;
		$series_sum = 0;
		$series_numbers = array();

		for ($i = $NilaiAwal; $i <= $NilaiAkhir; $i += 2) {
		    if ($i % 3 == 0) {
		        $series_count++;
		        $series_sum += $i;
		        array_push($series_numbers, $i);
		    }
		}

		echo "<p>Deret Bilangan: " . implode(", ", $series_numbers) . "</p>";
		echo "<p>Jumlah Bilangan: " . $series_count . "</p>";
		echo "<p> Jumlah Nilai Bilangan: " . $series_sum . "</p>";
	}
	?>
    
</body>
</html>