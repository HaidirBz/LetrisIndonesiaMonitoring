<?php

include('../../config/koneksi.php');

$idnmpelanggaran = $_POST['idnmpelanggaran'];
$nmpelanggaran   = $_POST['nmpelanggaran'];

$sql = "insert into tbnmpelanggaran values('$idnmpelanggaran','$nmpelanggaran')";

if(mysqli_query($koneksi, $sql)){
	echo "<script>alert('Data berhasil ditambah');document.location='../views/lihat_nm_pelanggaran.php'</script>";
	
}else{
	echo "<script>alert('Data gagal ditambah');document.location='../views/lihat_nm_pelanggaran.php'</script>";

}

?>