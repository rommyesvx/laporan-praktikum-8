<?php 
	session_start();
	if(isset($_POST['submit'])){
		$_SESSION['nama_ayah'] = $_POST['nama_ayah'];
		$_SESSION['thn_lahir_ayah'] = $_POST['thn_lahir_ayah'];
		$_SESSION['pendidikan_ayah'] = $_POST['pendidikan_ayah'];
		$_SESSION['pekerjaan_ayah'] = $_POST['pekerjaan_ayah'];
		$_SESSION['penghasilan_ayah'] = $_POST['penghasilan_ayah'];
		$_SESSION['berkebutuhan_ayah'] = $_POST['berkebutuhan_ayah'];
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data ayah</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style type="text/css">
	td {
		padding-top: 10px;
		padding-left: 30px;
	}
	tr {
		margin: 15px;
	}

</style>
<body>
	<center><h3>Formulir Peserta Didik</h3>
		<h4>Data Ibu Kandung</h4></center>
		<form action="insert.php" method="POST">
			<table>
				<tr>
					<td>Nama Ibu Kandung</td>
					<td><input type="text" name="nama_ibu" class="form-control"></td>
				</tr>
				<tr>
					<td>Tahun Lahir</td>
					<td><input type="text" name="thn_lahir_ibu" class="form-control"></td>
				</tr>
				<tr>
					<td>Pendidikan</td>
					<td><select name="pendidikan_ibu">
						<option value="tidak_sekolah">Tidak Sekolah</option>
						<option value="putus_sd">Putus SD</option>
						<option value="sd">SD Sederajat</option>
						<option value="smp">SMP Sederajat</option>
						<option value="sma">SMA Sederajat</option>
						<option value="d1">D1</option>
						<option value="d2">D2</option>
						<option value="d3">D3</option>
						<option value="s1">D4/S1</option>
						<option value="s2">S2</option>
						<option value="s3">S3</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan_ibu" class="form-control"></td>
			</tr>
			<tr>
				<td>Penghasilan Bulanan</td>
				<td><select name="penghasilan_ibu">
					<option value="<500">Kurang dari 500.000</option>
						<option value="500-1">500.000 - 999.999</option>
						<option value="1-2">1.000.000 - 1.999.999</option>
						<option value="2-5">2.000.000 - 4.999.999</option>
						<option value="5-20">5 Juta - 20 Juta</option>
						<option value=">20">Lebih dari 20 Juta</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Berkebutuhan Khusus</td>
				<td><select name="berkebutuhan_ibu" id="berkebutuhan">
					<option value="tidak">Tidak</option>
					<option value="netra">Netra</option>
					<option value="rungu">Rungu</option>
					<option value="grh_ringan">Grahita Ringan</option>
					<option value="grh_sedang">Grahita Sedang</option>
					<option value="dks_ringan">Daksa Ringan</option>
					<option value="ds">Down Syndrome</option>
					<option value="autis">Autis</option>
				</select></td>
			</tr>
		</table>
		<input type="submit" name="submit" value="Halaman Selanjutnya" style="margin-left: 30px;">	
	</form>
</body>
</html>