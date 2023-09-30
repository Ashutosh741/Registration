<?php 

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Welcome Page</title>
  </head>
  <body>
    <h1 class="text-center text-success mt-5">Welcome
        <?php 
        echo $_SESSION['username']
        
        ?>
    </h1>
    <div class="container">
        <a href = "logout.php" class="btn btn-primary mt-5">Log out</a>
    </div>
  </body>
</html>