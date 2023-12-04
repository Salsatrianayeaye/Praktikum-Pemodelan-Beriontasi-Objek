<?php include ("config.php"); ?> 
<html lang="en"> 
<head><title>Data Registrasi</title></head> <h3>Data Registrasi Mahasiswa</h3> 
<nav><a href="registrasi.php">+ Tambah Baru</a></nav><br> 
<body> 
<table border="1"> 
<thead> 
<tr> 
<th>NIM</th>  
<th>Nama</TH>  
<th>Alamat</th>  
<th>Kode Jurusan</TH> 
<th>Nama Jurusan</TH> 
<th>Jenis Kelamin</th> 
</tr> 
</thead> 
<Tbody> 
    <?php 
        $sql="select a.nim,a.nama,a.alamat,a.jurusan,a.jns_kelamin,b.nama as 
Nama_jurusan from Mahasiswa a inner join jurusan b on a.jurusan=b.kd_jur"; 
        $querymhs=mysqli_query($koneksi,$sql); 
        while ($registrasi=mysqli_fetch_array($querymhs)) { 
            ?> 
            <tr> 
            <td><?=$registrasi['nim']?></td> 
            <td><?=$registrasi['nama']?></td> 
            <td><?=$registrasi['alamat']?></td> 
            <td><?=$registrasi['jurusan']?></td> 
            <td><?=$registrasi['Nama_jurusan']?></td> 
            <td><?=$registrasi['jns_kelamin']?></td> 
            <td><a href="editmhs.php?nim=<?=$registrasi['nim']?>">Edit</a></td> 
           </tr> 
           <?php } 
   ?> 
</Tbody> </table> <p>Total Registrasi Mahasiswa : <?php echo 
mysqli_num_rows($querymhs) ?></P> 
</body> </html> 