<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <!-- ##################### header ######################## -->
    <?php include ('Header.php');?>
    <!-- ##################### Registration form ######################## -->

<?php
// define variables and set to empty values
$usernameErr = $emailErr = $pswerr = $positionErr= "";
$username = $email = $position = $psw = "";

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
  
  if (empty($_POST["email"])) {
    $emailErr = "<br> *Email is required<br><br>";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "<br> *Invalid email format<br><br>";
    }
  }

  if(empty(trim($_POST["psw"]))){
    $pswerr = "Please enter a password.";     
} elseif(strlen(trim($_POST["psw"])) < 6){
    $pswerr = "Password must have atleast 6 characters.";
} else{
    $psw = trim($_POST["psw"]);
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




require('mysql_connection.php');
$conn = mysqli_connect("localhost", "root", "", "testing");
		
// Check connection
if($conn === false){
  die("ERROR: Could not connect. "
    . mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
if(isset($_POST['username'])) { 

$username = stripslashes($_REQUEST['username']);
//escapes special characters in a string
$email = stripslashes($_REQUEST['email']);
$position = stripslashes($_REQUEST['position']);
$psw = stripslashes($_REQUEST['psw']);

// Performing insert query execution
// here our table name is college
// $sql = "INSERT INTO college VALUES ('$first_name',
// 	'$last_name','$gender','$address','$email')";

$sql = "INSERT INTO registration (username, email, position, psw)
    VALUES ('$username',
  '$email','$position','$psw')";

if(mysqli_query($conn, $sql)){
echo "<script> alert('You have have added and admin')</script>";
} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}


// Close connection
mysqli_close($conn);
}
?>
<form method="post" action="Registration.php">  
  <div class="container">
    <h1>ADD ADMIN</h1>
    <p>Please fill in this form to <b>add admin</b>.</p>
    <hr>
    <label for="username"><b>Name</b></label>
    <input type="text" name="username" placeholder="Your usernam..." value="<?php echo $username;?>">
    <span class="error"> <?php echo $usernameErr;?></span>

    <label for="email"><b>Email</b></label>
    <input type="text" name="email" placeholder="enter email.." value="<?php echo $email;?>">
       <span class="error"> <?php echo $emailErr;?></span>

    <label for="email"><b>Position</b></label><br><br>
    <select class="selected" name="position" id="position" required>
    <option value="select position">select position</option>
    <option value="MANAGER">MANAGER</option>
    <option value="V-MANAGER">V-MANAGER</option>
    <option value="DEVELOPER">DEVELOPER</option>
    <option value="COORDINATOR">COORDINATOR</option>
  </select>
  <br><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" >
    <span class="error"> <?php echo $pswerr;?></span>

    <hr>
    <input class = "forms" type="submit" name="submit" value="Add admin"> 
  </div>
  
  <div class="container signin">
  </div>
</form>

<?php include ("Footer.php") ?>
</body>
</html>