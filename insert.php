<?php 
	session_start();
	include 'koneksi.php';

	$tanggal = date('Y-m-d');
	$jns_daftar = $_SESSION['jenis_daftar'];
	$tanggal_masuk = date('Y-m-d', strtotime($_SESSION['tgl_masuk']));
	$nis = $_SESSION['nis'];
	$nomor_ujian = $_SESSION['nmr_ujian'];
	$paud = $_SESSION['paud'];
	$tk = $_SESSION['tk'];
	$skhun = $_SESSION['skhun'];
	$ijazah = $_SESSION['ijazah'];
	$hobi = $_SESSION['hobi'];
	$cita = $_SESSION['cita'];
	$nama_lengkap = $_SESSION['nama_lengkap'];
	$jenis_kelamin = $_SESSION['jenkel'];
	$nisn = $_SESSION['nisn'];
	$nik = $_SESSION['nik'];
	$tmpt_lahir = $_SESSION['tempat_lahir'];
	$tgl_lahir = date('Y-m-d', strtotime($_SESSION['tgl_lahir']));
	$agama = $_SESSION['agama'];
	$berk_anak = $_SESSION['berkebutuhan_anak'];
	$alamat = $_SESSION['alamat'];
	$rt = $_SESSION['rt'];
	$rw = $_SESSION['rw'];
	$nama_dsn = $_SESSION['nama_dusun'];
	$nama_kelurahan = $_SESSION['nama_klrh'];
	$kecamatan = $_SESSION['kecamatan'];
	$kode_pos = $_SESSION['kode_pos'];
	$tmpt_tinggal = $_SESSION['tempat_tinggal'];
	$moda_trasnsport = $_SESSION['moda_transportasi'];
	$no_telpon = $_SESSION['no_telp'];
	$penerima = $_SESSION['penerima'];
	$nomor_kip = $_SESSION['nmr_kip'];
	$nama_ayah = $_SESSION['nama_ayah'];
	$lahir_ayah = $_SESSION['thn_lahir_ayah'];
	$pendidikan_ayah = $_SESSION['pendidikan_ayah'];
	$pekerjaan_ayah = $_SESSION['pekerjaan_ayah'];
	$penghasilan_ayah = $_SESSION['penghasilan_ayah'];
	$berk_ayah = $_SESSION['berkebutuhan_ayah'];
	$nama_ibu = $_POST['nama_ibu'];
	$lahir_ibu = $_POST['thn_lahir_ibu'];
	$pendidikan_ibu = $_POST['pendidikan_ibu'];
	$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
	$penghasilan_ibu = $_POST['penghasilan_ibu'];
	$berk_ibu = $_POST['berkebutuhan_ibu'];

	$query = "INSERT INTO peserta_didik (tanggal_kirim, jenis_pendaftaran, tanggal_masuk_sekolah, nis, nmr_peserta_ujian, paud, tk, skhun, ijazah, hobi, cita_cita, nama_lengkap, jenis_kelamin, nisn, nik, tempat_lahir, tanggal_lahir, agama, berkebutuhan_khusus_anak, alamat_jalan, rt, rw, nama_dusun, nama_kelurahan, kecamatan, kode_pos, tempat_tinggal, moda_transportasi, no_telpon, penerima_kip, nomor_kip, nama_ayah, tahun_lahir_ayah, pendidikan_ayah, pekerjaan_ayah, penghasilan_ayah, berkebutuhan_khusus_ayah, nama_ibu, tahun_lahir_ibu, pendidikan_ibu, pekerjaan_ibu, penghasilan_ibu, berkebutuhan_khusus_ibu) 
		VALUES ('$tanggal','$jns_daftar', '$tanggal_masuk', '$nis', '$nomor_ujian', '$paud', '$tk', '$skhun', '$ijazah', '$hobi', '$cita', '$nama_lengkap', '$jenis_kelamin', '$nisn', '$nik', '$tmpt_lahir', '$tgl_lahir', '$agama', '$berk_anak', '$alamat', '$rt', '$rw', '$nama_dsn', '$nama_kelurahan', '$kecamatan', '$kode_pos', '$tmpt_tinggal', '$moda_trasnsport', '$no_telpon', '$penerima', '$nomor_kip', '$nama_ayah', '$lahir_ayah', '$pendidikan_ayah', '$pekerjaan_ayah', '$penghasilan_ayah', '$berk_ayah', '$nama_ibu', '$lahir_ibu', '$pendidikan_ibu', '$pekerjaan_ibu', '$penghasilan_ibu', '$berk_ibu')";

		if (mysqli_query($koneksi, $query)){
			echo "<script>alert('Data berhasil ditambahkan');</script>";
		}else {
			echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
		}
 ?>