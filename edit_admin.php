

<?php
require('mysql_connection.php');

$id = "";
$name = "";
$email = "";
$position = "";
$psw = "";
$picture = "";

$errormessage = "";
$successmessage = "";

if ($_SERVER['REQUEST_METHOD']=='GET'){
    // GET method: show the data of the client

    if (!isset($_GET['id'])){
        header("location: admin _delete_edit.php");
        exit;
    }

    $id = $_GET["id"];

    //read the row of selected client from database table

    $sql = "SELECT * FROM registration WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
    if(!$row){
        header("location: admin _delete_edit.php");
        exit;
        
        $name = $_POST["name"];
        $email= $_POST["email"];
        $position = $_POST["position"];
        $psw = $_POST["psw"];
        $picture = $_POST["picture"];
    }



}else{
      // post method: show the data of the client
      $id = $_POST["id"];
      $name = $_POST["name"];
      $email= $_POST["email"];
      $position = $_POST["position"];
      $psw = $_POST["psw"];
      $picture = $_POST["picture"];

      do {
        if (empty($id)||empty($name)||empty($email)||empty($position)||empty($psw)||empty($picture)){
            $errormessage = "All the files are required";
            break;
          }

          $sql = "UPDATE registration " . 
          "SET name= '$name', email = '$email', position = '$position', psw = '$psw', picture = '$picture'". 
          "WHERE id = $id";

          $result = $conn->query($sql);
          if (!$result){
            $errormessage = "invalid query: " . $conn->error;
            break;
          }

          $successmessage = "client updated correctly";

          header("location: admin _delete_edit.php");
          exit;

      }while(true);

}
?>

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


?>
<form method="post" action="Registration.php"> 
<input type="hidden" name = "id" value = "<?php echo $id;?>"> 
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
    <input  class ="add_animal" type="submit" name="submit" value="update"> 
    <button class ="cancel" role = "button" type ="button" onclick = "location.href ='admin _delete_edit.php'">cancel</button>
  </div>
  
  <div class="container signin">
  </div>
</form>

<?php include ("Footer.php") ?>
</body>
</html>