<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Silakan Login - Form Login</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet"/>

    <!-- Waves Effect Css -->
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet"/>

    <!-- Animation Css -->
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet"/>

    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet"/>
</head>

<?php

 if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
        echo "<div class='alert alert-danger alert-dismissible' role='alert'> <button type='button' class='close'  
             data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span></button> 
             Login gagal ! NIP atau Password anda salah ! </div>";
    } elseif ($_GET['pesan']=="logout"){
        echo "<div class='alert alert-success alert-dismissible' role='alert'> <button type='button' class='close'  
             data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span></button> 
             Anda berhasil logout </div>";
    } elseif ($_GET['pesan']=="belum_login"){
        echo "<div class='alert alert-warning alert-dismissible' role='alert'> <button type='button' class='close'  
             data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span></button> 
             Anda belum bisa mengakses halaman ini ! Silakan login </div>";
    }
}

?>

<body class="login-page">
    <div class="login-box">
        <div class="card">
            <div class="body">
                <form action="login.php" method="POST">
                    <div class="msg"><img src="images/logo-smk-letris.png" alt="SMK LETRIS INDONESIA"/></div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="nip" name="nis" placeholder="Silakan Masukan ID Anda" 
                                   required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-red waves-effect" type="submit">LOGIN</button>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-xs-8">
                    <div class="form-grup">
                        <select name="level" class="form-control">
                                <option value="">- Pilih Hak Akses -</option>
                                <option value="admin">Admin</option>
                                <option value="bimbingan konseling">Bimbingan Konseling</option>
                                <option value="kepala sekolah">Kepala Sekolah</option>
                                <option value="wali kelas">Wali Kelas</option>
                                <option value="wali murid">Wali Murid</option>  
                        </select>
                    </div>
                    </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="#">Forgot Password ?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="assets/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/examples/sign-in.js"></script>
</body>
</html>