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


    <?php
// define variables and set to empty values
$usernameErr = $pswerr = "";
$username= $psw = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "*Name is required <br><br>";
  } else {
    $username = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
      $usernameErr ="<br>*Only letters and white space allowed<br><br>";
    }
  }
  if(empty($_POST["psw"])){
    $pswerr = "<br> *password is required<br><br>";
    $psw = "";
  }else{
    $psw = test_input($_POST["psw"]);
    // check if password is well formed
  //   if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $psw)) {
  //     $pswerr = '<br> the password does not meet the requirements!<br><br>';   
  // }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


	require('mysql_connection.php');
	session_start();
  $username = $_POST['username'];  
  $psw = $_POST['psw'];  
    
      //to prevent from mysqli injection  
      $username = stripcslashes($username);  
      $psw = stripcslashes($psw);  
      $username = mysqli_real_escape_string($conn, $username);  
      $psw = mysqli_real_escape_string($conn, $psw);  
    
      $sql = "select *from registration where username = '$username' and password = '$psw'";  
      $result = mysqli_query($conn, $sql);  
      $row = mysqli_fetch_array($result, MYSQLI_NUM);  
      $count = mysqli_num_rows($result);  
        
      if($count == 1){  
          echo "<h1><center> Login successful </center></h1>";  
      }  
      else{  
          echo "<h1> Login failed. Invalid username or password.</h1>";  
      }  
?>


<form method="post">  
  <div class="container">
    <h1>Login as an Admin</h1>
    <p>Please fill in this form to login.</p>
    <hr>
    <label for="username"><b>username</b></label>
    <input type="text" name="username" placeholder="enter username.." value="<?php echo $username;?>">
       <span class="error"> <?php echo $usernameErr;?></span>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw">
    <span class="error"> <?php echo $pswerr;?></span>
    <input class = "forms" type="submit" name="submit" value="Login"> 
  </div>
</form>



    <?php include ("Footer.php") ?>
</body>
</html>