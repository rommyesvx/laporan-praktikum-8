<?php
session_start();
require('koneksi.php');
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM login WHERE username='$username' AND password ='$password'";
$login = mysqli_query($koneksi, $query);
$cek = mysqli_num_rows($login);
if ($cek > 0) {
	$data = mysqli_fetch_array($login);

	$_SESSION['username'] = $data['username'];
	header("location:hal_1.php");
} else {
	echo "<h1>ERROR</h1>";
}