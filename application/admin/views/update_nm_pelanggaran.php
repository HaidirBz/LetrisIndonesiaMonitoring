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
                $idnmpelanggaran = $_GET['idnmpelanggaran'];
                $sql   = "select * from tbnmpelanggaran where idnmpelanggaran='$idnmpelanggaran'";
                $query = mysqli_query($koneksi, $sql);
                while ($tbnmpelanggaran = mysqli_fetch_array($query)){
                ?>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Input Nama Pelanggaran</h2>
                        </div>
                        <div class="body">
                            <form action="../aksi/updatenmpelanggaran.php" id="form_validation" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="idnmpelanggaran" value="<?php echo 
                                                    $tbnmpelanggaran['idnmpelanggaran']; ?>" required>
                                        <label class="form-label">ID Kategori</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nmpelanggaran" maxlength="100" value="<?php 
                                               echo $tbnmpelanggaran['nmpelanggaran'];?>" required>
                                        <label class="form-label">Nama Kategori</label>
                                    </div>
                                </div>

                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                                <a href="lihat_nm_pelanggaran.php" class="btn btn-primary waves-effect">Kembali</a>
                            </form>
                            <?php
                            }
                            ?>
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