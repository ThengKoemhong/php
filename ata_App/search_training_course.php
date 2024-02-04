<?php
 include("dbconnection.php");
   $con=dbconnection();
   $modelName=$_POST['modelName']; 
   $querys=("SELECT tbl_training_course.Training_Name, tbl_training_course.Photo, tbl_Model.Model_Name
      FROM tbl_Model INNER JOIN tbl_training_course ON tbl_Model.Model_ID = tbl_training_course.Model_ID
      where tbl_Model.Model_Name='$modelName'
      ");    
     $exe=mysqli_query($con,$querys);
     $arr=[];
     while ($row=mysqli_fetch_array($exe)){
       $arr[]=$row;
     }
     print(json_encode($arr));
   
?>