<?php

include('../../config/koneksi.php');

$nip 		  = $_POST['nip'];
$nama   	  = $_POST['nama'];
$jk			  = $_POST['jk'];
$alamat		  = $_POST['alamat'];
$notlpn		  = $_POST['notlpn'];
$masa_jabatan = $_POST['masa_jabatan'];
$level 		  = $_POST['level'];
$password 	  = md5($_POST['nama'].'12345');


$sql = "insert into tbkepsek values('$nip','$nama','$jk','$alamat','$notlpn','$masa_jabatan','$level','$password')";

//Pengembalian data jika data berhasil ditambah
if(mysqli_query($koneksi, $sql)){
	echo "<script>alert('Data berhasil ditambah');document.location='../views/lihat_kepsek.php'</script>";
//Pengembalian data jika data gagal ditambah	
}else{
	echo "<script>alert('Data gagal ditambah');document.location='../views/lihat_kepsek.php'</script>";

}

?>