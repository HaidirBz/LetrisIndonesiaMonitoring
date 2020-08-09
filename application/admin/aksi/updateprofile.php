<?php

include('../../config/koneksi.php');

$nip 		  = $_POST['nip'];
$nama   	  = $_POST['nama'];
$jk   		  = $_POST['jk'];
$alamat   	  = $_POST['alamat'];
$level   	  = $_POST['level'];
$password     = md5($_POST['password']);

if(mysqli_query($koneksi, "update tbadmin SET nip='$nip', nama='$nama', jk='$jk', alamat='$alamat',level='$level', 
						   password='$password' where nip='$nip'")){
	echo "<script>alert('Data berhasil diupdate');document.location='../views/profile.php'</script>";

}else{
	echo "<script>alert('Data gagal diupdate');document.location='../views/profile.php'</script>";
}

?>