<?php
include "koneksi.php";

$id= $_GET['id'];

$query="DELETE FROM tb_anggota WHERE id=$id";

$hasil=mysqli_query($koneksi, $query);

if($hasil){
    header('Location:anggota.php');
} else{
    echo "Hapus Data Gagal";
}

?>