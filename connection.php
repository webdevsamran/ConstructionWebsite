<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "constr";

$con = mysqli_connect($hostname,$username,$password,$database);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
?>