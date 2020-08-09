<?php

include('header.php');
include('../../../application/config/koneksi.php');

?>

    <!-- Right Sidebar -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">

                <!--Proses menampilkan data yg akan diupdate-->
                <?php
                include('../../config/koneksi.php');
                $idsanksi = $_GET['idsanksi'];
                $sql   = "select * from tbsanksi where idsanksi='$idsanksi'";
                $query = mysqli_query($koneksi, $sql);
                while ($tbsanksi = mysqli_fetch_array($query)){
                ?>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Input Nama Sanksi</h2>
                        </div>
                        <div class="body">
                            <form action="../aksi/updatesanksi.php" id="form_validation" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="idsanksi" value="<?php echo $tbsanksi['idsanksi']; ?>" readonly="readonly">
                                        <label class="form-label">ID Nama Sanksi</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="sanksi" value="<?php echo $tbsanksi['sanksi']
                                                     ; ?>" required>
                                        <label class="form-label">Nama Sanksi</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                                <a href="lihat_sanksi.php" class="btn btn-primary waves-effect">Kembali</a>
                            </form>
                            <?php
                            }
                            ?>
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

<!-- Custom Js -->
<script src="../../../assets/js/admin.js"></script>
<script src="../../../assets/js/pages/tables/jquery-datatable.js"></script>

<!-- Demo Js -->
<script src="../../../assets/js/demo.js"></script>