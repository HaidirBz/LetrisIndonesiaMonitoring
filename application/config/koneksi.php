<?php

//Nama host, Username, Password(kosong), dan Database
$koneksi = mysqli_connect("localhost","root","","dbmonitoring");

//Periksa koneksi
if (mysqli_connect_errno()){
	echo "Koneksi database tidak terhubung : " . mysqli_connect_error();
}

?>