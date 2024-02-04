<?php
 include("dbconnection.php");
   $con=dbconnection();
   $brandNamea=$_POST['provice_Name'];  
   $querys=("
      SELECT tbl_districts.District_Name,tbl_provinces.Province_Name
      FROM tbl_provinces INNER JOIN tbl_districts ON tbl_provinces.Province_ID =  tbl_districts.Province_ID
      where tbl_provinces.Province_Name='$brandNamea'
      ");
     $exe=mysqli_query($con,$querys);
     $arr=[];
     while ($row=mysqli_fetch_array($exe)){
       $arr[]=$row;
     }
     print(json_encode($arr));
     
?>