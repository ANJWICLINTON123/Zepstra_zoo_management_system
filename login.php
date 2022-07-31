<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <!-- ##################### header ######################## -->
    <?php include ('Header.php');?>


    <form action="/action_page.php">
  <div class="container">
    <h1>Login</h1>
    <p>Please fill in this form to login.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    <button type="submit" class="registerbtn">login</button>
  </div>
  
  <div class="container signin">
  </div>
</form>



    <?php include ("Footer.php") ?>
</body>
</html>