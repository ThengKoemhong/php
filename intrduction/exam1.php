
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   
<div class = "d-flex w-100 bg-dark ">
<img src="https://www.wooribank.com.kh/wp-content/uploads/2022/07/cropped-cropped-Header-Logo-1.png" class = "w-75 p-20 " >
  <img class src="https://www.aeon.com.hk/html/assets/asapp/images/wakuBanner.png" class = "w-25">  
</div>

<nav class="navbar navbar-dark navbar-expand-lg bg-secondary justify-content-between ">
    <ul class="navbar-nav d-flex ">
        <li class="nav-item"><a href="" class="nav-link">HOME</a></li>
        <li class="nav-item"><a href="" class="nav-link">FEATURES</a></li>
        <li class="nav-item"><a href="" class="nav-link">PRICING</a></li>
        <li class="nav-item"><a href="" class="nav-link">ABOUT</a></li>
        
    </ul>
<form action="" class="form-inline d-flex">
    <input type="search" class="form-control w-100 ">
    <button class="btn btn-success" >Search</button>
</form>

</nav>
  
    <table class = "table w-100 table-striped mx-auto table-hover table-light p-1">
        <thead >
            <tr> 
            <th class = "text-dark">ID</th>
            <th class =" text-dark ">NAME</th>
            <th class = "text-dark ">EDITE</th>
            <th class = "text-dark ">NAME</th>
        </tr>
       
        </thead>
        <tbody>
            <?php
          $servername = "127.0.0.1:3306";
          $database = "introduction";
          $username = "root";
          $password = "";
        
          $sql ="select * from test";
          $con = mysqli_connect($servername,$username,$password,$database);
          $data =mysqli_query($con,$sql);
          $total=mysqli_num_rows($data);
              while ($result = mysqli_fetch_array($data)){
                  echo "
                  <tr >
                  <td>".$result['id']."</td>
                  <td>".$result['name']."</td>
                  <td> <button class='btn btn-outline-danger'>
                  <a href='update.php?id=$result[id] & name=$result[name]' class='text-dark text-decoration-none '>EDITE</a>
                  </buttom></td>
                  <td> <button class='btn btn-outline-danger'>
                  <a href='delete.php?id=$result[id]' class='text-dark text-decoration-none '>DELETE</a>
                  </buttom></td>
              </tr>
                  ";
              }
          
            ?>
     
        </tbody>
    </table>
    <button class="btn btn-outline-danger w-25" ><a class="text-decoration-none text-dark" href="input.php">ADD NEW </a></button>
</body>
</html>
