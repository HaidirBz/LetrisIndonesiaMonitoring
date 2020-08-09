<?php

include('../../config/koneksi.php');

$idsanksi = $_POST['idsanksi'];
$sanksi   = $_POST['sanksi'];

$sql = "insert into tbsanksi values('$idsanksi','$sanksi')";

if(mysqli_query($koneksi, $sql)){
	echo "<script>alert('Data berhasil ditambah');document.location='../views/lihat_sanksi.php'</script>";
	
}else{
	echo "<script>alert('Data gagal ditambah');document.location='../views/lihat_sanksi.php'</script>";

}

?>