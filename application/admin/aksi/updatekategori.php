<?php

include('../../config/koneksi.php');

$idkategori = $_POST['idkategori'];
$kategori   = $_POST['kategori'];

if(mysqli_query($koneksi, "update tbkategori SET idkategori='$idkategori', kategori='$kategori' where idkategori='$idkategori'")){
	echo "<script>alert('Data berhasil diupdate');document.location='../views/lihat_kategori.php'</script>";

}else{
	echo "<script>alert('Data gagal diupdate');document.location='../views/lihat_kategori.php'</script>";
}

?>