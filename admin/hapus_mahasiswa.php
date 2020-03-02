<?php 
include("koneksi.php"); 
$sqlstr="delete from datamahasiswa where NIM=$_GET[id]"; 
$hasil=mysql_query($sqlstr); 
if($hasil) 
{ 
?>
<script language="JavaScript">
alert('Data Berhasil Dihapus');
document.location='data_mahasiswa.php';
</script>
<?php
}else 
{ 
?>
<script language="JavaScript">
alert('Data gagal Dihapus !!');
document.location='data_mahasiswa.php';
</script>
<?php
} 
?> 