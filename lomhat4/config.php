<?php
$servername = "127.0.0.1:3306";
$database = "introduction";
$username = "root";
$password = "";
$tbl_name="msi";
$con = mysqli_connect($servername,$username,$password,$database);
if ($con->connect_error) {
die("Connection failed: ".$con->connect_error);
}
?>