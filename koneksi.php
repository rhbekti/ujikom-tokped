<?php 
session_start();

$host = "localhost";
$user = "root";
$password = "";
$dbname = "tokped";


$koneksi = mysqli_connect($host,$user,$password,$dbname);

if(!$koneksi){
	echo "Server Error";
}


 ?>