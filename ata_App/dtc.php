<?php
 include("dbconnection.php");
   $con=dbconnection();
   $DTC_Code=$_POST['DTC_Code']; 
    $querys=("SELECT Endtc,Khdtc FROM tbl_dtcs WHERE DTC_Code='$DTC_Code'");    
    $exe=mysqli_query($con,$querys);
    $arr=[];
    while ($row=mysqli_fetch_array($exe)){
       $arr[]=$row;
     }
    print(json_encode($arr));
   
?>