<?php
 
 function dbconnection()
 {
     $con = mysqli_connect("Localhost","root","","ata_app");
     return $con;
 }
?>