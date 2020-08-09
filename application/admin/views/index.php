<?php

include('header.php');
include('../../../application/config/koneksi.php');

?>    

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
            <!--Jumlah Siswa-->
            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">person</i>
                    </div>
                    <div class="content">
                        <div class="text">JUMLAH SISWA</div>
                        
                        <div class="number count-to" data-from="0" data-to="<?php $tbmurid = mysqli_query($koneksi,"select * from 
                                    tbmurid"); echo mysqli_num_rows($tbmurid); ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            <!--Jumlah Kelas-->
            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">school</i>
                    </div>
                    <div class="content">
                        <div class="text">JUMLAH KELAS</div>
                        <div class="number count-to" data-from="0" data-to="<?php $tbkelas = mysqli_query($koneksi,"select * from 
                                    tbkelas"); echo mysqli_num_rows($tbkelas); ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <!--Jumlah Pelanggaran-->
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH PELANGGARAN</div>
                            <div class="number count-to" data-from="0"  data-to="<?php $pelanggaran = mysqli_query($koneksi,"
                                        select * from pelanggaran"); echo mysqli_num_rows($pelanggaran); ?>" data-speed="15" data-fresh-interval="20"></div>
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
                                        <th>Tanggal</th>
                                        <th>keterangan</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        include('../../config/koneksi.php');
                                        $no    =1;
                                        $sql   ="select * from pelanggaran";
                                        $query =mysqli_query($koneksi,$sql);
                                        while ($pelanggaran = mysqli_fetch_array($query)){
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $no++;?></th>
                                        <td><?php echo $pelanggaran['nama'];?></td>
                                        <td><?php echo $pelanggaran['poin'];?></td>
                                        <td><?php echo $pelanggaran['tanggal'];?></td>
                                        <td><?php echo $pelanggaran['saran'];?></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
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

<!--Grafik Pie Chart-->
<script>
    new Chart(document.getElementById("pie_chart").getContext("2d"), getChartJs('pie'));
    function getChartJs(type) {
        config = {
            type: 'pie',
            data: {
                datasets: [{
                    data: [
                            //Grafik katerogi berat
                            <?php
                                $kategori = mysqli_query($koneksi, "select * from pelanggaran where kategori='berat'");
                                    echo mysqli_num_rows($kategori);
                            ?>, 
                            //Grafik katerogi ringan
                            <?php
                                $kategori = mysqli_query($koneksi, "select * from pelanggaran where kategori='ringan'");
                                    echo mysqli_num_rows($kategori);
                            ?>,
                          ],

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