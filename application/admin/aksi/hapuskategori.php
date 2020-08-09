<?php

include('../../config/koneksi.php');

$idkategori = $_GET['idkategori'];

if(mysqli_query($koneksi, "delete from tbkategori where idkategori='$idkategori'")){
	header('location:../views/lihat_kategori.php');
}else{
	echo "<script>alert('Data gagal dihapus');document.location='../views/lihat_kategori.php'</script>";
}

?>