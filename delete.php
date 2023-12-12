<?php
include 'config.php';
$nim=$_GET['nim'];
$simpandata=("delete from mahasiswa where nim='$nim'"); 
mysqli_query($koneksi,$simpandata);
if ($simpandata) {header('Location:reportmhs.php?Sukses');}
else {header('Location:reportmhs.php?Gagal');}
?>