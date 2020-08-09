<?php

session_start();
$_SESSION['level']!=='admin';

include('../../config/koneksi.php');

$idnmpelanggaran = $_GET['idnmpelanggaran'];

if(mysqli_query($koneksi, "delete from tbnmpelanggaran where idnmpelanggaran='$idnmpelanggaran'")){
	header('location:../views/lihat_nm_pelanggaran.php');
}else{
	echo "<script>alert('Data gagal dihapus');document.location='../views/lihat_nm_pelanggaran.php'</script>";
}

?>