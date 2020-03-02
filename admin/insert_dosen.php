<?php
include("koneksi.php");
$nip = $_POST['nip'];
$kd_md = $_POST['kd_md'];
$nama = $_POST['nm_dosen'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];


$hasil = mysql_query("insert into datadosen (NIP,KODE_MATAKULIAH,NAMA_DOSEN,JK_DOSEN,AGAMA_DOSEN,ALAMAT_DOSEN,TELP_DOSEN) VALUE 
('$nip','$kd_md','$nama','$jk','$agama','$alamat','$telepon')");
if($hasil)
{
?>
<script language="JavaScript">
alert('Data Berhasil Disimpan !');
document.location='data_dosen.php';
</script>
<?php
}
else 
{
echo "<script>alert('Pendaftaran gagal silahkan cek kembali data anda')</script>
		<meta http-equiv='refresh' content='1 url=input_dosen.php'>";
}
?>