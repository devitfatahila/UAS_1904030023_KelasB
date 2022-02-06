<?php
date_default_timezone_set('Asia/Jakarta');
include "koneksi.php";
$query=mysqli_query($koneksi,"SELECT * FROM tb_anggota");

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
                    <h2><i class="fas fa-book-reader"></i> Input Anggota</h2>     
                        <h5>Buku adalah gerbang dunia dan membaca adalah kuncinya. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
                    <!-- Form Elements -->
                   
                                
                <div class="container col-md-12">
                <div class="card">
                <div class="card-header bg-primary text-white">
                    input Anggota
                </div>
                <div class="card-body">
                <form action="" method="POST" class="form-item">

                    <div class="form-group">
                    <label for="nim">Nim</label>
                    <input type="text" name="nim" class="form-control col-md-9" placeholder="Massukan nim" autofocus required autocomplete="off">
                    </div>

                    <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control col-md-9" placeholder="Massukan Nama " required autocomplete="off">
                    </div>

                    <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control col-md-9" placeholder="Massukan Tempat Lahir" required autocomplete="off">
                    </div>

                    <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control col-md-9" placeholder="Massukan Tahun Lahir" required autocomplete="off">
                    </div>

                    <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" class="form-control col-md-9" placeholder="Massukan Jenis Kelamin" required autocomplete="off">
                    </div>

                    <div class="form-group">
                    <label for="prodi">Prodi</label>
                    <input type="text" name="prodi" class="form-control col-md-9" placeholder="Massukan prodi" required autocomplete="off">
                    </div>
                    <br></br>
                    <button type="submit" onclick="return confirm('Apakah anda yakin akan menyimpan buku ini ?') "class="btn btn-primary" name="simpan"> <i class="fas fa-save"></i> Simpan </button>
                    <a href="anggota.php" class="btn btn-danger" role="button"> <i class="fas fa-arrow-left"></i> Kembali</a>
                 

            </form>
            </div>
            </div>


                                        
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

<?php 
    include "koneksi.php";
    if(isset($_POST['simpan']))
    {
        $nim  =$_POST['nim'];
        $nama =$_POST['nama'];
        $tempat_lahir  =$_POST['tempat_lahir'];
        $tanggal_lahir  =$_POST['tanggal_lahir'];
        $jenis_kelamin =$_POST['jenis_kelamin'];
        $prodi =$_POST['prodi'];

       mysqli_query($koneksi, "INSERT INTO tb_anggota VALUES('',
            '$nim','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$prodi'
        )") or die(mysqli_error($koneksi));

        echo "<div align='center'><h5> Silahkan Tunggu Data Sedang Disimpan....</h5></div>";
        
    }
?>

