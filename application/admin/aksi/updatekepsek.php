<?php

include('../../config/koneksi.php');

$nip 		  = $_POST['nip'];
$nama   	  = $_POST['nama'];
$jk   		  = $_POST['jk'];
$alamat   	  = $_POST['alamat'];
$notlpn   	  = $_POST['notlpn'];
$masa_jabatan = $_POST['masa_jabatan'];
$level   	  = $_POST['level'];
$password     = md5($_POST['password']);

if(mysqli_query($koneksi, "update tbkepsek SET nip='$nip', nama='$nama', jk='$jk', alamat='$alamat', notlpn='$notlpn', 
						   masa_jabatan='$masa_jabatan', level='$level', password='$password' where nip='$nip'")){
	echo "<script>alert('Data berhasil diupdate');document.location='../views/lihat_kepsek.php'</script>";

}else{
	echo "<script>alert('Data gagal diupdate');document.location='../views/lihat_kepsek.php'</script>";
}

?>