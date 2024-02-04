<?php
 include("dbconnection.php");
   $con=dbconnection();   
    $querys=("SELECT expert_Name_Kh,expert_Name_En FROM tbl_expert");    
    $exe=mysqli_query($con,$querys);
    $arr=[];
    while ($row=mysqli_fetch_array($exe)){
       $arr[]=$row;
     }
    print(json_encode($arr));
   
?>