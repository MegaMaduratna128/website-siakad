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
<?php
include("koneksi.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>data_dosen</title>
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
        <li><a href="data_dosen.php">DOSEN</a></li> 
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
<br>
<br>
<br>
<br>
<br>

</div>
<p align="center">
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Data Dosen
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-9 col-xs-6">
                <a href="input_dosen.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Dosen</a>
              </div>
              <div class="col-md-3 col-xs-6">
                <form action="data_dosen.php" method="POST">
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" name="caridosen" class="form-control" placeholder="Cari" autofocus autocomplete="off" required>
                      <div class="input-group-btn">
                        <button type="submit" name="caridosen1" class="btn btn-default">
                          <span class="glyphicon glyphicon-search"></span>
                        </button>
                      </div>
                    </div>
                  </div>
                 </form>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr align="center" style="font-weight:bold">
                    <td>NIP</td>
                    <td>Matakuliah</td>
                    <td>Nama Dosen</td>
                    <td>Jenis Kelamin</td>
                    <td>Agama</td>
                    <td>Alamat</td>
                    <td>Telp</td>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <?php
                if (isset($_POST['caridosen1'])) {
                  if ($_POST['caridosen']!="") {
                    $query = mysql_query("select * from  datadosen where NAMA_DOSEN like '%$_POST[caridosen]%'");
                  }
                }else{
                $query = mysql_query("select * from datadosen where NIP!='admin'");
              }
                while ($data = mysql_fetch_array($query)){
                ?>
                <tr align="center">
                  <td><?php echo $data['NIP']; ?></td>
                  <?php
                  $query1 = mysql_query("select * from matakuliah where KODE_MATAKULIAH='$data[KODE_MATAKULIAH]'");
                  $data1 = mysql_fetch_array($query1);
                  ?>
                  <td><?php echo $data1['NAMA_MATAKULIAH']; ?></td>
                  <td><?php echo $data['NAMA_DOSEN']; ?></td>
                  <td><?php echo $data['JK_DOSEN']; ?></td>
                  <td><?php echo $data['AGAMA_DOSEN']; ?></td>
                  <td><?php echo $data['ALAMAT_DOSEN']; ?></td>
                  <td><?php echo $data['TELP_DOSEN']; ?></td>
                  <td>
                    <a href="edit_dosen.php?id=<?php echo $data['NIP'];?>" class="btn btn-primary">EDIT</a>
                    <a href="hapus_dosen.php?id=<?php echo $data['NIP'];?>"class="btn btn-danger"><span class="glyphicon glyphicon-trash">
                    </span></a>
                  </td>
                </tr>
                <?php
                }
                ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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