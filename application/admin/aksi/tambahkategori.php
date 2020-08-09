<?php

include('../../config/koneksi.php');

$idkategori = $_POST['idkategori'];
$kategori   = $_POST['kategori'];

$sql = "insert into tbkategori values('$idkategori','$kategori')";

if(mysqli_query($koneksi, $sql)){
	echo "<script>alert('Data berhasil ditambah');document.location='../views/lihat_kategori.php'</script>";
	
}else{
	echo "<script>alert('Data gagal ditambah');document.location='../views/lihat_kategori.php'</script>";

}

?>