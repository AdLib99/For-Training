<?php
$host = "localhost";
$user = "id11113903_sig";
$pass = "akuhanya1";
$name = "id11113903_untuksig";

//$koneksi = mysqli_connect($host, $user, $pass, $name);
$koneksi = mysqli_connect($host, $user, $pass, $name) or die("Koneksi ke database gagal!");
mysqli_select_db($koneksi, $name) or die("Tidak ada database yang dipilih!");
?>