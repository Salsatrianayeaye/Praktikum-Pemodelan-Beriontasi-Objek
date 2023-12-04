<?php include ("config.php"); ?> 
<html> 
<head> <title>Registrasi mahasiswa</title><h2>Edit Registrasi Mahasiswa</h2> 
</head> 
<body> 
 <table> 
  <?php 
   $nim=$_GET['nim']; 
   $query="SELECT * FROM mahasiswa WHERE nim='".$nim."'"; 
   $sql=mysqli_query($koneksi,$query); 
   $data=mysqli_fetch_array($sql); 
  ?> 
  <form method="POST" action="simpanedit.php"> 
   <tr><td>NIM</td> 
    <td><input type="text" name="nim" value="<?=$data['nim']?>"></td> 
   </tr> 
   <tr><td>Nama</td><td><input type="text" 
name="nama"  value="<?=$data['nama']?>"></td> 
   </tr> 
   <tr><td>Alamat</td><td><input type="text" 
name="alamat"  value="<?=$data['alamat']?>"></td> 
   </tr> 
   <tr><td>Jenis Kelamin</td> 
    <td><input type="text" name="jns_kelamin" 
value="<?=$data['jns_kelamin']?>"></td> 
   </tr> 
   <tr> 
   <td>Jurusan</td><td><input type="text" name="jurusan" 
value="<?=$data['jurusan']?>"></td> 
   </tr>   
   <tr><td></td><td><input type="submit" name="simpan" value="Simpan"></td> 
   </tr> 
  </form> </table> 
</body> 
</html> 