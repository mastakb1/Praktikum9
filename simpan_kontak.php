<?php
$servername="localhost";
$username="root";
$password="";
$dbname="dbpraktikum9";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Database tidak terbuka");

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$vnama=$_POST['nama'];
$vjkel=$_POST['jkel'];
$vemail=$_POST['email'];
$valamat=$_POST['alamat'];
$vkota=$_POST['kota'];
$vpesan=$_POST['pesan'];
$querysql="insert kontak set nama='$vnama',
jkel='$vjkel',
email='$vemail',
alamat='$valamat',
kota='$vkota',
pesan='$vpesan'";

mysqli_query($conn, $querysql) or die("Proses simpan ke database gagal");
header("location:kontak.php");
?>