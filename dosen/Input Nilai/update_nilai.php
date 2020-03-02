<?php
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

<?php
include("koneksi.php");
$kd_nilai = $_POST['kd_nilai'];

$kode_bab = $_POST['kode_bab'];
$nim = $_POST['nim'];
$nilaim1= $_POST['nilaim1'];
$nilaim2= $_POST['nilaim2'];
$nilaim3= $_POST['nilaim3'];
$rata2 = ($nilaim1 + $nilaim2 + $nilaim3) / 3;
$semester = $_POST['semester'];
$tahun_ajaran = $_POST['thn'];

if($rata2 > 80 && $rata2 <= 100){
	$huruf = 'A';
}else if($rata2 > 70){
	$huruf = 'B';
}else if($rata2 > 60){
	$huruf = 'C';
}else if($rata2 > 40){
	$huruf = 'D';
}else{
	$huruf = 'E';
}


if($rata2 > 80 && $rata2 <= 100){
	$keterangan='PERTAHANKAN PRESTASIMU';
}else if($rata2 > 70){
	$keterangan='TINGKATKAN DAN PERTAHANKAN PRESTASIMU';
}else if($rata2 > 60){
	$keterangan='BANYAKLAH BELAJAR';
}else if($rata2 > 40){
	$keterangan='BELAJAR GIAT LAGI';
}else{
	$keterangan='BELAJAR BERSUNGGUH SUNGGUH !!';
}

$hasil = mysql_query("update nilai SET KODE_BAB='$kode_bab' , NIM='$nim' , NILAI_M1='$nilaim1' ,NILAI_M2='$nilaim2' ,NILAI_M3='$nilaim3' ,RATA2_NILAI='$rata2' , NILAI_HURUF='$huruf' ,  KET_NILAI='$keterangan' , SEMESTER='$semester' , TH_AJARAN='$tahun_ajaran' where KODE_NILAI='$kd_nilai' ");
 
if($hasil)
{
?>
<script language="JavaScript">
alert('Data Berhasil Disimpan !');
document.location='lihat_nilai.php';
</script>
<?php
}
else 
{
echo "<script>alert('Pendaftaran gagal silahkan cek kembali data anda')</script>";
}
?>