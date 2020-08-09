<?php

include('header.php');
include('../../../application/config/koneksi.php');

?>

    <!-- Right Sidebar -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Input Data Bimbingan Konseling</h2>
                        </div>
                        <div class="body">
                            <form action="../aksi/tambahbk.php" id="form_validation" method="POST">

                                <!-- Input NIP-->
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nip" maxlength="18" required>
                                        <label class="form-label">NIP</label>
                                    </div>
                                </div>

                                <!-- Input Nama-->
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" maxlength="50" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>

                                <!-- Input Jenis Kelamin-->
                                <div class="form-group form-float">
                                    <div class="form-group">
                                        <input type="radio" name="jk" id="laki-laki" value="laki-laki" class="with-gap">
                                        <label for="laki-laki">Laki-laki</label>

                                        <input type="radio" name="jk" id="perempuan" value="perempuan" class="with-gap">
                                        <label for="perempuan" class="m-l-20">Perempuan</label>
                                </div>

                                <!-- Input Alamat-->
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="alamat" cols="30" rows="3" class="form-control no-resize" maxlength="150" required></textarea>
                                        <label class="form-label">Alamat</label>
                                    </div>
                                </div>

                                <!-- Input No Tlpn-->
                                <div class="form-group form-float">
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-line">
                                                <input type="number" class="form-control" name="notlpn" maxlength="12" required>
                                                <label class="form-label">No Telepon</label>
                                            </div>
                                        </div>

                                <!--Masa Jabatan-->
                                <div class="form-group form-float">
                                        <div class="col-sm-6">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="masa_jabatan" maxlength="9" required>
                                                <label class="form-label">Masa Jabatan</label>
                                            </div>
                                        </div>
                                    </div>

                                <!--Input Password-->
                                <!--<div class="form-group form-float">
                                        <div class="col-sm-6">
                                            <div class="form-line">
                                                <input type="password" class="form-control" name="password" maxlength="9" required>
                                                <label class="form-label">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                -->
                                    <!-- Input Hak Akses-->
                                    <div class="form-group form-float">
                                        <div class="col-sm-6">
                                            <select class="form-control show-tick" name="level">
                                                <option value="">-- Pilih Hak Akses --</option>
                                                <option value="bimbingan konseling">Bimbingan Konseling</option>
                                                <!--<option value="tidak aktif">Tidak Aktif</option>
                                                <option value="kepsek">Kepala Sekolah</option>
                                                <option value="wali kelas">Wali Kelas</option>
                                                <option value="wali murid">Wali Murid</option>-->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            <a href="lihat_bk.php" class="btn btn-primary waves-effect">Kembali</a>
                        </div>
                    </div>
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