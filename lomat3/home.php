<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <nav class="nav  navbar-light bg-light" >
        <ul class="d-flex navbar-collapse">
            <li class="nav-item "><a class="nav-link text-dark" href="">HOME</a></li>
            <li class="nav-item"><a class="nav-link" href="">LAPTOP</a></li>
            <li class="nav-item"><a class="nav-link" href="">COMPONENT</a></li>
            <li class="nav-item"><a class="nav-link" href="">PC BUILDER</a></li>
            <li class="nav-item"><a class="nav-link" href="">ACCESSONS</a></li>
        </ul>
    </nav>
    <img src="https://th.bing.com/th/id/R.bd709dccda81f5b724b3e0799c21ca71?rik=When%2bPzDiyFe6Q&pid=ImgRaw&r=0" alt="" class="w-100 row-cols-2 bg-black" >
    <div class="justify-content-around d-flex flex-wrap ">
    <?php
    
    include "config.php";
    $sqlshow= "select * from msi";
    $data =mysqli_query($con,$sqlshow);
        while ($result = mysqli_fetch_array($data)){
            echo "
            <div class= card id=allitem >
            <img class=card-img-top id=card-item src='".$result['img']."' src=images/plan1.webp alt=Card image cap>
            <div class=card-body>
                <p class=card-text>".$result['tital']."</p>
                <hr>
              <button >
              <h3>$".$result['price'].".00</h3>
              </button>
            </div>
        </div>
            ";
     }
    ?>
    </div>
</body>
</html>