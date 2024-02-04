<?php
 include("dbconnection.php");
   $con=dbconnection();   
  // $typSearch=$_POST['typSearch'];
 // $modelName=$_POST['modelName'];  
    $querys=("SELECT Brand_Name,Image FROM tbl_brand ");    
    $exe=mysqli_query($con,$querys);
    $arr=[];
    while ($row=mysqli_fetch_array($exe)){
       $arr[]=$row;
     }
    print(json_encode($arr));
   
?>