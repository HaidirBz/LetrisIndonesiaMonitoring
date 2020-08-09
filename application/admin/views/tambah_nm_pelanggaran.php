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

                    $carinmpelanggaran   = mysqli_query($koneksi, "select max(idnmpelanggaran) from tbnmpelanggaran");
                    $datanmpelanggaran   = mysqli_fetch_array($carinmpelanggaran);

                    if ($datanmpelanggaran) {

                    $nilainmpelanggaran  = substr($datanmpelanggaran[0], 3);
                    $idnmpelanggaran     = (int) $nilainmpelanggaran;

                    $idnmpelanggaran     = $idnmpelanggaran + 1;
                    $hasilnmpelanggaran  = "NMP".str_pad($idnmpelanggaran, 3, "0", STR_PAD_LEFT);

                    }else{
                        $hasilnmpelanggaran = "NMP001";
                    }
                ?>

    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Input Nama Pelanggaran</h2>
                </div>
                <div class="body">
                    <form action="../aksi/tambahnmpelanggaran.php" id="form_validation" method="POST">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="idnmpelanggaran" value="<?php echo 
                                             $hasilnmpelanggaran;?>" required>
                                <label class="form-label">ID Nama Pelanggaran</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nmpelanggaran" maxlength="100" required>
                                <label class="form-label">Nama Pelanggaran</label>
                            </div>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                        <a href="lihat_nm_pelanggaran.php" class="btn btn-primary waves-effect">Kembali</a>
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