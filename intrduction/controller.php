<?php
$id = $_POST['id'];
$name= $_POST['name'];
$servername = "127.0.0.1:3306";
$database = "introduction";
$username = "root";
$password = "";
$tbl_name="test";
$con = mysqli_connect($servername,$username,$password,$database);
if ($con->connect_error) {
die("Connection failed: ".$con->connect_error);
}
if(isset($_POST['btnadd'])){ 
    $sql="insert into $tbl_name(id,name) values('$id','$name');";
    if(mysqli_query($con,$sql)){
        $message = "Record Modified Successfully";
    } else{
        
        echo "ERROR: Could not able to execute $sql. ".mysqli_error($con);
    }}
    
?>
