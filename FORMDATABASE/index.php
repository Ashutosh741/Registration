<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel = "stylesheet" href = "style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">HTML FORM</h1>
    <div class="container mt-5">
    <form action="connect.php" method = "post">
        <div class="">
        <label>Name</label>
        <input autocomplete="off" type="text" name = "name" placeholder="Enter your name">
        </div>
        <div class="">
        <label>Email</label>
        <input autocomplete="off" type="email" name = "email" placeholder="Enter your email">
        </div>
        <div class="genderContainer">
        <label>Gender</label>
        <input  class = "gender1" type="radio" value = "m" name = "gender">Male
        <input  class = "gender1" type="radio" value = "f" name = "gender">Female
        <input  class = "gender1" type="radio" value = "o" name = "gender">others
        </div>
        <div class="">
        <label>Mobile</label>
        <input autocomplete="off" type="text" name = "mobile" placeholder="Enter your mobile number">
        </div>
        <div class="">
        <label>Password</label>
        <input autocomplete="off" type="password" name = "password" placeholder="Enter your password">
        </div>
        <div class="mt-3 mb-3 text-center">
            <button type = "submit" class="btn btn-primary">Submit</button>
        </div>

        
    </form>
    </div>

  </body>
</html>