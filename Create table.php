<?php
$conn = mysqli_connect("localhost", "root", "", "DBPraktikum9");

// Create table
$sql = "CREATE TABLE kontak ( 
    id INT(4) AUTO_INCREMENT PRIMARY KEY, 
    nama VARCHAR(30) NOT NULL,
    jkel VARCHAR(10),
    email VARCHAR(40),
    alamat VARCHAR(50),
    kota VARCHAR (20),
    Pesan TEXT)";
    
if(mysqli_query($conn, $sql)){
    echo "New Table created successfully";
}else{
    echo "Error : ".$sql."<br>".mysqli_error($conn);
}
  
mysqli_close($conn);
?>