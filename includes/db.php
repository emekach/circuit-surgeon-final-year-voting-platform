<?php
session_start();
$host="localhost";
$name="circuit";
$user="root";
$pass="";

$conn=mysqli_connect($host,$user,$pass) or die(mysqli_error());

$db_select=mysqli_select_db($conn,$name);

?>

