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
$name = $email = $position = $psw = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $usernameErr = "*Name is required <br><br>";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
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
		
// Check connection
if($conn === false){
  die("ERROR: Could not connect. "
    . mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
if(isset($_POST['submit'])) { 

$name = $_POST['name'];
$email = $_POST['email'];
$position = $_POST['position'];
$psw = $_POST['psw'];
$picture = $_POST['picture'];

do{
  if (empty($name)||empty($email)||empty($position)||empty($psw)||empty($picture)){
    echo "<br><br><br><span class= 'message'>All the files are required</span>";
   // $errormessage = "All the files are required";
    break;
  }
$sql = "INSERT INTO registration (name, email, position, psw, picture)
    VALUES ('$name',
  '$email','$position','$psw', '$picture')";

if(mysqli_query($conn, $sql)){
echo "<script> alert('You have have added and admin')</script>";
header("location: admin _delete_edit.php");
} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
}while(false);

// Close connection
mysqli_close($conn);
}
?>
<form method="post">  
  <div class="container">
    <h1>ADD ADMIN</h1>
    <p>Please fill in this form to <b>add admin</b>.</p>
    <hr>
    <label for="username"><b>Name</b></label>
    <input type="text" name="name" placeholder="Your usernam..." value="<?php echo $name;?>">
    <span class="error"> <?php echo $usernameErr;?></span>

    <label for="email"><b>Email</b></label>
    <input type="text" name="email" placeholder="enter email.." value="<?php echo $email;?>">
       <span class="error"> <?php echo $emailErr;?></span>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" >
    <span class="error"> <?php echo $pswerr;?></span>
    <label for="email"><b> Select Position</b></label><br><br>
    <select class="selected" name="position" id="position" required>
    <option value="MANAGER">MANAGER</option>
    <option value="V-MANAGER">V-MANAGER</option>
    <option value="DEVELOPER">DEVELOPER</option>
    <option value="COORDINATOR">COORDINATOR</option>
  </select>
  <br><br>
  <input type="file" name ="picture" id="myFile" value="<?php echo $picture ?>">

    <hr>
    <input class = "forms" type="submit" name="submit" value="Add admin"> 
  </div>
  
  <div class="container signin">
  </div>
</form>

<?php include ("Footer.php") ?>
</body>
</html>