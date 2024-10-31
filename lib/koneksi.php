<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "prebema";

$koneksi = mysqli_connect($server, $username, $password, $database);

if (mysqli_connect_errno()) {
	echo " Failed to connert to Mysql: " .mysqli_connect_error();
	exit();
}
?>