<?php
$hostname  = 'localhost';
$username = 'root';
$password='';
$dbname = 'BusDB';
$connect =  mysqli_connect($hostname , $username , $password ,$dbname, 4306) or die("Error Connecting");
?>