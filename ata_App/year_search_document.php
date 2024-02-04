<?php
 include("dbconnection.php");
   $con=dbconnection();
   $modelName=$_POST['modelName']; 
   $querys=("SELECT tbl_model.Model_Name, tbl_years.Year_Name
   FROM tbl_years INNER JOIN (tbl_model INNER JOIN tbl_year_detail
   ON tbl_model.Model_ID = tbl_year_detail.Model_ID) ON tbl_years.Years_ID = tbl_year_detail.Years_ID
   where tbl_model.Model_Name='$modelName'
   ");   
     $exe=mysqli_query($con,$querys);
     $arr=[];
     while ($row=mysqli_fetch_array($exe)){
       $arr[]=$row;
     }
     print(json_encode($arr));
   
?>