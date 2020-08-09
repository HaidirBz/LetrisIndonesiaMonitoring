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
                    $nip = $_GET['nip'];
                    $sql   = "select * from tbbk where nip='$nip'";
                    $query = mysqli_query($koneksi, $sql);
                    while ($tbbk = mysqli_fetch_array($query)){
                ?>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Update Data Bimbingan Konseling</h2>
                        </div>
                        <div class="body">
                            <form action="../aksi/updatebk.php" id="form_validation" method="POST">
                                <h2>Profile Settings</h2><br>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="profile_settings">
                                        <div class="panel-heading">
                                
                                <!-- Input NIP-->
                                <input type="hidden" name="nip" value="<?php echo $tbbk['nip'];?>">
                                   
                                <!-- Input Nama-->
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" maxlength="50" value="<?php echo $tbbk['nama'];?>" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>

                                <!-- Input Jenis Kelamin-->
                                <div class="form-group form-float">
                                    <div class="form-group">
                                        <input type="radio" name="jk" id="laki-laki" value="laki-laki"<?=($tbbk['jk']=="laki-laki")
                                                     ?'checked':''?> class="with-gap">
                                        <label for="laki-laki">Laki-laki</label>

                                        <input type="radio" name="jk" id="perempuan" value="perempuan"<?=($tbbk['jk']=="perempuan")
                                                     ?'checked':''?> class="with-gap">
                                        <label for="perempuan" class="m-l-20">Perempuan</label>
                                    </div>
                                </div>

                                <!-- Input Alamat-->
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="alamat" cols="30" rows="3" class="form-control no-resize" maxlength="150" required><?php echo $tbbk['alamat'];?></textarea>
                                        <label class="form-label">Alamat</label>
                                    </div>
                                </div>

                                <!-- Input No Tlpn-->
                                <div class="form-group form-float">
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-line">
                                                <input type="number" class="form-control" name="notlpn" maxlength="12" value="<?php   echo $tbbk['notlpn'];?>" required>
                                                <label class="form-label">No Telepon</label>
                                            </div>
                                        </div>

                                <!--Masa Jabatan-->
                                <div class="form-group form-float">
                                        <div class="col-sm-6">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="masa_jabatan" maxlength="9" 
                                                       value="<?php echo $tbbk['masa_jabatan'];?>" required>
                                                <label class="form-label">Masa Jabatan</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Input Hak Akses-->
                                    <div class="form-group form-float">
                                        <div class="col-sm-6">
                                            <select class="form-control show-tick" name="level">
                                                <option value="">-- Pilih Hak Akses --</option>
                                                <option value="bimbingan konseling"
                                                    <?php if ($tbbk['level']=='bimbingan konseling'){ echo 'selected' ;}?>>Bimbingan Konseling
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                                <a href="update_password_bk.php?nip=<?php echo $tbbk['nip'];?>" class="btn btn-primary waves-effect">Update Password</a>
                                <a href="lihat_bk.php" class="btn btn-primary waves-effect">Kembali</a>
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