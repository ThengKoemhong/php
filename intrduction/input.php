<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body class="">
    <h1 class= "text-bg-dark p-1" >Enter Data</h1>
   <form action="controller.php" method="post">
  <div class="mb-3 mt-3">
    <label lass="form-label">ID :</label>
    <input type="number" class="form-control" id="id" placeholder="Enter ID" name="id">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">NAME :</label>
    <input type="text" class="form-control" id="name" placeholder="Enter NAME" name="name">
  </div>
  <input class="btn btn-outline-secondary w-25" type="submit" value="Add" name="btnadd"/>
  </div>
</form>
</body>
</html>