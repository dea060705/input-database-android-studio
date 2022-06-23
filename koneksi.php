<?php 
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "db_siswa";
 
$conn = mysqli_connect($hostname,$username,$password,$database);
if(!$conn){
    echo "gagal";
}
 
 
 
?>