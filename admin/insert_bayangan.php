<?php
include("koneksi.php");
$kd_dosen = $_POST['kd_dosen'];
$kd_md = $_POST['kd_md'];
$kelas = $_POST['kd_kelas'];

$hasil = mysql_query("insert into dosen (NIP,KODE_MATAKULIAH,KODE_KELAS) VALUE ('$kd_dosen' , '$kd_md' , '$kelas')");
if($hasil)
{
?>
<script language="javascript">
alert('Data berhasil disimpan !');
document.location='home.php';
</script>
<?php
}
else
{
echo "<script>alert('pendaftaran gagal silahakan cek kembali data anda')</script>
		<meta http-equiv='refresh' content='1 url=home.php'>";
}

?>