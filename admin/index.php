<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>index</title>
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
      <a class="navbar-brand" href="index.php">INDEX</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">WELCOME</a></li>
        <li><a href="visi_misi.php">VISI dan MISI</a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
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
</div>
   <div class="container-fluid bg-2 text-center" style="padding:0px 0px 10px 0px;bottom:0;position:fixed;width:100%;">
        <div >
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
