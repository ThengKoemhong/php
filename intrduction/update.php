<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body class="">
    <h1 class= "text-bg-dark p-1" >UPDATE DATA</h1>
   <form action="update.php" method="get">
  <div class="mb-3 mt-3">
    <label lass="form-label">ID :</label>
    <input type="text" class="form-control" id="id" name="id" value="<?php echo $_GET['id']; ?>">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">NAME :</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $_GET['name']; ?>" >
  </div>
  <input class="btn btn-outline-secondary w-25" type="submit" value="Add" name="btnupdate"/>
  </div>
</form>
</body> 
</html>
<?php
$servername = "127.0.0.1:3306";
$database = "introduction";
$username = "root";
$password = "";
$tbl_name="test";
$con = mysqli_connect($servername,$username,$password,$database);
if(isset($_GET['btnupdate'])){
    mysqli_query($con,"UPDATE test set  name ='" . $_GET['name']."' WHERE id='" . $_GET['id'] . "'");
    '<script>alert("Update Data succesfully")</script>';
}
?>