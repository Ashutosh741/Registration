
<?php 

$sucess = 0;
$user = 0;
$invalid = 0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword = $_POST['cpassword'];

    $sql = "Select * from `registration` where
    username='$username'";

    $result = mysqli_query($con,$sql);

    if($result){
      $num=mysqli_num_rows($result);
      if($num>0){
        // echo "user already exists";
        $user = 1;
      }else {
        if($cpassword === $password){

        $sql = "insert into `registration` (username ,password) values('$username','$password')";
        $result=mysqli_query($con,$sql);
        if($result){
          $sucess = 1;
          header('location:login.php');
          // echo "signup successful";
        }
      }else{
          // die(mysqli_error($con));
          $invalid = 1;
        }

      }
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIGN UP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <?php
      if($user){
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>oh no sorry!</strong> user already exists
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        ';
      }
     ?>

      <?php
        if($sucess){
          echo '
          <div class="alert alert-sucess alert-dismissible fade show" role="alert">
          <strong>congratulations🥳</strong>sign up sucessful
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
          ';
        }
      ?>
            <?php
        if($invalid){
          echo '
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>ohh sorry</strong>password did not match
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
          ';
        }
      ?>

    <h1 class="text-center mt-5">Sign up Page</h1>
    <div class="container">
    <form action="signup.php" method="post">
        <div class="mb-3 mt-5">
            <label class="form-label" >Username</label>
            <input type="text" class="form-control" name = "username" placeholder="Enter your username">
        </div>
        <div class="mb-3">
            <labelclass="form-label" >Password</label>
            <input type="password" name = "password" class="form-control" placeholder="Enter your password">
        </div>
        <div class="mb-3">
            <labelclass="form-label" >Confirm Password</label>
            <input type="password" name = "cpassword" class="form-control" placeholder="Confirm your password">
        </div>

        <button type="submit" class="btn btn-primary w-100">SIGN UP</button>
    </form>
    </div>
  </body>
</html>