<?php

$db = "lift";
$user = "root";  
$pass = "";
$host = ""; 

$connect = mysqli_connect($host,$user,$pass);
mysqli_select_db($connect, $db);

$var1 = $_GET ['databerat'] ?? "";
$var2 = $_GET ['datanaik'] ?? "";
$var3 = $_GET ['dataturun'] ?? "";

mysqli_query ($connect,"INSERT INTO monitoring (Berat,Naik,Turun) VALUES ('$var1','$var2','$var3')"); 

if($connect){
	echo ''; 
}
else{
	echo'error connection';
}
?>