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
if ($_GET['id']) {
  $a = $_GET['id'];
  $query = mysql_query("select * from datamahasiswa where NIM='$a'");
  $data = mysql_fetch_array($query);
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>edit_mahasiswa</title>
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
      </ul>

      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
include("koneksi.php");
$hasil = mysql_query("select * from datamahasiswa where NIM=$_GET[id]");
$baris=mysql_fetch_array($hasil);
?>

  <div class="container">
<div class="page-header" style="margin-top: 180px;">
  </div>
<div class="row">
  <div class="col-lg-6">
            <div class="well">
	<form class="form-horizontal" action="update_mahasiswa.php" method="post" enctype="multipart/form-data">
<fieldset>
  <legend>Edit Data Mahasiswa</legend>
   <div class="form-group">
    <label>Nim</label>
    <input type="text" name="nim" class="form-control" readonly placeholder="Nim"  value="<?php echo $data['NIM'];?>">
  </div>
   <div class="form-group">
    <label>Nama Mahasiswa</label>
    <input type="text" name="nm_mahasiswa" class="form-control"  placeholder="Nama Mahasiswa"  value="<?php echo $data['NAMA_MAHASISWA'];?>">
  </div>
  <div class="form-group">
       <label >Jenis Kelamin</label>
        </div>
        <div class="form-group">
        <select class="form-control" id="select" name="jk" width="20px">
          <option  <?php if($data['JK_MAHASISWA']=='Laki-Laki'){ echo 'selected';} ?>>Laki-Laki</option>
           <option <?php if($data['JK_MAHASISWA']=='Perempuan'){ echo 'selected';} ?>>Perempuan</option>   
           </select>
              </div>

  <div class="form-group">
    <label >Agama</label>
    <input type="text" name="agama" class="form-control"  placeholder="Agama"  value="<?php echo $data['AGAMA_MAHASISWA'];?>">
  </div>
  <div class="form-group">
    <label >Tempat Lahir</label>
    <input type="text" name="tempat_lahir" class="form-control"  placeholder="Tempat Lahir"  value="<?php echo $data['TEMPAT_LAHIR'];?>">
  </div>
  <div class="form-group">
                  <label class="control-label">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgl_lahir"  value="<?php echo $data['TGL_LAHIR'];?>">
                </div>
<div class="form-group">
    <label >Alamat</label>
    <input type="text" name="alamat" class="form-control"  placeholder="Alamat"  value="<?php echo $data['ALAMAT_MAHASISWA'];?>">
  </div>
  
   <div class="form-group">
                    <label >Kode Jurusan</label>
                    <div >
                      <select class="form-control" name="kd_jurusan" id="select">
                      <?php
 $query = mysql_query("select * from jurusan");
 while ($data = mysql_fetch_array($query)) {
 ?>
  <option value="<?php echo $data['KODE_JURUSAN'];?>"><?php echo $data['NAMA_JURUSAN'];?></option>
 <?php
}
?>
</select>
</div>
</div>

 <div class="form-group">
                    <label >Kode Kelas</label>
                    <div >
                      <select class="form-control" name="kd_kelas" id="select">
                      <?php
 $query = mysql_query("select * from kelas");
 while ($data = mysql_fetch_array($query)) {
 ?>
  <option value="<?php echo $data['KODE_KELAS'];?>"><?php echo $data['KODE_KELAS'];?> | <?php echo $data['NAMA_KELAS'];?> </option>
 <?php
}
?>
</select>
</div>
</div>
 
 
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Simpan</button> 
  <button type="reset" class="btn btn-warning">Cancel</button>
</div>
</fieldset>
             </form>
            </div>
        </div>
         </div>
       </div>

        <div class="container-fluid bg-2 text-center" style="padding:0px 0px 10px 0px;bottom:0;">
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
