<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To System Monitoring Pelanggaran Siswa | Dashboard Bimbingan Konseling</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../../assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../../assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="../../../assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../../assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../../assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<?php
    session_start();
        if($_SESSION['level'] !== 'bimbingan konseling'){
            header("location:../../../cek_session.php?pesan=belum_login");
        }

        include('../../../application/config/koneksi.php');
    ?>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
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
                         <?php echo $_SESSION['nama']; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../../../logout.php"><i class="material-icons">input</i>Sign Out</a></li>
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
                                <a href="lihat_wm.php">Data Wali Murid</a>
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
                    &copy; 2020 - <a href="javascript:void(0);">SMK LETRIS INDONESIA</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD ADMIN</h2>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">

                <div class="col-lg-12 col-md-9 col-sm-6 col-xs-12">
                     <div class="info-box bg-white">
                         <div class="font-bold text-muted" style="font-family:federant;width:1000px; height:1000px;">
                            <h3 class="text-center"><?php date_default_timezone_set('Asia/Jakarta'); echo date ('l, d-F-Y H:i:sa');?>
                                     </div></h3>
                                 </div>
                             </div>
                         </div>
                     </div>

                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH SISWA</div>
                            <div class="number count-to" data-from="0" data-to="" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">school</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH KELAS</div>
                            <div class="number count-to" data-from="0" data-to="" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH PELANGGARAN</div>
                            <div class="number count-to" data-from="0" data-to="" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>

                <!-- Tabel Pelanggaran Siswa -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
                    <div class="card">
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Jumlah Poin</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Haidir</td>
                                        <td>10</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                <!-- #END# Task Pelanggaran -->
                <!-- Browser Pie Chart -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>Kategori Pelanggaran</h2>
                        <div class="body">
                            <canvas id="pie_chart"  height="175"></canvas>
                        </div>
                    </div>
                </div>
                <!-- #END# Pie Chart -->
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../../../assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../../assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../../assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="../../../assets/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="../../../assets/plugins/raphael/raphael.min.js"></script>
    <script src="../../../assets/plugins/morrisjs/morris.js"></script>

    <!-- Flot Charts Plugin Js -->

    <script src="../../../assets/plugins/flot-charts/jquery.flot.canvas.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="../../../assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="../../../assets/plugins/chartjs/Chart.bundle.js"></script>
    <!-- Custom Js -->
    <script src="../../../assets/js/admin.js"></script>
    <script>
        new Chart(document.getElementById("pie_chart").getContext("2d"), getChartJs('pie'));
    function getChartJs(type) {
        config = {
            type: 'pie',
            data: {
                datasets: [{
                    data: [50, 75,],
                    backgroundColor: [
                        "rgb(255, 0, 0)",
                        "rgb(0, 0, 255)",
                    ],
                }],
                labels: [
                    "Berat",
                    "Ringan",
                ]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
        return config;
    }

    </script>
    <script src="../../../assets/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="../../../assets/js/demo.js"></script>

</body>

</html>
