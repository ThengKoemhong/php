
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   
    <nav class="">
        <ul>
            <li><img src="https://img.icons8.com/?size=50&id=2797&format=png" alt=""></li>
            <li><a href="">កម្សាន្ត​</a></li>
            <li><a href="">បច្ចេកវិទ្យា</a></li>
            <li><a href="">ជីវិតសង្គម</a></li>
            <li><a href="">កីឡា</a></li>
            <li><a href="">ផ្លូវទៅស្រុក</a></li>
            <li><a href="">AUTO TALK</a></li>
            <li><a href="">PRODUCTCAST</a></li>
            <li><a href="">DEALS</a></li>
        </ul>
    </nav>
    <h1 class = "">ETEC TEST</h1>
    <table class = "table w-50 table-striped mx-auto h-50">
        <thead>
            <tr class =""> 
            <th class = "text-light bg-dark">ID</th>
            <th class =" text-light bg-dark">NAME</th>
            <th class = "text-light bg-dark">EDITE</th>
            <th class = "text-light bg-dark">NAME</th>
        </tr>
       
        </thead>
        <tbody>
            <?php
            $name = "THENG KOEMHONG";
            $id = 1;
            
            ?>
        <tr class = "bg-dark">
            <td><?php echo $id ?></td>
            <td><?php echo $name ; ?></td>
            <td> <a href="" class = "btn btn btn-outline-danger text-decoration-none">EDITE</a></td>
            <td > <a href="" class = "btn btn btn-outline-danger text-decoration-none">DELETE</a></td>
        </tr>
        <tr class = "bg-dark">
            <td><?php echo $id ?></td>
            <td><?php echo $name ; ?></td>
            <td> <a href="" class = "btn btn btn-outline-danger text-decoration-none">EDITE</a></td>
            <td > <a href="" class = "btn btn btn-outline-danger text-decoration-none">DELETE</a></td>
        </tr>
        </tbody>
    </table>
</body>
</html>
