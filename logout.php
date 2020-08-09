<?php
//Mengaktifkan session
session_start();
//Menghapus semua session
session_destroy();
//Mengalihkan ke halaman login
header("location:index.php?pesan=logout");

?>