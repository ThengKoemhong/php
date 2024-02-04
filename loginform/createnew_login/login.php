<!DOCTYPE html>
<html>

<head>
  <title>Login and Create Account</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<style>
  body {
    width: 100%;
    height: 600px;
  }

  div {
    width: 400px;
    height: 400px;
  }

  form {
    text-align: start;
  }

  label {
    font-size: 20;
  }

  button {
    width: 100%;
  }
</style>

<body class="justify-content-center align-items-center d-flex">
  <div class="shadow btn btn-outline-dark rounded-3">
    <h1>Login or Create Account</h1>
    <form id="loginForm" action="login.php" class="align-items-baseline" method="POST">
      <label for="">Email :</label>
      <input class="form-control" placeholder="Email" type="text" id="username" name="username" /><br />
      <label for="">Password</label>
      <input class="form-control" placeholder="Password" type="password" id="password" name="password" /><br />

      <button type="submit" id="btn" class="btn btn-outline-danger" name="save">
        Login
      </button>
      <input type="submit" id="toggleForms" name="link" class="btn btn-outline-danger form-control" value="Create a new account" style=" margin-top: 10px;">
    </form>
    <form id="createAccountForm" method="POST" action="login.php">
      <label for="">Email :</label>
      <input class="form-control" placeholder="New Email" type="text" id="newusername" name="newemail"><br />
      <label for="">Password</label>
      <input class="form-control" placeholder="New Password" type="password" id="newpassword" name="newpass" /><br />
      <button type="submit" id="btnnew" name="btnnew" class="form-control btn btn-outline-danger">Create Account</button>
    </form>
  </div>
<?php
    include "config.php";
    echo '<script>
    $(document).ready(function(){
        $("#createAccountForm").hide(1000);
    }) </script>';
    if(isset($_POST['btnnew'])){
        $email = $_POST['newemail'];
        $pass = $_POST['newpass'];
        $sql="  INSERT into acc(id,email,password) values(null,'$email','$pass');";
    if(mysqli_query($con,$sql)){
        echo '<script>
        $(document).ready(function(){
            swal("Create Account Success!", "You clicked the button!", "success");
        }) </script>';
    } else{
        echo '    
        <script>
                $(document).ready(function(){
                    swal("Fail !", "You clicked the button!", "error");})
         </script>';
    }
    }
    if(isset($_POST['link'])){
        echo '<script>
        $(document).ready(function(){
            $("#createAccountForm").toggle(1000);
            $("#loginForm").hide(1000);
        }) </script>';
    }
    if(isset($_POST['save'])){
      $email = $_POST['username'];
      $pass = $_POST['password'];
      $sqlshow= "select * from acc";
    $data =mysqli_query($con,$sqlshow);
        while ($result = mysqli_fetch_array($data)){
          if($email == $result['email']){
            if($pass == $result['password']){
              header("Location: http://localhost/loginform/createnew_login/homepage.php");
            }
          }
        }
    }
?>
</body>
</html>