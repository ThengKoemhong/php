<?php
$servername = "127.0.0.1:3306";
$database = "introduction";
$username = "root";
$password = "";
$tbl_name="teat";
$con = mysqli_connect($servername,$username,$password,$database);
if ($con->connect_error) {
die("Connection failed: ".$con->connect_error);
}
$sql = "DELETE FROM test WHERE id='" . $_GET["id"] . "'";
    if(mysqli_query($con,$sql)){
        echo '<script>alert("Enter Data succesfully")</script>'; 
     
    } else{
        echo "ERROR: Could not able to execute $sql. ".mysqli_error($con);
    }
?>