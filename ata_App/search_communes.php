<?php
 include("dbconnection.php");
   $con=dbconnection();
   $districtsName=$_POST['districtsName'];  
   $querys=("
      SELECT tbl_communes.Commune_Name,tbl_districts.District_Name 
      FROM tbl_districts inner JOIN tbl_communes on tbl_districts.District_ID=tbl_communes.District_ID
      where tbl_districts.District_Name='$districtsName'
      ");
     $exe=mysqli_query($con,$querys);
     $arr=[];
     while ($row=mysqli_fetch_array($exe)){
       $arr[]=$row;
     }
     print(json_encode($arr));
     
?>