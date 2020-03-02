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
  <title>home</title>
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
       #sidebar { 
    float: right;
    width: 300px;
    height: 500px;
    float: right;
    text-align: left;
    font-family: 'Times New Roman';}
</style>
</head>
<body background="walpaper.jpg">
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
        <li><a href="data_dosen.php">DOSEN</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
        <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br><br>
  <br><br>
  <br><br>
  <br><br>
<div class="container">
<!-- <div class="page-header" style="margin-top: 180px;">
    <h2><p align="center">POLITEKNIK NEGERI MALANG</p></h2>
  </div>

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
      <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img alt="First slide" src="foto/3.png" width="60%">
      </div>
      <div class="item">
        <img alt="Second slide" src="foto/1.png" width="88%">
      </div>
      <div class="item">
        <img alt="Third slide" src="foto/2.png" width="68%">
      </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
</div> -->


<div class="page-header">
    
    </div>
  
    <div class="judul">
        <!-- <font face="Dafunk2" color="White"><h3>POLITEKNIK NEGERI MALANG</h3></font> -->
     </div>
        <!-- UNTUK SLIDE SHOW -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img alt="First slide" src="foto/3.png" width="100%">
        </div>
        <div class="item">
          <img alt="Second slide" src="foto/1.png" width="100%">
        </div>
        <div class="item">
          <img alt="Third slide" src="foto/2.png" width="100%">
        </div>
       
      </div>
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
     
    </div>
  
    <br>
  <br><br>
  <br><br>
  <br>
  <br><br>
  <br><br>
  
  
  
  </div>
          <div class="container-fluid bg-2 text-center" style="padding:0px 0px 10px 0px;bottom:0;position:fixed;width:100%;">
          <div >
           <b>
      
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
