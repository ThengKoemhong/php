<?php
 include("dbconnection.php");
   $con=dbconnection();
   $Doc_Repair_ID=$_POST['Doc_Repair_ID'];    
   $querys=("
   SELECT tbl_document_repair.Doc_Repair_ID,tbl_document_repair.Doc_Repair_Name, tbl_document_repair_detail.fileName, 
   tbl_document_repair_detail.path_of_document
    FROM tbl_document_repair INNER JOIN tbl_document_repair_detail ON 
    (tbl_document_repair.Doc_Repair_ID = tbl_document_repair_detail.Doc_Repair_ID) 
    AND (tbl_document_Repair.Doc_Repair_ID = tbl_document_repair_detail.Doc_Repair_ID) 
    where tbl_document_repair.Doc_Repair_ID='$Doc_Repair_ID'
   ");   
     $exe=mysqli_query($con,$querys);
     $arr=[];
     while ($row=mysqli_fetch_array($exe)){
       $arr[]=$row;
     }
     print(json_encode($arr));
   
   
?>