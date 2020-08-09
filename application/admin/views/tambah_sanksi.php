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

                    $carisanksi   = mysqli_query($koneksi, "select max(idsanksi) from tbsanksi");
                    $datasanksi   = mysqli_fetch_array($carisanksi);

                    if ($datasanksi) {

                    $nilaisanksi  = substr($datasanksi[0], 3);
                    $idsanksi     = (int) $nilaisanksi;

                    $idsanksi     = $idsanksi + 1;
                    $hasilsanksi  = "SNK".str_pad($idsanksi, 3, "0", STR_PAD_LEFT);

                    }else{
                        $hasilsanksi = "SNK001";
                    }
                ?>
               
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Input Nama Sanksi</h2>
                        </div>
                        <div class="body">
                            <form action="../aksi/tambahsanksi.php" id="form_validation" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="idsanksi" value="<?php echo $hasilsanksi; ?>" readonly="readonly" required>
                                        <label class="form-label">ID Nama Sanksi</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="sanksi" maxlength="50" required>
                                        <label class="form-label">Nama Sanksi</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                                <a href="lihat_sanksi.php" class="btn btn-primary waves-effect">Kembali</a>
                            </form>
                        </div>
                    </div>
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


    <!-- Jquery DataTable Plugin Js -->
    <script src="../../../assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../../assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>

    <!-- Custom Js -->
    <script src="../../../assets/js/admin.js"></script>
    <script src="../../../assets/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../../../assets/js/demo.js"></script>