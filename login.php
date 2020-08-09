<?php
//mulai session
session_start();
//Koneksi ke database
include ('application/config/koneksi.php');


//Login dengan admin
if (isset($_POST['level'])=='admin'){

$nip      = mysqli_real_escape_string($koneksi, $_POST['nip']);
$password = mysqli_real_escape_string($koneksi, md5($_POST['password']));
$level    = mysqli_real_escape_string($koneksi, $_POST['level']);

$login = mysqli_query($koneksi, "select * from tbadmin where nip='$nip' and password='$password'");
$cek   = mysqli_num_rows($login);

if ($cek > 0){
	$data = mysqli_fetch_assoc($login);

	if ($data['level']=="admin"){

		$_SESSION['nip']=$nip;
		$_SESSION['nama']=$data['nama'];
		$_SESSION['level']="admin";

		header("location:cek_session.php");
	}

//login dengan bk
} elseif ($_POST['level']=='bimbingan konseling'){

	$nip      = mysqli_real_escape_string($koneksi, $_POST['nip']);
	$password = mysqli_real_escape_string($koneksi, md5($_POST['password']));

	$login = mysqli_query($koneksi, "select * from tbbk where nip='$nip' and password='$password'");
	$cek   = mysqli_num_rows($login);

	if ($cek > 0){
		$data = mysqli_fetch_assoc($login);

		if ($data['level']=="bimbingan konseling"){
			    $_SESSION['nip']=$nip;
			    $_SESSION['nama']=$data['nama'];
			    $_SESSION['level']="bimbingan konseling";

			    header("location:cek_session.php");
			}

//login dengan kepala sekolah
} elseif ($_POST['level']=='kepala sekolah'){
	$nip      = mysqli_real_escape_string($koneksi, $_POST['nip']);
	$password = mysqli_real_escape_string($koneksi, md5($_POST['password']));

	$login = mysqli_query($koneksi, "select * from tbkepsek where nip=$'nip' and password='$password'");
	$cek   = mysqli_num_rows($login);

	if ($cek > 0){
		$data = mysqli_fetch_assoc($login);

		if ($data['level']=="kepala sekolah"){
			    $_SESSION['nip']=$nip;
			    $_SESSION['level']="kepala sekolah";

			    header("location:cek_session.php");
			}

//login dengan wali_kelas			
} elseif ($_POST['level']=='wali kelas'){
	$nip      = mysqli_real_escape_string($koneksi, $_POST['nip']);
	$password = mysqli_real_escape_string($koneksi, md5($_POST['password']));

	$login = mysqli_query($koneksi, "select * from tbwalikls where nip=$'nip' and password='$password'");
	$cek   = mysqli_num_rows($login);

	if ($cek > 0){
		$data = mysqli_fetch_assoc($login);

		if ($data['level']=="wali kelas"){
			    $_SESSION['nip']=$nip;
			    $_SESSION['level']="wali kelas";

			    header("location:cek_session.php");
			}

//login dengan wali murid
} elseif ($_POST['level']=='wali murid'){
	$nip      = mysqli_real_escape_string($koneksi, $_POST['nip']);
	$password = mysqli_real_escape_string($koneksi, md5($_POST['password']));

	$login = mysqli_query($koneksi, "select * from tbmurid where nis=$'nis' and password='$password'");
	$cek   = mysqli_num_rows($login);

	if ($cek > 0){
		$data = mysqli_fetch_assoc($login);

		if ($data['level']=="wali murid"){
			    $_SESSION['nis']=$nis;
			    $_SESSION['level']="wali murid";

			    header("location:cek_session.php");
			}
		}
	}
}
}
} else {
	header("location:index.php?pesan=gagal");
}
} else {
	header("location:index.php?pesan=gagal");
}

?>