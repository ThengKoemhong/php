<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <style>
        .shadow{
            width: 200px;
            height: 300px;
        }
    </style>
    <title>MSI</title>
    
</head>
<body class="d-flex align-content-center align-items-center flex-column">
<form class="w-50 h-50 shadow mx-auto p-3align-content-center" action='' method='POST' enctype='multipart/form-data' >
<label for="">id :</label>
<input type="text" name="id" class="form-control">
<label for="">tital:</label>
<input type="text" name="tital" class="form-control">
<label for="">price</label>
<input type="text" name="price" class="form-control">
<img src="<?php echo "$img"?>" class="w-25 h-25 bg-danger-subtle" alt="">
<label for="">IMG :</label>
<input type='file' name='userFile' class="btn btn-outline-danger"><br>
<input type='submit' name='upload_btn' value='upload'>
</form>
<div class="d-flex">
<?php
include "config.php";
$target_Path = "images/";
$target_Path = $target_Path.basename( $_FILES['userFile']['name'] );
$id=$_POST['id'];
$tital = $_POST['tital'];
$price=$_POST['price'];
$img=$_FILES['userFile']['name'];
move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path );
if(isset($_POST['upload_btn'])){
    $sql="insert into msi(id,tital,img,price) values('$id','$tital','$img','$price');";
    if(mysqli_query($con,$sql)){
        $message = "Record Modified Successfully";
    } else{
        
        echo "ERROR: Could not able to execute $sql. ".mysqli_error($con);
    }
}
$sqlshow= "select * from msi";
$data =mysqli_query($con,$sqlshow);
    while ($result = mysqli_fetch_array($data)){
        echo '<img class="shadow" src="images/'.$result['img'].'">';
    }
?>
</div>
</body>
</html>