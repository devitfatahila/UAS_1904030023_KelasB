<?php
date_default_timezone_set('Asia/Jakarta');
include "koneksi.php";
$query=mysqli_query($koneksi,"SELECT * FROM tb_anggota");

if (isset($_GET['carigt'])) {
    $query = mysqli_query($koneksi,"SELECT * FROM tb_anggota WHERE nama LIKE '%".$_GET['carigt']."%'");
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpustakaanku</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
     <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataAnggotas/dataAnggotas.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Perpustakaanku</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  <?php echo date('l, d-m-y');?> &nbsp; </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/book.jpg" class="user-image img-responsive"/>
					</li>
				
                  
				
                    <li>
                        <a class="active-menu"  href="index.php"><i class="fas fa-home fa-3x"></i> Menu Utama</a>
                    </li>
                
                    <li>
                        <a  href="buku.php"><i class="fas fa-book fa-3x"></i>Buku Perpustakaan</a>
                    </li>
                            
                    <li>
                        <a  href="inputbuku.php"><i class="fas fa-edit fa-3x"></i></i>Input Buku</a>
                    </li>

                    <li>
                        <a  href="anggota.php"><i class="fas fa-user-plus fa-3x"></i>Anggota</a>
                    </li>

                    <li>
                        <a  href="inputanggota.php"><i class="fas fa-user-edit fa-3x"></i>Input Anggota</a>
                    </li>
                   
           </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <form method="get" action="">
                    <label for="carigt">Cari Anggota</label>
                     <input type="text" name="carigt" autocomplete="off">
                    </form>
                    <h2><i class="fas fa-book-reader"></i> Anggota </h2>    
                        <h5>Membaca memperkaya ilmuku dan memperluas imajinasiku. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Anggota
                             </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr> 
                                            <th>No</th>
                                            <th>Nim</th>
                                            <th>Nama</th>
                                            <th>Tempat_Lahir</th>
                                            <th>Tanggal_Lahir</th>
                                            <th>Jenis_Kelamin</th>
                                            <th>Prodi</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                        <?php $no = 1; ?>
                                        <?php
                                        while ($ambil_anggota=mysqli_fetch_array($query)) {
                                        ?>

                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $ambil_anggota['nim']; ?></td>
                                        <td><?php echo $ambil_anggota['nama']; ?></td>
                                        <td><?php echo $ambil_anggota['tempat_lahir']; ?></td>
                                        <td><?php echo $ambil_anggota['tanggal_lahir']; ?></td>
                                        <td><?php echo $ambil_anggota['jenis_kelamin']; ?></td>
                                        <td><?php echo $ambil_anggota['prodi']; ?></td>
                                        
                                        <td> <a href="editgt.php?id=<?= $ambil_anggota['id']; ?>" class="btn btn-info" role="button"><i class="far fa-edit"></i> edit</a></td>
                                       <td><a href="hapusgt.php?id=<?php echo $ambil_anggota['id'] ?>" 
                                       onclick="return confirm('Apakah anda yakin akan menghapus anggota ini ?') "class="btn btn-danger" role="button"> <i class="far fa-trash-alt"></i> hapus</a></td>
                                       
                                        </tr>
                                        <?php
                                            }
                                        ?>

                                      
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataAnggotas-example').dataAnggota();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
