<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman satu</title>
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
		<h4>Registrasi Peserta Didik</h4></center>
	<form action="hal_2.php" method="POST">
		<table>
			<tr>
				<td>Jenis Pendaftaran</td>
				<td><input type="radio" name="jenis_daftar" value="Baru">Siswa Baru
					<input type="radio" name="jenis_daftar" value="Lama">Pindahan</td>
			</tr>
			<tr>
				<td>Tanggal Masuk Sekolah</td>
				<td><input type="date" name="tgl_masuk"></td>
			</tr>
			<tr>
				<td>NIS</td>
				<td><input type="text" name="nis" class="form-control" required></td>
			</tr>
			<tr>
				<td>Nomor Peserta Ujian</td>
				<td><input type="text" name="nmr_ujian" class="form-control"></td>
			</tr>
			<tr>
				<td>Apakah pernah PAUD?</td>
				<td><input type="radio" name="paud" value="Ya">Ya
					<input type="radio" name="paud" value="Tidak">Tidak</td>
			</tr>
			<tr>
				<td>Apakah pernah TK?</td>
				<td><input type="radio" name="tk" value="Ya">Ya
					<input type="radio" name="tk" value="Tidak">Tidak</td>
			</tr>
			<tr>
				<td>Nomor Seri SKHUN Sebelumnya</td>
				<td><input type="text" name="skhun" class="form-control"></td>
			</tr>
			<tr>
				<td>Nomor Seri Ijazah Sebelumnya</td>
				<td><input type="text" name="ijazah" class="form-control"></td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td><input type="text" name="hobi" class="form-control"></td>
			</tr>
			<tr>
				<td>Cita-cita</td>
				<td><input type="text" name="cita" class="form-control"></td>
			</tr>
		</table>
		<input type="submit" name="submit" value="Halaman Selanjutnya" style="margin-left: 30px;">
	</form>
</body>
</html>