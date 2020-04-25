<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UTS PEMROGRAMAN WEB 2</title>
</head>
<body style ="background-color: black">
	<div style="width: 70%;background-color: silver;margin: 10px auto; padding: 20px">
		<h1 style="text-align: center"> INPUT DATA PASIEN COVID-19</h1>
		<hr>
		<form action"testcovid.php" method="POST">
			<h3 style="display: block; margin-bottom: 5px;">Nama Wilayah</h3>
			<select name="wilayah" style="height: 40px;">
				<option value="Banten"> Banten </option>
				<option value="DKI Jakarta"> DKI Jakarta </option>
				<option value="Jawa Barat"> Jawa Barat </option>
				<option value="Jawa Tengah"> Jawa Tengah </option>
			</select>
			<h3 style="display: block; margin-bottom: 5px;"> Jumlah Positif </h3>
			<input style="text" name="jumlahpositif" style="width: 100%;height: 40px;" required>
			<h3 style="display: block; margin-bottom: 5px;"> Jumlah Dirawat </h3>
			<input style="text" name="jumlahdirawat" style="width: 100%;height: 40px;" required>
			<h3 style="display: block; margin-bottom: 5px;"> Jumlah Sembuh </h3>
			<input style="text" name="jumlahsembuh" style="width: 100%;height: 40px;" required>
			<h3 style="display: block; margin-bottom: 5px;"> Jumlah Meninggal </h3>
			<input style="text" name="jumlahmeninggal" style="width: 100%;height: 40px;" required>
			<h3 style="display: block; margin-bottom: 5px;"> Nama Operator </h3>
			<input style="text" name="operator" style="width: 100%;height: 40px;" required>
			<h3 style="display: block; margin-bottom: 5px;"> NIM Mahasiswa </h3>
			<input style="text" name="nim" style="width: 100%;height: 40px;" required><br>
			<button type="submit" name="simpan" style="margin-top: 15px; height: 40px; background-color: white; color: black;"> Simpan </button>
			<button type="reset" name="hapus" style="margin-top: 15px; height: 40px; background-color: white; color: black;"> Hapus </button>