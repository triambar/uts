<?php
	if(isset($_POST['simpan'])){
		$wilayah =$_POST['wilayah'];
		$jumlahpositif =$_POST['jumlahpositif'];
		$jumlahdirawat =$_POST['jumlahdirawat'];
		$jumlahsembuh =$_POST['jumlahsembuh'];
		$jumlahmeninggal =$_POST['jumlahmeninggal'];
		$operator =$_POST['operator'];
		$nim =$_POST['nim'];
	}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DATA PEMANTAUAN COVID-19</title>
	<style>
		table td, table th {
		border: 1px solid black;
		padding: 8px;
		}
	</style>
</head>
<body style="background-color:black">
	<div style="width: 80%; background-color: silver; margin: 10px auto; padding: 20px;">
		<h1 style="text-align:center"> Data Pemantauan Covid-19 Wilayah <?= $wilayah; ?> <br>
		Per <?= date_default_timezone_set ('Asia/Jakarta');
		echo date('d-F-Y H:i:s');?><br>
		<?= $operator; ?> / <?= $nim;?>
		</h1>
		<hr>
		<table style="width: 100%; border: 1px solid white;">
			<thead>
				<tr>
					<th> Positif </th>
					<th> Dirawat </th>
					<th> Sembuh </th>
					<th> Meninggal </th>
				</tr>
			</thead>
			<tbody style="text-align:center">
				<tr>
					<td><?= $jumlahpositif?></td>
					<td><?= $jumlahdirawat?></td>
					<td><?= $jumlahsembuh?></td>
					<td><?= $jumlahmeninggal?></td>
				</tr>
			</tbody>
		</table>
		<button onclick="window.location.href='index.php'" style="margin-top: 15px; height: 40px; background-color: white; color: black;"> Kembali </button>
	</div>
</body>
</html>