<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .img{
            width: 100px;
            height: 50px;
        }
        </style>
</head>
<body>
    <h1 class="text-bg-danger p-1">
        I'M ADMIN
    </h1>
    <table class="table w-100 table-striped table-hover table-light">

<thead>
    <tr>
        <th>ID</th>
        <th>TTITAL</th>
        <th>PRICE</th>
        <th>IMG</th>
        <th>EDITE</th>
    </tr>
</thead>
<tbody>
    <?php
    
    include "config.php";
    $sqlshow= "select * from msi";
    $data =mysqli_query($con,$sqlshow);
        while ($result = mysqli_fetch_array($data)){
            echo "
            <tr>
            <td>".$result['id']."</td>
            <td>".$result['tital']."</td>
            <td>".$result['price']."</td>
            <td><img class=img src='".$result['img']."'>
            </td>
            <td>
            <button class=btn btn-outline-secondary>
            <a href= 'update.php?id=$result[id] & tital=$result[tital]  & price=$result[price] & userFile=$result[img]' class=' btn btn-outline-danger'>EDITE</a>
            </button>
            </td>
            </tr>
            ";
          
        }
    ?>
</tbody>

    </table>
</body>
</html>