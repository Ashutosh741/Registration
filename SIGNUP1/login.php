
<?php 

$login = 0;
$invalid = 0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    // $sql="insert into `registration`(username,password) values('$username','$password')";
    // $result = mysqli_query($con,$sql);

    // if($result){
    //     echo "Data inserted successfully";
    // }else{
    //     die(mysqli_error($con));
    // }

     $sql = "Select * from `registration` where
     username='$username' and password = '$password'";

    $result = mysqli_query($con,$sql);

    if($result){
      $num=mysqli_num_rows($result);
      if($num>0){
        // echo "user already exists";
        $login = 1;
        session_start();
        $_SESSION['username'] = $username;
        header('location:home.php');
      }else {

        $invalid = 1;

      }
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <?php
      if($login){
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Yayy</strong> Login Successful
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        ';
      }
     ?>

      <?php
        if($invalid){
          echo '
          <div class="alert alert-sucess alert-dismissible fade show" role="alert">
          <strong>So sorry</strong>username / password is wrong
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
          ';
        }
      ?>


    <h1 class="text-center mt-5">LOGIN TO OUR WEBSITE</h1>
    <div class="container">
    <form action="login.php" method="post">
        <div class="mb-3 mt-5">
            <label class="form-label" >Username</label>
            <input type="text" class="form-control" name = "username" placeholder="enter your username">
        </div>
        <div class="mb-3">
            <labelclass="form-label" >Password</label>
            <input type="password" name = "password" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary w-100">LOGIN</button>
    </form>
    </div>
  </body>
</html>