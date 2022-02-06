<?php
include "koneksi.php";

$id= $_GET['id'];

$query="DELETE FROM tb_buku WHERE id=$id";

$hasil=mysqli_query($koneksi, $query);

if($hasil){
    header('Location:buku.php');
} else{
    echo "Hapus Data Gagal";
}

?>