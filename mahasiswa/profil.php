<?php
include 'koneksi.php';
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['ID'])){
    die("<script>alert('Anda belum login, Silahkan login terlebih dahulu !!')</script>
    <meta http-equiv='refresh' content='1 url=../../login.html'>");//jika belum login jangan lanjut..
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>INDEX</title>
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
.table{
  margin-left : 300px;
  background-color:pink;
}
</style>
</head>
<body background="walpaper2.jpg">
 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="bg" style="height: 130px;background: #0d1a81;">
    <img src="bg.png" width="100px" height="100px" style="margin-top: 15px;margin-left: 30px;" align="left">
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
  <a class="navbar-brand" href="index.php">INDEX</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="nilai_mahasiswa.php">LIHAT NILAI</a></li>
        <li ><a href="profil.php">PROFIL MAHASISWA</a></li>  
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
                  $j = mysql_query("select * from datamahasiswa where NIM='$k'");
                  $l = mysql_fetch_array($j);
                  ?>
                  <center>USER : <b><?= $l['NAMA_MAHASISWA']; ?></b></center>
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
    <h2><p align="center"> PROFIL MAHASISWA </p></h2>
  </div> 
  <div class="form-group">
<form action="view_nilai.php" method="post">
  </div>

<?php
$a = $_SESSION['ID'];
$q = mysql_query("select * from datamahasiswa where NIM='$a'");
$d = mysql_fetch_array($q)or die(mysql_error());
?>
<div class="row">
  <div class="col-md-6">
  
    <table class="table table-bordered" align="center">
  <tr>
      <td>Nomer Induk Mahasiswa</td>
      <td><?= $d['NIM'] ?></td>
    </tr>
    <tr>
      <td>Nama Mahasiswa</td>
      <td><?= $d['NAMA_MAHASISWA'] ?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td><?= $d['JK_MAHASISWA'] ?></td>
    </tr>
    <tr>
      <td>Agama</td>
      <td><?= $d['AGAMA_MAHASISWA'] ?></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><?= $d['ALAMAT_MAHASISWA'] ?></td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td><?= $d['TGL_LAHIR'] ?></td>
    </tr>
</table>
  </div>
</div>


 


        <!--  <div class="container-fluid bg-2 text-center" style="padding:0px 0px 10px 0px;bottom:0;position:fixed;width:100%;">
        <div >
         <b>
         <p align="center">POLITEKNIK NEGERI MALANG</p> 
        <p align="center"> Jl.Soekarno Hatta No.09, Jatimulyo, Kec.Lowokwaru, Kota Malang, Jawa Timur 65141, Telp.(0341)404424, 
         Email: info@polinema.ac.id | Website: www.polinema.ac.id
         </p> </b>
         <p align="center" ><span class="glyphicon glyphicon-copyright-mark"></span>copy right 2018, By Mega Maduratna Juwita </p>
        </div>
        </div> -->

<!-- JavaScript Includes -->
<script src="Bootstrap-3.3.6/js/jquery.min.js"></script>
<script src="Bootstrap-3.3.6/js/bootstrap.min.js"></script>

</body>
</html>
