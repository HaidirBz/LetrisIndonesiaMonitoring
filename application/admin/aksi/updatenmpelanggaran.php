<?php

include('../../config/koneksi.php');

$idnmpelanggaran = $_POST['idnmpelanggaran'];
$nmpelanggaran   = $_POST['nmpelanggaran'];

if(mysqli_query($koneksi, "update tbnmpelanggaran SET idnmpelanggaran='$idnmpelanggaran', nmpelanggaran='$nmpelanggaran' where 
						   idnmpelanggaran='$idnmpelanggaran'")){
	echo "<script>alert('Data berhasil diupdate');document.location='../views/lihat_nm_pelanggaran.php'</script>";

}else{
	echo "<script>alert('Data gagal diupdate');document.location='../views/lihat_nm_pelanggaran.php'</script>";
}

?>