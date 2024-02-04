<?php
 include("dbconnection.php");
   $con=dbconnection();
   $brandNamea=$_POST['Brand_Name'];  
   $querys=("SELECT tbl_Brand.Brand_Name, tbl_Model.Model_Name
      FROM tbl_Brand INNER JOIN tbl_Model ON tbl_Brand.Brand_ID = tbl_Model.Brand_ID where tbl_Brand.Brand_Name='$brandNamea'
      ");
     $exe=mysqli_query($con,$querys);
     $arr=[];
     while ($row=mysqli_fetch_array($exe)){
       $arr[]=$row;
     }
     print(json_encode($arr));
     
?>