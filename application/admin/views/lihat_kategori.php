<?php

include('header.php');
include('../../../application/config/koneksi.php');

?>    

    <!-- Right Sidebar -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
               
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Data Kategori</h2>
                        </div>
                        <div class="body">
                           <div class="table-responsive">
                                <table id="example" class="table table-bordered table-striped table-hover dataTable">
                                <!--<a href="tambah_sanksi.php" class="btn btn-primary waves-effect"><i class="material-icons">
                                             add_box</i> Tambah Data</a><br><br>-->

                                    <thead>    
                                        <tr>
                                            <th>No</th>
                                            <th>ID Kategori</th>
                                            <th>Nama Kategori</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                            include('../../config/koneksi.php');
                                            $no    =1;
                                            $sql   ="select * from tbkategori";
                                            $query =mysqli_query($koneksi,$sql);
                                            while($tbkategori = mysqli_fetch_array($query)){
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $tbkategori['idkategori'];?></td>
                                            <td><?php echo $tbkategori['kategori'];?></td>

                                            <td><a href="../views/update_kategori.php?idkategori=<?php echo $tbkategori['idkategori'];?>" class="btn btn-success waves-effect">
                                                <i class="material-icons">update</i></a>
                                                
                                                <a href="../aksi/hapuskategori.php?idkategori=<?php echo $tbkategori['idkategori']
                                                         ;?>" onclick="return confirm('Anda yakin ingin menghapus ?')" class="btn btn-danger waves-effect"><i class="material-icons">delete_sweep</i></a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <a href="tambah_kategori.php" class="btn btn-primary waves-effect"><i class="material-icons">add_box</i> Tambah Data</a>
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

<!--Memanggil id dataTables-->
<script type="text/javascript">
    $(document).ready(function(){
    $('#example').dataTable();
    });
</script>