<?php
include 'koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Visi_Misi</title>
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
         <li ><a href="Input Nilai/cari_matkul.php">HOME DOSEN</a></li>
        <li><a href="visi_misi.php">VISI dan MISI</a></li>
        
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
    <h1><p align="center">JURUSAN TEKNOLOGI INFORMASI POLITEKNIK NEGERI MALANG</p></h1>
  </div>

  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
            VISI
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in">
        <div class="panel-body">
         ” MENJADI PUSAT UNGGULAN PENDIDIKAN TINGGI TERAPAN BIDANG TEKNOLOGI INFORMASI TINGKAT NASIONAL MAUPUN INTERNASIONAL ”
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
            MISI
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse in">
        <div class="panel-heading">
        <h4> 1. Melaksanakan pendidikan tinggi yang inovatif dengan memanfaatkan kemajuan teknologi informasi sehingga mampu menghasilkan lulusan yang siap kerja dengan daya saing.

<br>2. Menghasilkan penelitian terapan berbasis produk dan jasa dalam bidang teknologi informasi.

<br>3. Melaksanakan pengabdian masyarakat dengan menggunakan kemajuan teknologi informasi untuk meningkatkan kesejahteraan.

<br>4. Terwujudnya kerjasama yang saling menguntungkan dengan berbagai pihak baik dalam skala nasional maupun internasional pada bidang teknologi informasi.
</h4>
        </div>
      </div>
    </div>
  </div>


</div>

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
