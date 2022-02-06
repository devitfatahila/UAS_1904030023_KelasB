<?php
date_default_timezone_set('Asia/Jakarta');
include "koneksi.php";
$idbk = $_GET['id'];
$ambil_data = mysqli_query($koneksi, "SELECT * FROM tb_buku WHERE id='$idbk'");
$data=mysqli_fetch_array($ambil_data);



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
                        <a  href="inputbuku.php"><i class="fas fa-edit fa-3x"></i>Input Buku</a>
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
                    <h2><i class="fas fa-book-reader"></i> Edit Data Buku</h2>    
                        <h5>Jangan membaca sampai koma, tetapi bacalah sampai titik. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
                    <!-- Form Elements -->
                   
                                
                <div class="container col-md-12">
                <div class="card">
                <div class="card-header bg-primary text-white">
                    Edit Data Buku
                </div>
                <div class="card-body">
                <form action="" method="POST" class="form-item">

                    <div class="form-group">
                    <label for="nama_buku">Nama Buku</label>
                    <input type="text" name="nama_buku" value="<?php echo $data['nama_buku']?>" class="form-control col-md-9" placeholder="Massukan nama" autofocus required autocomplete="off">
                    </div>

                    <div class="form-group">
                    <label for="nama_pengarang">Nama Pengarang</label>
                    <input type="text" name="nama_pengarang" value="<?php echo $data['nama_pengarang']?>"class="form-control col-md-9" placeholder="Massukan Nama Pengarang" required autocomplete="off">
                    </div>

                    <div class="form-group">
                    <label for="penerbit">Penerbit</label>
                    <input type="text" name="penerbit" value="<?php echo $data['penerbit']?>" class="form-control col-md-9" placeholder="Massukan Penerbit" required autocomplete="off"> 
                    </div>

                    <div class="form-group">
                    <label for="tahun_terbit">Tahun Terbit</label>
                    <input type="number" name="tahun_terbit" value="<?php echo $data['tahun_terbit']?>" class="form-control col-md-9" placeholder="Massukan Tahun Terbit" required autocomplete="off">
                    </div>

                    <div class="form-group">
                    <label for="jumlah_halaman">Jumlah Halaman</label>
                    <input type="text" name="jumlah_halaman" value="<?php echo $data['jumlah_halaman']?>" class="form-control col-md-9" placeholder="Massukan Jumlah Halaman" required autocomplete="off">
                    </div>

                    <div class="form-group">
                    <label for="nama_perpustakaan">Nama Perpustakaan</label>
                    <input type="text" name="nama_perpustakaan" value="<?php echo $data['nama_perpustakaan']?>" class="form-control col-md-9" placeholder="Massukan Nama Perpustakaan" required autocomplete="off">
                    </div>

                    <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" value="<?php echo $data['alamat']?>" class="form-control col-md-9" placeholder="Massukan Nama Perpustakaan" required autocomplete="off">
                    </div>

                    <div class="form-group">
                    <label for="foto_buku">Foto Buku</label>
                    <input type="text" name="foto_buku" value="<?php echo $data['foto_buku']?>" class="form-control col-md-9" placeholder="Massukan Nama Perpustakaan" required autocomplete="off">
                    </div>


                    <br></br>
                    <button type="submit"  onclick="return confirm('Apakah anda yakin akan mengedit buku ini ?') "class="btn btn-primary" name="simpan" > <i class="fas fa-save"></i> Simpan </button> 
                    <a href="buku.php" class="btn btn-danger" role="button"> <i class="fas fa-arrow-left"></i> Kembali</a>
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

    if(isset($_POST['simpan']))
    {
        $nama_buku  =$_POST['nama_buku'];
        $nama_pengarang  =$_POST['nama_pengarang'];
        $penerbit  =$_POST['penerbit'];
        $tahun_terbit  =$_POST['tahun_terbit'];
        $jumlah_halaman =$_POST['jumlah_halaman'];
        $nama_perpustakaan =$_POST['nama_perpustakaan'];
        $alamat =$_POST['alamat'];
        $foto_buku =$_POST['foto_buku'];

       mysqli_query($koneksi, "UPDATE tb_buku SET 
       nama_buku='$nama_buku', nama_pengarang='$nama_pengarang', penerbit='$penerbit', tahun_terbit='$tahun_terbit', jumlah_halaman='$jumlah_halaman', nama_perpustakaan='$nama_perpustakaan', alamat='$alamat', foto_buku='$foto_buku'
       WHERE id='$idbk'") or die(mysqli_error($koneksi));

        echo "<div align='center'><h5> Silahkan Tunggu Data Sedang Disimpan....</h5></div>";
        

        
    }
?>

