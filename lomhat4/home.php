<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
    <style>
        .btn{
            width: 100px;
        }
        label{
            width: 200px;
            text-align:center;
        }
        form{
            width: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center flex-column">
    <form action="" method="POST" class="shadow rounded-4 d-block  m-5">
        <h3 class="text-danger p-4">PRODUCT FORM</h3>
        <table>
            <tr>
                <td><label for="" >PRODUCT NAME :</label></td>
                <td><input type="text" name="name" class="form-control"></td>
            </tr>
            <tr>
                <td><label for="">INPUT QTY :</label></td>
                <td><input type="number" name="qty" class="form-control"></td>
            </tr>
            <tr>
                <td><label for="">INPUT PRICE :</label></td>
                <td><input type="text" name="price" class="form-control"></td>
            </tr>
            <tr>
                <td><label for="">DISCOUNT :</label></td>
                <td><select name="option" id="" class="form-select bg-danger-subtle">
                    <option value="15" >15%</option>
                    <option value="30">30%</option>
                    <option value="50">50%</option>
                    <option value="65">65%</option>
                </select></td>
            </tr>
            <tr>
                <td></td>
                <td><button name="bntsubmit" class="btn btn-outline-danger">SUBMIT</button></td>
            </tr>
        </table>
        <table class="table table-striped table-hover table-light">
            <tr>
               <th>CODE</th>
               <th>NAME</th>
               <th>QTY</th>
               <th>PRICE</th>
               <th>TOTAL</th>
               <th>DISCOUNT</th>
               <th>PAY</th>
            </tr>
                <?php
               
                    error_reporting(0);
                    include "config.php";
                  $sqlshow= "select * from prosduct";
                  $data =mysqli_query($con,$sqlshow);
                      while ($result = mysqli_fetch_array($data)){
                          echo "
                          <tr>
                          <td>".$result['id']."</td>
                          <td>".$result['name']."</td>
                          <td>".$result['qty']."</td>
                          <td>".$result['price']." </td>
                          <td>".$result['total']." </td>
                          <td>".$result['dis']." </td>
                          <td>".$result['pay']." </td>
                          </tr>
                          ";
                      }
            
                ?>
          
        </table>
    </form>
<?php
include "config.php";
if(isset($_POST['bntsubmit'])){
    error_reporting(0);
    $dis=$_POST['option'];
    $id=$_POST['id'];
    $name=$_POST['name'];
    $qty=$_POST['qty'];
    $price=(int)$_POST['price'];
    $total=(int)$qty* (int)$price;
    $pay= $total/ ((int)$dis / 100) ;
    $pays=(int)$pay;
    $sql="INSERT INTO `prosduct`(`id`, `name`, `qty`,`price`, `total`,`dis`, `pay`) VALUES (null,'$name','$qty','$price','$total','$dis','$pays')";
    if(mysqli_query($con,$sql)){
        echo "Record Modified Successfully";
    } else{
        
        echo "ERROR: Could not able to execute $sql. ".mysqli_error($con);
    }
}
?>
</body>
</html>