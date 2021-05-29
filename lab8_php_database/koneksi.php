<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "latihan1";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if ($koneksi->connect_error){
	die("koneksi ke database gagal");
} else {
	echo "koneksi berhasil";
}

?>