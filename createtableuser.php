<?php
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "dbpraktikum9";

include "conn.php";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("connection failed : " . mysqli_connect_error()); 

}

$querysql = "CREATE TABLE user(
    id INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username  VARCHAR(30),
    password  VARCHAR(40))";

if(mysqli_query($conn, $querysql)){
    echo "Table created succesfully";
} else{
    echo "Error creating table". mysqli_error($conn);
}

mysqli_close($conn)
?>