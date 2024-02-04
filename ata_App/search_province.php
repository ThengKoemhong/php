<?php
 include("dbconnection.php");
   $con=dbconnection();  
    $querys=("SELECT Province_Name FROM tbl_provinces ");    
    $exe=mysqli_query($con,$querys);
    $arr=[];
    while ($row=mysqli_fetch_array($exe)){
       $arr[]=$row;
     }
    print(json_encode($arr));
   
?>