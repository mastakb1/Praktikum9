<?php 

include 'conn.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:print.php");
}else{
    header("location:login.php?pesan=gagal");
}
?>