<?php
 include("dbconnection.php");
   $con=dbconnection();
   $querys=("
            SELECT Slide_Show_Path FROM tbl_slideshow
      ");
     $exe=mysqli_query($con,$querys);
     $arr=[];
     while ($row=mysqli_fetch_array($exe)){
       $arr[]=$row;
     }
     print(json_encode($arr));
     
?>