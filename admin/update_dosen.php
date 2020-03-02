<?php
include("koneksi.php");
$nip = $_POST['nip'];
$kd_md = $_POST['kd_md'];
$nama = $_POST['nm_dosen'];
$jk_dosen = $_POST['jk'];
$agama_dosen = $_POST['agama'];
$alamat_dosen = $_POST['alamat'];
$telepon = $_POST['telepon'];
$hasil = mysql_query("update datadosen SET NIP='$nip' , KODE_MATAKULIAH='$kd_md' , NAMA_DOSEN='$nama' , JK_DOSEN='$jk_dosen' , 
AGAMA_DOSEN='$agama_dosen' , ALAMAT_DOSEN='$alamat_dosen' , TELP_DOSEN='$telepon'  WHERE NIP='$nip'");
if($hasil)
{
?>
<script language="javascript">
alert('Data berhasil diganti !');
document.location='data_dosen.php';
</script>
<?php
}
else
{
echo "<script>alert('gagal di ganti silahakan cek kembali data anda')</script>
    <meta http-equiv='refresh' content='1 url=data_dosen.php'>";
}
?>