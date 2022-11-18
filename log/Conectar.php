<?php 

$server='192.168.1.25';
$user='root';
$pass='root';
$db='users';

$conn=mysqli_connect($server,$user,$pass,$db);

if(!$conn){
	die('Conexión fallida');
}



?>