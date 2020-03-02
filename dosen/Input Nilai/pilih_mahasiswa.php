<?php
include 'koneksi.php';
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['ID'])){
    die("<script>alert('Anda belum login, Silahkan login terlebih dahulu !!')</script>
		<meta http-equiv='refresh' content='1 url=../../login.html'>");//jika belum login jangan lanjut..
}

//cek level user
if($_SESSION['STATUS_USER']!="DOSEN"){
    die("Anda bukan user");//jika bukan user jangan lanjut
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <title>pilih_mahasiswa</title>
  <link rel="stylesheet" href="Bootstrap-3.3.6/css/bootstrap.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<body background="walpaper2.jpg">
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
        <li ><a href="cari_matkul.php">PENILAIAN</a></li>
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
<br>
<?php
$hasil = mysql_query("select * from datamahasiswa where NIM=$_GET[id]");
$baris=mysql_fetch_array($hasil);
$nip1 = $_SESSION['ID'];
$hasil1 = mysql_query("select * from matakuliah,datadosen where matakuliah.KODE_MATAKULIAH=datadosen.KODE_MATAKULIAH and datadosen.NIP = $nip1");
$baris1=mysql_fetch_array($hasil1);?>
<form action="simpan_nilai.php" method="post">
<table border="0" width="36%" align="center" style="margin-top: 180px;">
<input type="hidden"  value="<?=$baris1['KODE_MATAKULIAH'];?>" name="diklat" size="30px">
<tr>
<td width="48%"><font color="black" font size="3">KODE. BAB</font></td>
<td width="2%"><font color="black" font size="3">:</font></td>
<td width="53%" colspan="3">
<?PHP
include("koneksi.php");
$nip = $_SESSION['ID'];
echo "
<select name='kode_bab' required>";
$tampil=mysql_query("SELECT *  FROM bab_matakuliah,matakuliah,datadosen WHERE 
	bab_matakuliah.KODE_MATAKULIAH=matakuliah.KODE_MATAKULIAH AND matakuliah.KODE_MATAKULIAH=datadosen.KODE_MATAKULIAH AND datadosen.NIP=$nip");
echo "<option value='belum milih' selected>- Pilih -</option>";

while($w=mysql_fetch_array($tampil))
{
    echo "<option value=$w[KODE_BAB]>$w[NAMA_BAB]</option> ";        
}
echo "</select></td></tr>";
?>
<tr>
<td width="48%"><font color="black" font size="3">NIM</font></td>
<td width="2%"><font color="black" font size="3">:</font></td>
<td width="50%" colspan="3"><input type="text" readonly="readonly" value="<?=$baris['NIM'];?>" name="nim" size="30px" placeholder="ALAMAT" ></td>
</tr>
<tr>
<td><font color="black" font size="3">NAMA MAHASISWA</font></td>
<td><font color="black" font size="3">:</font></td>
<td colspan="3"><input type="text" readonly="readonly" name="nama" value="<?=$baris['NAMA_MAHASISWA'];?>" size="30px" ></td>
</tr>
<tr>
  <td><font color="black" font size="3">NILAI MINGGU 1</font></td>
  <td><font color="black" font size="3">:</font></td>
  <td colspan="3"><input type="text"  name="nilaim1" size="30px"  ></td>
</tr>
<tr>
<tr>
  <td><font color="black" font size="3">NILAI MINGGU 2</font></td>
  <td><font color="black" font size="3">:</font></td>
  <td colspan="3"><input type="text"  name="nilaim2" size="30px"  ></td>
</tr>
<tr>
<tr>
  <td><font color="black" font size="3">NILAI MINGGU 3</font></td>
  <td><font color="black" font size="3">:</font></td>
  <td colspan="3"><input type="text"  name="nilaim3" size="30px"  ></td>
</tr>
<tr>
<td><font color="black" font size="3">SEMESTER</font></td>
<td><font color="black" font size="3">:</font></td>
<td colspan="3"><input type="text" name="semester" size="30px"  ></td>
</tr>
<tr>
<td><font color="black" font size="3">TAHUN AJARAN</font></td>
<td><font color="black" font size="3">:</font></td>
<td colspan="3"><input type="text" name="thn" size="30px" ></td>
</tr>
<tr>
<td colspan="6" align="center">
<input type="submit" name="submit" value="ok" width="30px" height="25px"  >
<input type="reset" name="reset" value="Cancel" width="30px"></td>
</tr>
</table>
</form>
<h4><p align="center">PILIH MAHASISWA</p></h4>
<table width="40%" border="1" bordercolor="#006600" align="center"> 
<tr align="center"> 
<td align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#FFFFFF">NIM</font></td> 
<td align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#FFFFFF">KODE. KELAS</font></td> 
<td align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#FFFFFF">NAMA</font></td> 
<td colspan=2 bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#FFFFFF">Action</font></td> 
</tr> 
<?php 
include("koneksi.php"); 
$kelas = $baris['KODE_KELAS'];
$dosen = $_SESSION['ID'];
$hasil = mysql_query("SELECT *   FROM datamahasiswa WHERE KODE_KELAS IN(SELECT KODE_KELAS FROM dosen WHERE KODE_KELAS=$kelas)"); 
$jumlah = mysql_num_rows($hasil); 
$a=1; 
while($baris = mysql_fetch_array($hasil)) 
{ 
echo " 
<tr> 
<td bgcolor=#FFFFFF align='center'><font face='Arial, Helvetica, sans-serif'>$baris[NIM]</font></td> 
<td bgcolor=#FFFFFF align='center'><font face='Arial, Helvetica, sans-serif'>$baris[KODE_KELAS]</font></td> 
<td bgcolor=#FFFFFF align='center'><font face='Arial, Helvetica, sans-serif'>$baris[NAMA_MAHASISWA]</font></td> 
<td bgcolor=#FFFFFF align='center'><font face='Arial, Helvetica, sans-serif'><a href='pilih_mahasiswa.php?id=$baris[NIM]'>PILIH</a></td> 
</tr>"; 
   $a++; 
} 
echo "</table>" 
?>

<!-- JavaScript Includes -->
<script src="Bootstrap-3.3.6/js/jquery.min.js"></script>
<script src="Bootstrap-3.3.6/js/bootstrap.min.js"></script>
</body>
</html>