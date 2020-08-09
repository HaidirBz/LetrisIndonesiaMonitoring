<?php

session_start();

	if($_SESSION['level']=='admin'){
		header("location:application/admin/views/index.php");

	} elseif($_SESSION['level']=='bimbingan konseling'){
		header("location:application/bimbingan_konseling/views/index.php");

	} elseif($_SESSION['level']=='kepala sekolah'){
		header("location:application/kepsek/views/index.php");

	} elseif($_SESSION['level']=='wali kelas'){
		header("location:application/wali_kelas/views/index.php");

	} elseif($_SESSION['level']=='wali murid'){
		header("location:application/wali_murid/views/index.php");
		
	} else {
        header("location:index.php?pesan=belum_login");
    }
?>