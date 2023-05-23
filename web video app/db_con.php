<?php
$host="localhost";
$user="root";
$password="";
$dbname="gokul";

$conn = mysqli_connect($host, $user, $password, $dbname);
if(! $conn){
  die("connection failed:" .mysqli_connect_error());
}
?>