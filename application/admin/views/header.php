<?php
    session_start();
        if($_SESSION['level'] !== 'admin'){
            header("location:../../../cek_session.php?pesan=belum_login");
        }

        include('../../../application/config/koneksi.php');
    ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To System Monitoring Pelanggaran Siswa | Form Admin</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../../assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="../../../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../../assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="../../../assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Morris Chart Css-->
    <link href="../../../assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../../assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../../assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php">SMK LETRIS INDONESIA</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../../../images/bguser.png" width="50" height="50" alt="USER"/>
                </div>

                <div class="info-container">
                    <div class="email">Selamat Datang</div>
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['nama']; ?>
                    </div>

                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="profile.php"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>

                            <li><a href="../../../logout.php" onclick="return confirm('Apakah anda ingin logout ?')"><i class="
                                   material-icons">input</i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->

            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="index.php">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <!-- #Master Data-->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Master Data</span>
                        </a>

                        <ul class="ml-menu">
                            <li>
                                <a href="lihat_kelas.php">Data Kelas</a>
                            </li>
                            <li>
                                <a href="lihat_siswa.php"> Data Siswa</a>
                            </li>
                            <li>
                                <a href="lihat_bk.php">Data Bimbingan Konseling</a>
                            </li>
                            <li>
                                <a href="lihat_kepsek.php">Data Kepala Sekolah</a>
                            </li>
                            <li>
                                <a href="lihat_wk.php">Data Wali Kelas</a>
                            </li>
                            <li>
                                <a href="lihat_wm.php">Data Wali Murid</a>
                            </li>
                            <li>
                                <a href="lihat_kategori.php">Data Kategori</a>
                            </li>
                            <li>
                                <a href="lihat_nm_pelanggaran.php">Data Nama Pelanggaran</a>
                            </li>
                            <li>
                                <a href="lihat_sanksi.php">Data Sanksi</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Monitoring</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="lihat_pelanggaran.php">Mengelola Data Pelanggaran</a>
                            </li>
                            <li>
                                <a href="lihat_sp.php">Mengelola Surat Peringatan</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 <a href="#">SMK LETRIS INDONESIA</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
    </section>
    <!-- #END# Left Sidebar -->
</body>
</html>