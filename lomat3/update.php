<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <style>
        .shadow{
            width: 500px;
            height: 250px;
            margin-top :200px
        }
        table{
            margin:20px
        }
    </style>
    <title>MSI</title>
    
</head>
<body class="d-flex align-content-center align-items-center flex-column">
<form class=" shadow mx-auto p-3align-content-center" action='' method='POST' enctype='multipart/form-data' >
    <table>
        <tbody>
            <tr>
                <td>
                <label for="">ID :</label>
                </td>
                <td>
                    <input type="text" name="id" class="form-control" value="<?php echo $_GET['id']?>">
                </td>
            </tr>
            <tr>
                <td>
                <label for="">TITLE :</label>
                </td>
                <td>
                <input type="text" name="tital" class="form-control" value=" <?php echo $_GET['tital']?>" >
                </td>
            </tr>
            <tr>
                <td>
                <label for="">PRICE :</label>
                </td>
                <td>
                <input type="text" name="price" class="form-control" value="<?php echo $_GET['price']?>">
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                <input type='file' name='userFile' class="btn btn-outline-danger">
                </td>
            </tr>
            <tr>
                <td>
               
                </td>
                <td>
                <input type='submit' name='upload_btn' class="btn btn-outline-danger align-items-end" value='upload'>
                </td>
            </tr>
        </tbody>
    </table>

</form>
<div class="d-flex">
<?php
include "config.php";
if(isset($_POST['upload_btn'])){
    $target_Path = "images/";
    $target_Path = $target_Path.basename( $_FILES['userFile']['name'] );
    move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path );
    $sql="UPDATE msi set tital='".$_POST['tital']."' , price='".$_POST['price']."' , img='$target_Path' where id='".$_POST['id']."'";
    if(mysqli_query($con,$sql)){
        echo "Record Modified Successfully";
    } else{
        
        echo "ERROR: Could not able to execute $sql. ".mysqli_error($con);
    }
}

?>
</div>
</body>
</html>
   </form>