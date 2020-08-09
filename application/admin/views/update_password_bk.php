<?php

include('header.php');
include('../../../application/config/koneksi.php');

?>

<!-- Right Sidebar -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Update Data Bimbingan Konseling</h2>
                        </div>

                        <?php
                            include('../../config/koneksi.php');
                            $nip   = $_GET['nip'];
                            $sql   = "select * from tbbk where nip='$nip'";
                            $query = mysqli_query($koneksi, $sql);
                            while ($tbbk = mysqli_fetch_array($query)){
                        ?>

                        <div class="body">
                            <form action="../aksi/updatepassbk.php" method="POST" enctype="multipart/form-data">

                            <?php if (!empty($_GET['error_msg'])): ?>
                                <div class="alert alert-danger">
                                    <?= $_GET['error_msg']; ?>
                                </div>
                            <?php endif ?>
                            
                                <h2>Password Settings</h2><br>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="profile_settings">
                                        <div class="panel-heading">

                            <input value="<?php echo $tbbk['nip'];?>" type="hidden" class="form-control" name="nip" maxlength="100" required>
                            
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input id="inputEmail" type="password" class="form-control" name="np" maxlength="100" required>
                                    <label for="inputEmail" class="form-label">New Password</label>
                                </div>
                            </div>
                            
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input id="inputPassword" type="password" class="form-control" name="rp" maxlength="100" required>
                                    <label for="inputPassword" class="form-label">Ret Password</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary">Simpan</button>
                                <a href="update_bk.php?nip=<?php echo $tbbk['nip'];?>" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
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

<!-- Custom Js -->
<script src="../../../assets/js/admin.js"></script>
<script src="../../../assets/js/pages/tables/jquery-datatable.js"></script>

<!-- Demo Js -->
<script src="../../../assets/js/demo.js"></script>
