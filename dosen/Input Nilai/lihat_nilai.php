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
  <title>lihat_nilai</title>
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
        <li ><a href="../index.php">PENILAIAN</a></li>
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
    <h1><p align="center">TEKNOLOGI INFORMASI POLITEKNIK NEGERI MALANG</p></h1>
  </div>
<div class="col-md-3 col-xs-6">
                <form action="lihat_nilai.php" method="POST">
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" name="carinilai" class="form-control" placeholder="Cari" autofocus autocomplete="off" required>
                      <div class="input-group-btn">
                        <button type="submit" name="carinilai1" class="btn btn-default">
                          <span class="glyphicon glyphicon-search"></span>
                        </button>
                      </div>
                    </div>
                  </div>
                 </form>
              </div>
<table width="100%" border="1" bordercolor="#006600" align="center"> 
<tr align="center"> 
  
<td rowspan="2" align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#FFFFFF">NIM</font></td> 
<td rowspan="2" align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#FFFFFF">NAMA</font></td> 
<td rowspan="2" align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#FFFFFF">MATAKULIAH</font></td>
<td rowspan="2" align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#FFFFFF">BAB MATAKULIAH</font></td>
<td colspan="3" align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#FFFFFF">NILAI</font></td>
<td rowspan="2" align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#FFFFFF">RATA - RATA</font></td>
<td rowspan="2" align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#FFFFFF">ACTION</font></td> 
</tr>
<tr>
  <td align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#FFFFFF">MINGGU 1</font></td>
  <td align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#FFFFFF">MINGGU 2</font></td>
  <td align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#FFFFFF">MINGGU 3</font></td>
</tr>
<?php
$dosen = $_SESSION['ID'];
                 if (isset($_POST['carinilai1'])) {
                  if ($_POST['carinilai']!="") {
                   $hasil = mysql_query("SELECT *  FROM datadosen,nilai,datamahasiswa,matakuliah,bab_matakuliah WHERE datadosen.NIP = 
                   $dosen AND 
  datamahasiswa.NIM = nilai.NIM AND
  matakuliah.KODE_MATAKULIAH = bab_matakuliah.KODE_MATAKULIAH AND
  nilai.KODE_MATAKULIAH = matakuliah.KODE_MATAKULIAH AND
  nilai.KODE_BAB = bab_matakuliah.KODE_BAB AND
  datadosen.KODE_MATAKULIAH = matakuliah.KODE_MATAKULIAH AND nilai.NIM like '%$_POST[carinilai]%' "); 
                  }
                }else{
                 $hasil = mysql_query("SELECT *  FROM datadosen,nilai,datamahasiswa,matakuliah,bab_matakuliah WHERE datadosen.NIP = $dosen AND 
  datamahasiswa.NIM = nilai.NIM AND
  matakuliah.KODE_MATAKULIAH = bab_matakuliah.KODE_MATAKULIAH AND
  nilai.KODE_MATAKULIAH = matakuliah.KODE_MATAKULIAH AND
  nilai.KODE_BAB = bab_matakuliah.KODE_BAB AND
  datadosen.KODE_MATAKULIAH = matakuliah.KODE_MATAKULIAH"); 
              }
  
$a=1; 
while($baris = mysql_fetch_array($hasil)) 
{ 
  $z = number_format($baris['RATA2_NILAI'], 2);
echo " 
<tr> 

<td bgcolor=#FFFFFF align='center'><font face='Arial, Helvetica, sans-serif'>$baris[NIM]</font></td>
<td bgcolor=#FFFFFF align='center'><font face='Arial, Helvetica, sans-serif'>$baris[NAMA_MAHASISWA]</font></td> 
<td bgcolor=#FFFFFF align='center'><font face='Arial, Helvetica, sans-serif'>$baris[NAMA_MATAKULIAH]</font></td>
<td bgcolor=#FFFFFF align='center'><font face='Arial, Helvetica, sans-serif'>$baris[NAMA_BAB]</font></td>
<td bgcolor=#FFFFFF align='center'><font face='Arial, Helvetica, sans-serif'>$baris[NILAI_M1]</font></td>
<td bgcolor=#FFFFFF align='center'><font face='Arial, Helvetica, sans-serif'>$baris[NILAI_M2]</font></td>
<td bgcolor=#FFFFFF align='center'><font face='Arial, Helvetica, sans-serif'>$baris[NILAI_M3]</font></td>
<td bgcolor=#FFFFFF align='center'><font face='Arial, Helvetica, sans-serif'>$z</font></td> 
<td bgcolor=#FFFFFF align='center'><font face='Arial, Helvetica, sans-serif'><a href='edit_nilai.php?id=$baris[KODE_NILAI]' class='btn 
btn-primary'>Edit</a>
<a href='hapus_nilai.php?id=$baris[KODE_NILAI]' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></a>
<a href='print.php?id=$baris[KODE_NILAI]' class='btn btn-default'><span class='glyphicon glyphicon-print'></span></a></td> 
</tr>"; 
   $a++; 
} 
echo "</table>" ;
?>
</table>
</div>

<!-- JavaScript Includes -->
<script src="Bootstrap-3.3.6/js/jquery.min.js"></script>
<script src="Bootstrap-3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
