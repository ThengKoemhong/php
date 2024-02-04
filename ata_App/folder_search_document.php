<?php
 include("dbconnection.php");
   $con=dbconnection();
   $years=$_POST['years']; 
   $modelName=$_POST['modelName'];
   $querys=("SELECT tbl_model.Model_Name, tbl_years.Year_Name, tbl_document_repair.Doc_Repair_Name,tbl_document_repair.Doc_Repair_ID
   FROM tbl_years INNER JOIN ((tbl_model INNER JOIN tbl_year_detail ON tbl_model.Model_ID = tbl_year_detail.Model_ID)
   INNER JOIN tbl_document_repair ON 
   tbl_year_detail.year_D_ID = tbl_document_repair.year_D_ID ) ON tbl_years.Years_ID = tbl_year_detail.Years_ID
   where tbl_years.Year_Name='$years' and tbl_model.Model_Name='$modelName'   
   ");   
     $exe=mysqli_query($con,$querys);
     $arr=[];
     while ($row=mysqli_fetch_array($exe)){
       $arr[]=$row;
     }
     print(json_encode($arr));
     
   
?>