<?php
 include("dbconnection.php");
   $con=dbconnection();
   $querys=("SELECT Model_Name from tbl_Model ");   
     $exe=mysqli_query($con,$querys);
     $arr=[];
     while ($row=mysqli_fetch_array($exe)){
       $arr[]=$row;
     }
     print(json_encode($arr));
   
?>