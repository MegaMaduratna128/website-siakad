<?php
include 'koneksi.php';
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['ID'])){
    die("<script>alert('Anda belum login, Silahkan login terlebih dahulu !!')</script>
    <meta http-equiv='refresh' content='1 url=../../login.html'>");//jika belum login jangan lanjut..
}
if($_SESSION['STATUS_USER'] !="DOSEN"){
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>view_nilai</title>
  <link rel="stylesheet" href="Bootstrap-3.3.6/css/bootstrap.min.css">

 <style>
.bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
}
.bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
}
.bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
}
.navbar-inverse{
    background-color:  #474e5d;
       }
</style>

</head>
<body>
 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="bg" style="height: 130px;background: #0d1a81;">
    <img src="../../foto/bg.png" width="100px" height="100px" style="margin-top: 15px;margin-left: 30px;" align="left">
    <div style="font-size: 20px;margin-left: 170px;color: rgba(255,255,255,0.8); padding-top: 25px;">
      JURUSAN <br>
      <b style="font-size: 25px;color: white;"><u>TEKNOLOGI INFORMASI</u></b> <br>
      POLITEKNIK NEGERI MALANG
    </div>
  </div>
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse"  data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="view.php">PENILAIAN</a></li>
        <li><a href="lihat_nilai.php">NILAI MAHASISWA</a></li>
        
      </ul>

      <ul class="nav navbar-nav navbar-right">
        
        <li class="dd">
            <a id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-haslabelledby="dropdownMenu1">
                <li><a href="logout.php">Logout</a></li>
                <li class="divider"></li>
                <li>
                  <?php
                  $k = $_SESSION['ID'];
                  $j = mysql_query("select * from datadosen where NIP='$k'");
                  $l = mysql_fetch_array($j);
                  ?>
                  <center>USER : <b><?= $l['NAMA_DOSEN']; ?></b></center>
                </li>
              </ul>
          </li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<div class="container">

  <div class="page-header" style="margin-top: 180px;">
    <h1><p align="center">POLITEKNIK NEGERI MALANG</p></h1>
  </div>
  <div class="form-group">
<form action="view_nilai.php" method="post">
  <table border="0" width="20%" align="center">
<tr>
<td width="45%"><font color="black" font size="3">PILIH KELAS</font></td>
<td width="2%"><font color="black" font size="3">:</font></td>
<td width="53%" colspan="3">
<?PHP
$dosen = $_SESSION['ID'];
echo "
<select name='kelas'>";
$dosen = $_SESSION[ID];
$tampil=mysql_query("SELECT  * FROM datadosen,matakuliah,jurusan,kelas,datamahasiswa WHERE datadosen.NIP = $dosen AND
  datadosen.KODE_MATAKULIAH = matakuliah.KODE_MATAKULIAH AND
  matakuliah.KODE_JURUSAN = datamahasiswa.KODE_JURUSAN AND 
  datamahasiswa.KODE_KELAS = kelas.KODE_KELAS");
echo "<option value='belum milih' selected>- Pilih ID -</option>";

while($w=mysql_fetch_array($tampil))
{
    echo "<option value=$w[KODE_KELAS]>$w[KODE_KELAS] : $w[NAMA_KELAS]</option> ";        
}
echo "</select></td></tr>";
?>
<tr>
<td colspan="3" align="center"><input type="submit" name="submit" value="PILIH" /> || <input type="reset" name="cancel" value="CANCEL" /></td>
</tr>
</table>
  </div>

<table width="100%" border="1" bordercolor="#006600" align="center"> 
<tr align="center"> 
<td align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#FFFFFF">#</font></td>
<td align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#FFFFFF">NIM</font></td> 
<td align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#FFFFFF">NAMA</font></td> 
<td align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#FFFFFF">MATAKULIAH</font></td>
<td align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#FFFFFF">BAB MATAKULIAH</font></td>
<td align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#FFFFFF">NILAI</font></td>
<td  align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#FFFFFF">ACTION</font></td> 
</tr> 
<?php 
include("koneksi.php"); 
$dosen = $_SESSION['ID'];
$kelas =$_POST['kelas'];
echo"$kelas";
$hasil = mysql_query("SELECT * FROM kelas,datadosen,nilai,datamahasiswa,matakuliah,bab_matakuliah WHERE datadosen.NIP = $dosen AND 
  datamahasiswa.NIM = nilai.NIM AND
  matakuliah.KODE_MATAKULIAH = bab_matakuliah.KODE_MATAKULIAH AND
  nilai.KODE_MATAKULIAH = matakuliah.KODE_MATAKULIAH AND
  nilai.KODE_BAB = bab_matakuliah.KODE_BAB AND
  datadosen.KODE_MATAKULIAH = matakuliah.KODE_MATAKULIAH ");   
$a=1; 
while($baris = mysql_fetch_array($hasil)) 
{ 
echo " 
<tr> 
<td bgcolor=#FFFFFF align='center'><font face='Arial, Helvetica, sans-serif'>$baris[KODE_NILAI]</font></td>
<td bgcolor=#FFFFFF align='center'><font face='Arial, Helvetica, sans-serif'>$baris[NIM]</font></td>
<td bgcolor=#FFFFFF align='center'><font face='Arial, Helvetica, sans-serif'>$baris[NAMA_SISWA]</font></td> 
<td bgcolor=#FFFFFF align='center'><font face='Arial, Helvetica, sans-serif'>$baris[NAMA_MATAKULIAH]</font></td>
<td bgcolor=#FFFFFF align='center'><font face='Arial, Helvetica, sans-serif'>$baris[NAMA_BAB]</font></td>
<td bgcolor=#FFFFFF align='center'><font face='Arial, Helvetica, sans-serif'>$baris[NILAI]</font></td> 
<td bgcolor=#FFFFFF align='center'><font face='Arial, Helvetica, sans-serif'><a href='pilih_mahasiswa.php?id=$baris[NIM]' class='btn btn-primary'>PILIH</a>
<a href='pilih_mahasiswa.php?id=$baris[NIM]' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></a>
<a href='pilih_mahasiswa.php?id=$baris[NIM]' class='btn btn-default'>CETAK</a></td> 
</tr>"; 
   $a++; 
} 
echo "</table>" 
?>
</table>
</div>
 


        <div class="container-fluid bg-2 text-center" style="padding:0px 0px 10px 0px;bottom:0;position:fixed;width:100%;">
        <div >
  <b><p align="center">Nilai Mahasiswa Application</p>
  <p align="center" ><span class="glyphicon glyphicon-copyright-mark"></span>copy right of Politeknik Negeri Malang </p>
  <p align="center"> Jl.Soekarno Hatta No.09, Jatimulyo, Kec.Lowokwaru, Kota Malang, Jawa Timur 65141, Telp.(0341)404424, 
         Email: info@polinema.ac.id | Website: www.polinema.ac.id
  </p> </b>
  </div>
   </div>

<!-- JavaScript Includes -->
<script src="Bootstrap-3.3.6/js/jquery.min.js"></script>
<script src="Bootstrap-3.3.6/js/bootstrap.min.js"></script>

</body>
</html>
