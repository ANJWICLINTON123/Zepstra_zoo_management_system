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
$usernameErr = $loginerromessage= $errormessage =$pswerr = "";
$name= $psw = "";

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

  if (isset($_POST['submit'])){
		
		$name = $_POST['name']; // removes backslashes //escapes special characters in a string
		$psw = $_POST['psw'];
		
	//Checking is user existing in the database or not
  do{
    if (empty($name)||empty($psw)){
      $errormessage = "<span class= 'message'>All the files are required</span>";
     // $errormessage = "All the files are required";
      break;
    }
        $sql = "SELECT * FROM registration WHERE name='".$name."' and psw='".$psw."'";
		$result = mysqli_query($conn,$sql) or die(mysql_error());
		$rows = mysqli_fetch_array($result);
        if($rows == true){
			// $_SESSION['name'] = $name;     
      
			// header("Location: admin.php"); // Redirect user to index.php	
      header("Location: admin.php");
      
            }else{
              $loginerromessage = "<div class='form'><h3>Username/password is incorrect.</h3></div>";
				}
    }while(false);

  
  }
?>


<form method="post">  
  <div class="container">
  <?php echo $loginerromessage;?>
    <h1>Login as an Admin</h1>
    <p>Please fill in this form to login.</p>
    <hr>
    <label for="name"><b>username</b></label>
    <input type="text" name="name" id ="name" placeholder="enter username.." value = "<?php $name;?>">
       <span class="error"> <?php echo $usernameErr;?></span>
    <label for="psw"><b>Password</b></label>
    <input type="password" id = "psw" placeholder="Enter Password" name="psw" value = "<?php $psw;?>">
    <span class="error"> <?php echo $pswerr;?></span>
    <?php echo $errormessage;?><br>
    <input class = "forms" type="submit" name="submit" value="Login"> 
  </div>
</form> 
<?php include ("Footer.php") ?>
</body>
</html>