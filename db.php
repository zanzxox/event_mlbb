<?php
$host = "localhost";   
$user = "root";        
$pass = "";           
$db = "phising_manipulasi"; 

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>