<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
session_start();
mysql_connect("localhost","root","") or die("Koneksi Gagal");
mysql_select_db("project_desain_web");//sesuaikan dengan nama database anda

$userid = $_POST['username'];
$psw = $_POST['password'];
$op = $_GET['op'];
if($op=="in"){
    $cek = mysql_query("SELECT * FROM user WHERE ID='$userid' AND PASSWORD='$psw'");
    if(mysql_num_rows($cek)==1){
        $c = mysql_fetch_array($cek);
        $_SESSION['ID'] = $c['ID'];
        $_SESSION['STATUS_USER'] = $c['STATUS_USER'];
        if($c['STATUS_USER']=="ADMIN"){
            header("location:admin/home.php");
        }else if($c['STATUS_USER']=="DOSEN"){
            header("location:dosen/index.php");
        }else{
         die("password salah <a href=\"javascript:history.back()\">kembali</a>");
    }
}else if($op=="out"){
    unset($_SESSION['ID']);
    unset($_SESSION['STATUS_USER']);
    header("location:login.php");
}
}
?>
</body>
</html>