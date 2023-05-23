<?php

$conn = mysqli_connect("localhost", "root", "", "gokul");
if(! $conn){
  die("connection failed:" .mysqli_connect_error())
}
?>