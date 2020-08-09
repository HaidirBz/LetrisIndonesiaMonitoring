<?php

include('../../config/koneksi.php');

$nip = $_GET['nip'];

if(mysqli_query($koneksi, "delete from tbkepsek where nip='$nip'")){
	header('location:../views/lihat_kepsek.php');
}else{
	echo "<script>alert('Data gagal dihapus');document.location='../views/lihat_kepsek.php'</script>";
}

?>