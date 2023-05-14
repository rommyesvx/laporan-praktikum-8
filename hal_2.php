<?php 
	session_start(); 

	$_SESSION['jenis_daftar'] = $_POST['jenis_daftar'];
	$_SESSION['tgl_masuk'] = $_POST['tgl_masuk'];
	$_SESSION['nis'] = $_POST['nis'];
	$_SESSION['nmr_ujian'] = $_POST['nmr_ujian'];
	$_SESSION['paud'] = $_POST['paud'];
	$_SESSION['tk'] = $_POST['tk'];
	$_SESSION['skhun'] = $_POST['skhun'];
	$_SESSION['ijazah'] = $_POST['ijazah'];
	$_SESSION['hobi'] = $_POST['hobi'];
	$_SESSION['cita'] = $_POST['cita'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
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
		<h4>Data Peserta Didik</h4></center>
		<form action="hal_3.php" method="POST">
			<table>
				<tr>
					<td>Nama Lengkap</td>
					<td><input type="text" name="nama_lengkap" class="form-control"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td><input type="radio" name="jenkel" value="L">Laki-laki
						<input type="radio" name="jenkel" value="P">Perempuan</td>
					</tr>
					<tr>
						<td>NISN</td>
						<td><input type="text" name="nisn" class="form-control"></td>
					</tr>
					<tr>
						<td>NIK</td>
						<td><input type="text" name="nik" class="form-control"></td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td><input type="text" name="tempat_lahir" class="form-control"></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td><input type="date" name="tgl_lahir"></td>
					</tr>
					<tr>
						<td>Agama</td>
						<td><select name="agama" id="agama">
							<option value="islam">Islam</option>
							<option value="kristen">Kristen</option>
							<option value="katolik">Katolik</option>
							<option value="hindu">Hindu</option>
							<option value="budha">Budha</option>
							<option value="konghucu">Konghucu</option>
							<option value="atheis">Atheis</option>
						</select></td>
					</tr>
					<tr>
						<td>Berkebutuhan Khusus</td>
						<td><select name="berkebutuhan_anak" id="berkebutuhan">
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
					<tr>
						<td>Alamat Jalan</td>
						<td><input type="text" name="alamat" class="form-control"></td>
					</tr>
					<tr>
						<td>RT</td>
						<td><input type="text" name="rt" class="form-control"></td>
					</tr>
					<tr>
						<td>RW</td>
						<td><input type="text" name="rw" class="form-control"></td>
					</tr>
					<tr>
						<td>Nama Dusun</td>
						<td><input type="text" name="nama_dusun" class="form-control"></td>
					</tr>
					<tr>
						<td>Nama Kelurahan</td>
						<td><input type="text" name="nama_klrh" class="form-control"></td>
					</tr>
					<tr>
						<td>Kecamatan</td>
						<td><input type="text" name="kecamatan" class="form-control"></td>
					</tr>
					<tr>
						<td>Kode Pos</td>
						<td><input type="text" name="kode_pos" class="form-control" ></td>
					</tr>
					<tr>
						<td>Tempat Tinggal</td>
						<td><select name="tempat_tinggal">
							<option value="orangtua">Orang Tua</option>
							<option value="wali">Wali</option>
							<option value="kos">Kos</option>
							<option value="asrama">Asrama</option>
							<option value="panti">Panti Asuhan</option>
							<option value="lainnya">Lainnya</option></select></td>
						</tr>
						<tr>
							<td>Moda Transportasi</td>
							<td><select name="moda_transportasi">
								<option value="kendaraan-pribadi">Kendaraan Pribadi</option>
								<option value="kendaraan-umum">Kendaraan Umum</option>
								<option value="jemputan">Jemputan Sekolah</option>
								<option value="kereta">Kereta Api</option>
								<option value="ojek">Ojek</option>
								<option value="andong">Andong/delman/becak</option>
								<option value="perahu">Perahu</option>
								<option value="lainnya">Lainnya</option></select></td>
							</tr>
							<tr>
								<td>Nomor Telepon</td>
								<td><input type="text" name="no_telp" class="form-control"></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><input type="email" name="email" class="form-control"></td>
							</tr>
							<tr>
								<td>Penerima KPS/PKH/KIP</td>
								<td><input type="radio" name="penerima" value="Ya">Ya
									<input type="radio" name="penerima" value="Tidak">Tidak</td>
								</tr>
								<tr>
									<td>Nomor KPS/PKH/KIP(jika menerima)</td>
									<td><input type="text" name="nmr_kip" id="nomor_kip" class="form-control"></td>
								</tr>
							</table>
							<input type="submit" name="submit" value="Halaman Selanjutnya" style="margin-left: 30px;">
						</form>
					</body>
					</html>