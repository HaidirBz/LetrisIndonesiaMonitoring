<?php

include('../../config/koneksi.php');

$idsanksi = $_POST['idsanksi'];
$sanksi   = $_POST['sanksi'];

if(mysqli_query($koneksi, "update tbsanksi SET idsanksi='$idsanksi', sanksi='$sanksi' where idsanksi='$idsanksi'")){
	echo "<script>alert('Data berhasil diupdate');document.location='../views/lihat_sanksi.php'</script>";

}else{
	echo "<script>alert('Data gagal diupdate');document.location='../views/lihat_sanksi.php'</script>";
}

?>