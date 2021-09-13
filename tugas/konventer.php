<html>
<head>
	<title>Converter Suhu</title>
</head>
<style>
	html{
		font-family: helvetica;
	}
</style>
<body>

	<div class="container">

		<h1>Konverter Suhu - PHP</h1>

		<br>

		<form action="convertersuhu.php" method="POST">
			Suhu : <input type="number" name="celcius" required> Celcius
			<br><br>
			Konversi ke :

			<select name="pilihsuhu">
				<option>Celsius</option>
				<option>Reamur</option>
				<option>Farenheit</option>
				<option>Kelvin</option>
				<option>Rankine</option>
				<option>Delisle</option>
				<option>Romer</option>
				<option>Newton</option>
			</select>
			<br><br>

			<input type="submit" name="konversi" value="konversi">
		</form>

		<br><br>

	<?php


	$celsius 	= 	$_POST['celcius'];
	$suhu 		= 	$_POST['pilihsuhu'];
	$konversi 	= 	$_POST['konversi'];


	 if(isset($konversi)){

	 	switch($suhu){

	 		case "Celsius":
	 		echo floatval($celsius);
	 		break;

	 		case "Reamur":
	 		echo floatval($celsius * (4/5));
	 		break;

	 		case "Farenheit":
	 		echo floatval($celsius * (9/5) + 32);
	 		break;

	 		case "Kelvin":
	 		echo floatval($celsius + 273);
	 		break;

	 		case "Rankine":
	 		echo floatval(($celsius + 273)*9/5);
	 		break;

	 		case "Delisle":
	 		echo floatval(100-($celsius*3/2));
	 		break;

	 		case "Romer":
	 		echo floatval($celsius * 21/40 * 7.5);
	 		break;

	 		case "Newton":
	 		echo floatval($celsius * 33/100);
	 		break;

	 	}
	 }else{
	 	echo "ANDA HARUS MEMILIH";
	 }


	?>

	</div>
</body>
</html>