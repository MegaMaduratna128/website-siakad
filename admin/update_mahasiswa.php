<?php
include("koneksi.php");
$Kode_jurusan = $_POST['kd_jurusan'];
$kd_kelas =$_POST['kd_kelas'];
$NIM = $_POST['nim'];
$NM_MAHASISWA = $_POST['nm_mahasiswa'];
$JK_MAHASISWA = $_POST['jk'];
$AGAMA_MAHASISWA = $_POST['agama'];
$TEMPAT_LAHIR = $_POST['tempat_lahir'];
$TANGGAL_LAHIR = $_POST['tgl_lahir'];
$ALAMAT_MAHASISWA = $_POST['alamat'];

$hasil = mysql_query("update datamahasiswa SET  NIM='$NIM' , KODE_KELAS='$kd_kelas' ,KODE_JURUSAN='$Kode_jurusan', 
NAMA_MAHASISWA='$NM_MAHASISWA' , TEMPAT_LAHIR='$TEMPAT_LAHIR' , TGL_LAHIR='$TANGGAL_LAHIR' , JK_MAHASISWA='$JK_MAHASISWA' , 
AGAMA_MAHASISWA='$AGAMA_MAHASISWA' , ALAMAT_MAHASISWA='$ALAMAT_MAHASISWA'  WHERE NIM='$NIM' ");
if($hasil)
{
?>
<script language="javascript">
alert('Data berhasil disimpan !');
document.location='data_mahasiswa.php';
</script>
<?php
}
else
{
echo "<script>alert('pendaftaran gagal silahakan cek kembali data anda')</script>
		<meta http-equiv='refresh' content='1 url=data_mahasiswa.php'>";
}
?>