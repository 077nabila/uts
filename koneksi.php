<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "db_nabila"; 
$koneksi = mysqli_connect($host,$user,$password,$dbname);
if (!$koneksi) {
    echo "koneksi gagal";
}
?>