<?php

include('header.php');
include('../../../application/config/koneksi.php');

?>

<?php
    include('../../config/koneksi.php');
    $sql   ="select * from tbadmin";
    $query =mysqli_query($koneksi,$sql);
    while($tbadmin = mysqli_fetch_array($query)){
?>

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-3">
                <div class="card profile-card">
                    <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">
                                <img src="../../../images/bguser.png" width="75" height="75" alt="USER"/>
                            </div>

                            <div class="content-area">
                                <h3><?php echo $tbadmin['nama'];?></h3>
                                <p>Website Monitoring Pelanggaran Siswa Smk Letris Indonesia</p>
                                <p><?php echo $tbadmin['level'];?></p>
                            </div>

                        </div>
                        <div class="profile-footer">
                            
                        </div>
                    </div>

                    <div class="card card-about-me">
                        <div class="header">
                            <h2>ABOUT ME</h2>
                        </div>

                        <div class="body">
                            <ul>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">library_books</i>
                                        NIP
                                    </div>
                                    <div class="content">
                                        <?php echo $_SESSION['nip'];?>
                                    </div>
                                </li>

                                <li>
                                    <div class="title">
                                        <i class="material-icons">location_on</i>
                                        Location
                                    </div>
                                    <div class="content">
                                        <?php echo $tbadmin['alamat'];?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-9">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">

                                    <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Profile Settings</a></li>
                                </ul><br>

                                    <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                                        <form action="../aksi/updateprofile.php" method="POST" class="form-horizontal">
                                            
                                            <input type="hidden" class="form-control" name="nip" placeholder="Masukan Nip" value="<?php echo $tbadmin['nip'];?>" required>
                                                   
                                            <div class="form-group">
                                                <label for="NameSurname" class="col-sm-2 control-label">Nama</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" value="<?php echo $tbadmin['nama'];?>" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="NameSurname" class="col-sm-2 control-label">Jenis Kelamin</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="radio" name="jk" id="laki-laki" value="laki-laki"<?=($tbadmin['jk']=="laki-laki")?'checked':''?> class="with-gap">
                                                        <label for="laki-laki">Laki-laki</label>

                                                        <input type="radio" name="jk" id="perempuan" value="perempuan"<?=($tbadmin['jk']=="perempuan")?'checked':''?> class="with-gap">
                                                        <label for="perempuan" class="m-l-20">Perempuan</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <textarea class="form-control" name="alamat" rows="3" placeholder="Masukan Alamat"><?php echo $tbadmin['alamat'];?></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Password</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" name="password" value="<?php echo $tbadmin['password'];?>" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Hak Akses</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick" name="level">
                                                            <option value="admin"<?php if ($tbadmin['level']=='admin'){ echo 'selected' ;}?>>Admin
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <input type="checkbox" id="terms_condition_check" class="chk-col-red filled-in" />
                                                    <label for="terms_condition_check">I agree to the <a href="#">terms and conditions</a></label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">SIMPAN</button>
                                                </div>
                                            </div>
                                        </form>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
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

<!-- Custom Js -->
<script src="../../../assets/js/admin.js"></script>
<script src="../../../assets/js/pages/examples/profile.js"></script>

<!-- Demo Js -->
<script src="../../../assets/js/demo.js"></script>