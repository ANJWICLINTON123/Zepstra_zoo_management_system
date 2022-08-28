<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="contact1.css">
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <!-- ##################### header ######################## -->
    <?php include ('Header.php');?>
    <!-- ##################### Registration form ######################## -->

<?php
// define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email = $job_type =$comment= $age= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "*Name is required <br><br>";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr ="<br>*Only letters and white space allowed<br><br>";
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

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["age"])) {
    $age = "";
  } else {
    $age = test_input($_POST["age"]);
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

$name = stripslashes($_REQUEST['name']);
//escapes special characters in a string
$email = stripslashes($_REQUEST['email']);
$job_type = stripslashes($_REQUEST['job_type']);
$age = stripslashes($_REQUEST['age']);
$comment = stripslashes($_REQUEST['comment']);
do{ 

  if (empty($name)||empty($email)||empty($job_type)||empty($age)||empty($comment)){
    echo "<br><br><br><span class= 'message'>All the files are required</span>";
   // $errormessage = "All the files are required";
    break;
  }
$sql = "INSERT INTO jobapply (name, email, job_type, age, comment)
    VALUES ('$name',
  '$email', '$job_type', '$age','$comment')";

if(mysqli_query($conn, $sql)){
echo "<script> alert('application submitted successully')</script>";
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
  <div class="container mycontainer">
    <h1>APPLY NOW</h1>
    <p>Please fill in this form to <b>APPLY</b>.</p>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" name="name" placeholder="Your name..." value="<?php echo $name;?>">
    <span class="error"> <?php echo $nameErr;?></span>

    <label for="email"><b>Email</b></label>
    <input type="text" name="email" placeholder="enter email.." value="<?php echo $email;?>">
       <span class="error"> <?php echo $emailErr;?></span>

    <label for="email"><b>Job name</b></label><br><br>
    <select class="selected" name="job_type" id="position" required>
    <option value="select position">select job</option>
    <option value="MANAGER">Medical Assistant</option>
    <option value="V-MANAGER">Farmer</option>
    <option value="DEVELOPER">Guard</option>
    <option value="COORDINATOR">COORDINATOR</option>
  </select>
  <br><br>

    <label for="number"><b>age</b></label>
    <input type="number" placeholder="Enter your Age" name="age" value="<?php echo $age;?>">
    <label for="">Address</label> 
    <textarea class="textarea" id="w3review" name="comment" rows="4" cols="50" placeholder="type your message here"><?php echo $comment;?></textarea>
    <hr>
    <input class ="applybn" type="submit" name="submit" value="apply"> 
    <button class ="cancel" role = "button" type ="button" onclick = "location.href ='Vacancies.php'">cancel</button>
  </div>
  
  <div class="container signin">
  </div>
</form>

<?php include ("Footer.php") ?>
</body>
</html>