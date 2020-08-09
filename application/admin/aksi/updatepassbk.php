<?php
    include('../../../application/config/koneksi.php');
    extract($_POST);
    session_start();

    $nip=$_SESSION['nip'];
    $password = md5($rp);

    if($np!=$rp){
        header('location:../views/update_password_bk.php?error_msg=Password tidak cocok');
    }
    else{

        if(mysqli_query($koneksi, "update tbbk SET nip='$nip', password='$password' where nip='$nip'")){
            header('location:../views/update_password_bk.php?error_msg=Password berhasil diupdate');
        } else {
            echo "update gagal";
        }

    }
    
?>
