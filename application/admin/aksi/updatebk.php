<?php

include('../../config/koneksi.php');

$nip 		  = $_POST['nip'];
$nama   	  = $_POST['nama'];
$jk   		  = $_POST['jk'];
$alamat   	  = $_POST['alamat'];
$notlpn   	  = $_POST['notlpn'];
$masa_jabatan = $_POST['masa_jabatan'];
$level   	  = $_POST['level'];

if(mysqli_query($koneksi, "update tbbk SET nip='$nip', nama='$nama', jk='$jk', alamat='$alamat', notlpn='$notlpn', 
						   masa_jabatan='$masa_jabatan', level='$level' where nip='$nip'")){
	echo "<script>alert('Data berhasil diupdate');document.location='../views/lihat_bk.php'</script>";

}else{
	echo "<script>alert('Data gagal diupdate');document.location='../views/lihat_bk.php'</script>";
}

?>