<?php

require('mysql_connection.php');

$animal_name = "";
$date_of_birth = "";
$gender = "";
$description = "";
$picture = "";

$errormessage = "";
$successmessage = "";

if ($_SERVER['REQUEST_METHOD']=='POST'){
$animal_name = $_POST["animal_name"];
$date_of_birth = $_POST["date_of_birth"];
$gender = $_POST["gender"];
$description = $_POST["description"];
$picture = $_POST["picture"];

do{
  if (empty($animal_name)||empty($date_of_birth)||empty($gender)||empty($description)||empty($picture)){
    $errormessage = "All the files are required";
    break;
  }

  //add new client to database
$sql = "INSERT INTO animal_details (animal_name, date_of_birth, gender, description, picture)". 
        "VALUES('$animal_name', '$date_of_birth', '$gender', '$description', '$picture')";
$result = $conn->query($sql);

if (!$result){
  $errormessage = "Invalid query: ".$conn->error;
  break;
}



$animal_name = "";
$date_of_birth = "";
$gender = "";
$description = "";
$picture = "";

$successmessage = "client added correctly";

header("location: admin_delete_edit_animals.php");
exit;

}while(false);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-animal-details</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<?php include ('Header.php');?>
<?php include "defaultadmin.php"?>



<form method = "post">
<div class="container">
    <h1 class = "margin">Add to Gallery</h1><br><br>

    <?php
    if(!empty($errormessage)){
      echo "<b>$errormessage</b>";
    }
    ?>

    <label for="name"><b>Animal name</b></label>
    <input type="text" placeholder="Enter animal speciel" name="animal_name" value="<?php echo $animal_name;?>">

    <label for="date"><b>Date of birth</b></label>
    <input type="date" placeholder="Animal date of birth" name="date_of_birth" value="<?php echo $date_of_birth;?>">

    <label for="gender"><b>Gender</b></label>
    <input type="text" placeholder="Enter animal gender " name="gender" value="<?php echo $gender;?>">
    <label for="gender"><b>Decription</b></label><br><br>
    <textarea class="textarea" name="description" rows="4" cols="50" placeholder="type your message here" value="<?php echo $description;?>"></textarea>
    <input type="file" name ="picture" value="<?php echo $picture;?>">

    <?php
    if(!empty($successmessage )){
      echo "<b>$successmessage </b>";
    }
    ?>

    <button type="submit" class ="add_animal">Add Animal</button>
    <button class ="cancel" role = "button" type ="button" onclick = "location.href ='admin_delete_edit_animals.php'">cancel</button>
  </div>
  

</form>

</body>
</html>