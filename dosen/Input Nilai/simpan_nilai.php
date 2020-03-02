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
$diklat = $_POST['diklat'];
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

$hasil = mysql_query("insert into nilai values('', '$diklat', '$kode_bab', '$nim', '$nilaim1', '$nilaim2', '$nilaim3', '$rata2', '$huruf', '$keterangan', '$semester', '$tahun_ajaran')");
 
if($hasil)
{
?>
<script language="JavaScript">
alert('Data Berhasil Disimpan !');
document.location='lihat_nilai.php';
</script>
<?php
echo "$rata2";
}
else 
{
echo "<script>alert('Pendaftaran gagal silahkan cek kembali data anda')</script>";
}
?>