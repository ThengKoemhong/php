<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Document</title>
</head>
<body style="width: 100%;height: 600px;" class="justify-content-center align-items-center d-flex">
    <form action="login.php" class="w-25 h-25 shadow d-flex justify-content-center align-items-center rounded-2" method="POST">
        <table >
            <tr class="p-4">
                <td>
                   <label for="">EMAIL</label>
                </td>
                <td>
                    <input type="text" name="email" class="form-control">
                </td>
                <tr class="p-4">
                    <td>
                       <label for="">PASSWORD</label>
                    </td>
                    <td>
                        <input type="password" name="pass" class="form-control">
                    </td>
                </tr>
                <tr class="p-4">
                    <td></td>
                    <td>
                        <input type="submit" name="save" class="btn btn-outline-danger form-control" value="Save">
                    </td>
                </tr>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['save'])){
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            if($email === "hong123@gmail.com"){
                if($pass ==="12341234"){
                    echo '<script>
                    $(document).ready(function(){
                        swal("Good job!", "You clicked the button!", "success");
                    }) </script>';
                }else{
                    echo '    
                    <script>
                        $(document).ready(function(){
                            swal("Fail !", "You clicked the button!", "error");
                        })
                    </script>';
                }
            }
        }
    ?>
</body>
</html>