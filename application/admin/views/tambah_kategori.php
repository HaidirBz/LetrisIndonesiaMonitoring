<?php

include('header.php');
include('../../../application/config/koneksi.php');

?>  

    <!-- Right Sidebar -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
               <!--Pemberian ID Otomatis-->
                <?php
                    include('../../../application/config/koneksi.php');

                    $carikategori   = mysqli_query($koneksi, "select max(idkategori) from tbkategori");
                    $datakategori   = mysqli_fetch_array($carikategori);

                    if ($datakategori) {

                    $nilaikategori  = substr($datakategori[0], 3);
                    $idkategori     = (int) $nilaikategori;

                    $idkategori     = $idkategori + 1;
                    $hasilkategori  = "KTG".str_pad($idkategori, 3, "0", STR_PAD_LEFT);

                    }else{
                        $hasilkategori = "KTG001";
                    }
                ?>

    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Input Nama Kategori</h2>
                </div>
                <div class="body">
                    <form action="../aksi/tambahkategori.php" id="form_validation" method="POST">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="idkategori" value="<?php echo $hasilkategori;?>" required>
                                <label class="form-label">ID Kategori</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="kategori" maxlength="7" required>
                                <label class="form-label">Nama Kategori</label>
                            </div>
                        </div>

                        <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                        <a href="lihat_kategori.php" class="btn btn-primary waves-effect">Kembali</a>
                    </form>
                </div>
            </div>
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

<!-- Custom Js -->
<script src="../../../assets/js/admin.js"></script>
<script src="../../../assets/js/pages/tables/jquery-datatable.js"></script>

<!-- Demo Js -->
<script src="../../../assets/js/demo.js"></script>