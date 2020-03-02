<?php 
include("koneksi.php"); 
$sqlstr="delete from nilai where KODE_NILAI=$_GET[id]"; 
$hasil=mysql_query($sqlstr); 
if($hasil) 
{ 
?>
<script language="JavaScript">
alert('Data Berhasil Dihapus');
document.location='lihat_nilai.php';
</script>
<?php
}else 
{ 
?>
<script language="JavaScript">
alert('Data gagal Dihapus !!');
document.location='lihat_nilai.php';
</script>
<?php
} 
?> 