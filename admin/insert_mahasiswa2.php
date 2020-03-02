<?php
include("koneksi.php");
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];
$kd_kk = $_POST['kd_kk'];
$nama = $_POST['nm_mahasiswa'];
$jankel = $_POST['jk'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$hasil = mysql_query("INSERT INTO datamahasiswa 
	(NIM,KODE_KELAS,KODE_JURUSAN,NAMA_MAHASISWA,TEMPAT_LAHIR,TGL_LAHIR,JK_MAHASISWA,AGAMA_MAHASISWA,ALAMAT_MAHASISWA)  VALUE 
	('$nim' , '$kelas' , '$kd_kk' , '$nama' , '$tempat_lahir' , '$tgl_lahir' , '$jankel' , '$agama'  , '$alamat' )");
$hasil2 = mysql_query("INSERT INTO login_mahasiswa 
	(ID,PASSWORD)  VALUE 
	('$nim' , '$nim' )");
if($hasil && $hasil2)
{
	?>
	<script languange="JavaScript">
	alert('Data Berhasil Disimpan !');
	document.location ='data_mahasiswa.php';
	</script>
<?php
}
else
{
	echo"<script>alert('Data gagal Disimpan cek Kembali data anda')</script>
	<meta http-equiv='refresh' content='1 url=input_mahasiswa.php'>";
}
?>
