<?php

session_start();
$_SESSION['level']!=='admin';

include('../../config/koneksi.php');

$idsanksi = $_GET['idsanksi'];

if(mysqli_query($koneksi, "delete from tbsanksi where idsanksi='$idsanksi'")){
	header('location:../views/lihat_sanksi.php');
}else{
	echo "<script>alert('Data gagal dihapus');document.location='../views/lihat_sanksi.php'</script>";
}

?>