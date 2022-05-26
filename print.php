<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kontak Pengguna</title>
</head>
<body>
    <center><h1 >Cetak Data Kontak Pengguna</h1></center>
<?php
include "conn.php";
$cetak = mysqli_query($conn, "SELECT * from kontak ORDER BY nama") or die("Proses cetak gagal");

    echo "<table width='100%' cellpadding='2' cellspacing='0' border='1'>
    <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Kota</th>
    <th>Pesan</th>";
    $no=1;
    foreach($cetak as $hasil){
    echo "<tr>
    <td>$no</td>
    <td>".$hasil['nama']."</td>
    <td>".$hasil['jkel']."</td>
    <td>".$hasil['email']."</td>
    <td>".$hasil['alamat']."</td>
    <td>".$hasil['kota']."</td>
    <td>".$hasil['Pesan']."</td> 
    </tr>";
    $no++;
}
echo "</table>";
?>
<a text-align="justify" href="login.php">Logout</a>
</body>
</html>