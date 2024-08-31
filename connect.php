<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "josuan123";
$dbName = "moviedb";

$conn = mysqli_connect($dbHost,$dbUser,$dbPassword,$dbName);
if(!$conn){
  die("Something went wrong!");
}
?>