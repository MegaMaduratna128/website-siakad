<?php
include("koneksi.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>bayangan</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap-3.3.6/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap-3.3.6/css/bootstrap.min.css">
	
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
</style>
</head>
<body>

 <?php
session_start();
//cek login apakah sudah login
if(! isset($_SESSION['ID'])){
  die("<script>alert('anda belum login,dimohon untuk login')</script>
    <meta http-equiv='refresh' content='1 url=../login.php'>");
}
//cek login user
if($_SESSION['STATUS_USER'] !="admin"){
  
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>bayangan</title>
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
    <img src="../foto/bg.png" width="100px" height="100px" style="margin-top: 15px;margin-left: 30px;" align="left">
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
        <li ><a href="home.php"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="data_mahasiswa.php">MAHASISWA</a></li>
        <li><a href="data_kelas.php">KELAS</a></li>
        <li><a href="data_dosen.php">DOSEN</a></li> 
        <li><a href="data_matakuliah.php">MATAKULIAH</a></li>
        <li><a href="data_jurusan.php">JURUSAN</a></li>
        <li><a href="data_bab.php">BAB MATAKULIAH</a></li>
        <li><a href="data_user.php">USER</a></li> 
        <!-- <li><a href="bayangan.php">KELAS GURU</a></li> -->
      </ul>

      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<br>
<br>

  <div class="container">

  <div class="page-header" style="margin-top: 180px;">
    <h1>Kelas Dosen</h1>
  </div>

  <div class="row">
  <div class="col-md-6">
            <div class="well">
	<form class="form-horizontal" action="insert_bayangan.php" method="post" enctype="multipart/form-data">
 <fieldset>
  <div class="form-group">
                    <label >NIP</label>
                    <div >
                      <select class="form-control" name="kode_dosen" id="select">
                      <?php
 $query = mysql_query("select * from datadosen");
 while ($data = mysql_fetch_array($query)) {
 ?>
  <option  value="<?php echo $data['NIP'];?>"><?php echo $data['NIP'];?> | <?php echo $data['NAMA_DOSEN'];?></option>
 <?php
}
?>
</select>
</div>
</div>
 <div class="form-group">
                    <label >Matakuliah</label>
                    <div >
                      <select class="form-control" name="kode_matakuliah" id="select">
                      <?php
 $query = mysql_query("select * from matakuliah");
 while ($data = mysql_fetch_array($query)) {
 ?>
  <option  value="<?php echo $data['KODE_MATAKULIAH'];?>"><?php echo $data['KODE_MATAKULIAH'];?> | <?php echo $data['NAMA_MATAKULIAH'];?></option>
 <?php
}
?>
</select>
</div>
</div>
 <div class="form-group">
                    <label >Kelas</label>
                    <div >
                      <select class="form-control" name="kd_kelas" id="select">
                      <?php
 $query = mysql_query("select * from kelas");
 while ($data = mysql_fetch_array($query)) {
 ?>
  <option  value="<?php echo $data['KD_KELAS'];?>"><?php echo $data['KD_KELAS'];?> | <?php echo $data['NM_KELAS'];?></option>
 <?php
}
?>
</select>
</div>
</div>

  <div class=class="form-group">
    
  <button type="submit" class="btn btn-primary">Simpan</button>
   <button type="reset" class="btn btn-warning">Cancel</button>
  </fieldset>
 </form>
            </div>
        </div>
         </div>
       </div>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 
 <div class="container-fluid bg-2 text-center" style="padding:0px 0px 10px 0px;bottom:0;position:fixed;width:100%;">
        <div >
         <b>
         <p align="center">POLITEKNIK NEGERI MALANG</p> 
        <p align="center"> Jl.Soekarno Hatta No.09, Jatimulyo, Kec.Lowokwaru, Kota Malang, Jawa Timur 65141, Telp.(0341)404424, 
         Email: info@polinema.ac.id | Website: www.polinema.ac.id
         </p> </b>
         <p align="center" ><span class="glyphicon glyphicon-copyright-mark"></span>copy right 2018, By Mega Maduratna Juwita </p>
        </div>
        </div>
    <!-- JavaScript Includes -->
<script src="Bootstrap-3.3.6/js/jquery.min.js"></script>
<script src="Bootstrap-3.3.6/js/bootstrap.min.js"></script>
  </body>
</html>
