<style type="text/css">
	#z tr td {
		border: 1px solid white;
	}
</style>
<?php
session_start();
//koneksi database
include "koneksi.php";
if ($_GET['id']) {
$a=$_GET['id'];
$sql = "select * from nilai where KODE_NILAI='$a'";

$result = mysql_query($sql);
}
?>
<html>
<head>
<script language="JavaScript">
var gAutoPrint = true; // Tells whether to automatically call the print function

function printSpecial()
{
if (document.getElementById != null)
{
var html = '<HTML>\n<HEAD>\n';

if (document.getElementsByTagName != null)
{
var headTags = document.getElementsByTagName("head");
if (headTags.length > 0)
html += headTags[0].innerHTML;
}

html += '\n</HE>\n<BODY>\n';

var printReadyElem = document.getElementById("printReady");

if (printReadyElem != null)
{
html += printReadyElem.innerHTML;
}
else
{
alert("Could not find the printReady function");
return;
}

html += '\n</BO>\n</HT>';

var printWin = window.open("","printSpecial");
printWin.document.open();
printWin.document.write(html);
printWin.document.close();
if (gAutoPrint)
printWin.print();
}
else
{
alert("The print ready feature is only available if you are using an browser. Please update your browswer.");
}
}

</script>
</head>
<body>
<p align="center"><a href="javascript:void(printSpecial())"><img src="print.png" width="48" height="48" border="0"></a>
<div id="printReady"></p>
		  <table width="677" border="0" align="center" cellpadding="1" cellspacing="0">
            <tr>
              <td width="130"><div align="center"><img src="polinema.png" width="100" height="100" /></div></td>
               <td width="543"><h2 align="center">JURUSAN TEKNOLOGI INFORMASI</h2>
                <h3 align="center"><strong>POLITEKNIK NEGERI MALANG</strong></h3>
                  <div align="center"><strong>Jl.Soekarno Hatta No.09, Jatimulyo, Kec.Lowokwaru, Kota Malang, Jawa Timur 65141, 
									Telp.(0341)404424</strong></div>
				  <div align="center"><strong>Email: info@polinema.ac.id | Website: www.polinema.ac.id</strong></div></td>
            </tr>
            <tr>
              <td colspan="2"><hr /></td>
            </tr>
          </table>
		  <p>&nbsp;</p>
		  <table width="685" border="1" align="center" cellpadding="5" cellspacing="0">
	<?php while($data = mysql_fetch_array($result)){?>
	<tr>
	<td width="500"><strong>Nomor Induk Mahasiswa </strong></td>
	<td width="500"><strong>: <?php echo $data['NIM'];?></strong></td>
	</tr>
	 <?php
      $query1 = mysql_query("select * from datamahasiswa where NIM='$data[NIM]'");
      $data1 = mysql_fetch_array($query1);
       ?>
		
	<tr>
	  <td width="500"><strong>Nama Mahasiswa </strong></td>
		<td width="500"><strong>: <?php echo $data1['NAMA_MAHASISWA'];?></strong></td>
		</tr>
		<tr>
		  <td width="500"><strong>Alamat</strong></td>
		  <td width="500"><strong>: <?php echo $data1['ALAMAT_MAHASISWA'];?></strong></td>
		</tr>
		<tr><tr>
		  <td width="500"><strong>Tanggal Lahir</strong></td>
		  <td width="500"><strong>: <?php echo $data1['TGL_LAHIR'];?></strong></td>
		</tr>
	<tr>
	  <td colspan="5">
			   
			    <p><strong>NILAI MAHASISWA</strong></p>
			    <table id="z" width="585" align="center" cellpadding="5" cellspacing="0">
				<tr>
				 <!-- <td rowspan="2" align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#000000">Kode Nilai</font></td>   -->
				<td rowspan="2" align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#000000">Matakuliah</font></td>
				<td rowspan="2" align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#000000">Bab Matakuliah</font></td>
				<td colspan="3" align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#000000">Nilai</font></td>
				<td rowspan="2" align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#000000">Rata - rata</font></td>
				  </tr>
				  <tr>
				  	<td align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#000000">Minggu 1</font></td>
				  	<td align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#000000">Minggu 2</font></td>
				  	<td align="center" bgcolor="#00CC33" height="40"><font face='Arial, Helvetica, sans-serif' color="#000000">Minggu 3</font></td>
				  </tr>
				
				<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
				$rowset = mysql_query("select * from nilai  inner join bab_matakuliah on bab_matakuliah.KODE_BAB=nilai.KODE_BAB 
										inner join matakuliah on matakuliah.KODE_MATAKULIAH=nilai.KODE_MATAKULIAH where KODE_NILAI=$a ");
				$i=1;
				while($mp = mysql_fetch_array($rowset)){
				?>
				<tr>
				
					<td><?php echo $mp['NAMA_MATAKULIAH']?></td>
					<td><div align="center"><?php echo $mp['NAMA_BAB'];?></div></td>
					<td><div align="center"><?php echo $mp['NILAI_M1'];?></div></td>
					<td><div align="center"><?php echo $mp['NILAI_M2'];?></div></td>
					<td><div align="center"><?php echo $mp['NILAI_M3'];?></div></td>
					<td><div align="center"><?php echo number_format($mp['RATA2_NILAI'], 2);?></div></td>
					
										  <?php 
					   }?>
			      </tr>
 	  </table>				  
      <p>&nbsp;</p></td>
	</tr>
	<?php }?>
</table>
		  
          <p>&nbsp;</p>
          <table width="671" border="0" align="center" cellpadding="2" cellspacing="0">
            <tr>
              <td width="312"><div align="center">
                <p><strong>Malang, <?php echo date (" d M Y")?> <br />Dosen Pengajar</strong></p>
              </div></td>
              <td width="289"><div align="center">
                <p>&nbsp;</p>
                <p><strong>Wali Murid </strong></p>
              </div></td>
            </tr>
            <tr>
            	<?php
            	$nip = $_SESSION['ID'];
      $hasil = mysql_query("select * from datadosen where datadosen.NIP='$nip'");
      $ok = mysql_fetch_array($hasil);
       ?>
              <td><p>&nbsp;</p>
              <p align="center"><strong><?php echo $ok['NAMA_GURU'] ?><br />NIP. <?php echo $ok['NIP'] ?> </strong></p></td>
              <td><p>&nbsp;</p>
             
              <p align="center"><strong>___________________________</strong></p></td>
            </tr>
          </table>
          <p align="center">&nbsp;</p>
        