<?php 
include 'config.php'; 
$nim=$_POST['nim']; 
$nama=$_POST['nama']; 
$alamat=$_POST['alamat']; 
$jurusan=$_POST['idjurusan']; 
$jns_kelamin=$_POST['jns_kelamin']; 
 
$simpandata="INSERT INTO mahasiswa (nim,nama,alamat,jurusan,jns_kelamin) values 
('$nim','$nama','$alamat','$jurusan','$jns_kelamin')"; 
mysqli_query($koneksi,$simpandata); 
 
if ($simpandata) {header('Location:reportmhs.php?Sukses');} 
else {header('Location:index.html?Gagal');} 
?> 