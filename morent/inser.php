<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="inser.php" method="POST" enctype="multipart/form-data" >
        <input type="text" name="tital">
        <input type="text" name="subtital">
        <input type='file' name='userFile'>
        <input type='submit' name='upload_btn' value='upload' >
    </form>
    <?php
       if(isset($_POST['upload_btn'])){
        $target_Path = 'images/';
        $target_Path = $target_Path.basename( $_FILES['userFile']['name'] );
        move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path );
        echo  $target_Path;
       }

    ?>
</body>
</html>