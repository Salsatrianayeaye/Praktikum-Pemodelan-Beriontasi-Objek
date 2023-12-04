<?php 
include ("config.php"); 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <title>Registrasi Mahasiswa</title> 
  </head> 
  <h2>Form Pendaftaran Mahasiswa</h2> 
  <body> 
    <form method="post" action="simpan.php"> 
      <table> 
        <tr> 
          <td>NIM</td> 
          <td>:</td> 
          <td><input type="text" name="nim" placeholder="Input NIM" /></td> 
        </tr> 
        <tr> 
          <td>Nama</td> 
          <td>:</td> 
          <td><input type="text" name="nama" placeholder="Input NIM" /></td> 
        </tr> 
        <tr> 
          <td>Alamat</td> 
          <td>:</td> 
          <td><input type="text" name="alamat" placeholder="Input NIM" /></td> 
        </tr> 
        <tr> 
            <td>Kode Jurusan</td> 
            <td>:</td> 
            <td> 
              <select id="idjurusan" name="idjurusan" 
onchange="changeValueJurusan(this.value)"> 
              <option disabled="" selected="">Pilih</option> 
              <?php  
                $sql="SELECT * FROM jurusan"; 
                $query=mysqli_query($koneksi,$sql); 
                $jsArrayJurusan = "var prdJurusan = new Array();\n"; 
                while ($data=mysqli_fetch_array($query)) {                 
                  echo '<option 
value="'.$data['kd_jur'].'">'.$data['kd_jur'].'</option> '; 
                  $jsArrayJurusan .= "prdJurusan['" . $data['kd_jur'] . "'] = 
{jurusan:'" . addslashes($data['nama']) . "'};\n"; 
                 
                } 
                ?> 
            </td> 
            </tr> 
            <tr> 
          <td>Jurusan</td> 
          <td>:</td> 
          <td><input type="text" name="jurusan" id="jurusan"></td> 
          </tr> 
 
            <tr> 
          <td>Jenis Kelamin</td> 
          <td>:</td> 
          <td><input type="radio" name="jns_kelamin" value="L" />Laki Laki 
<input type="radio" name="jns_kelamin" value="P" />Perempuan</td> 
        </tr> 
        <tr> 
            <td colspan="2"><button type="submit" name="submit" 
>Registrasi</td> 
        </tr> 
      </table> 
 
  <script type="text/javascript">     
    <?php echo $jsArrayJurusan; ?>   
    function changeValueJurusan(x){   
    document.getElementById('jurusan').value = prdJurusan[x].jurusan;    
    };  
     
    </script>  
 
    </form> 
  </body> 
</html>