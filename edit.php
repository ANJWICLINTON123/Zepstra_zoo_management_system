<?php

require('mysql_connection.php');

$id = "";
$animal_name = "";
$date_of_birth = "";
$gender = "";
$description = "";
$picture = "";

$errormessage = "";
$successmessage = "";

if ($_SERVER['REQUEST_METHOD']=='GET'){
    // GET method: show the data of the client

    if (!isset($_GET['id'])){
        header("location: admin_delete_edit_animals.php");
        exit;
    }

    $id = $_GET["id"];

    //read the row of selected client from database table

    $sql = "SELECT * FROM animal_details WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
    if(!$row){
        header("location: admin_delete_edit_animals.php");
        exit;
        
        $animal_name = $_POST["animal_name"];
        $date_of_birth = $_POST["date_of_birth"];
        $gender = $_POST["gender"];
        $description = $_POST["description"];
        $picture = $_POST["picture"];
    }



}else{
      // post method: show the data of the client
      $id = $_POST["id"];
      $animal_name = $_POST["animal_name"];
      $date_of_birth = $_POST["date_of_birth"];
      $gender = $_POST["gender"];
      $description = $_POST["description"];
      $picture = $_POST["picture"];

      do {
        if (empty($id)||empty($animal_name)||empty($date_of_birth)||empty($gender)||empty($description)||empty($picture)){
            $errormessage = "All the files are required";
            break;
          }

          $sql = "UPDATE animal_details " . 
          "SET animal_name= '$animal_name', date_of_birth = '$date_of_birth', gender = '$gender', description = '$description', picture = '$picture'". 
          "WHERE id = $id";

          $result = $conn->query($sql);
          if (!$result){
            $errormessage = "invalid query: " . $conn->error;
            break;
          }

          $successmessage = "client updated correctly";

          header("location: admin_delete_edit_animals.php");
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
    <title>admin-animal-details</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<?php include ('Header.php');?>
<?php include "defaultadmin.php"?>



<form method = "post">
    <input type="hidden" name = "id" value = "<?php echo $id;?>">
<div class="container">
    <h1 class = "margin">Add to Gallery</h1><br><br>

    <?php
    if(!empty($errormessage)){
      echo "<b>$errormessage</b>";
    }
    ?>

    <label for="name"><b>Animal name</b></label>
    <input type="text" placeholder="Enter animal speciel" name="animal_name" id="animal_name" value="<?php echo $animal_name;?>">

    <label for="date"><b>Date of birth</b></label>
    <input type="date" placeholder="Animal date of birth" name="date_of_birth" id="date_of_birth" value="<?php echo $date_of_birth; ?>">

    <label for="gender"><b>Gender</b></label>
    <input type="text" placeholder="Enter animal gender " name="gender" id="gender" value="<?php echo $gender;?>">
    <label for="gender"><b>Decription</b></label><br><br>
    <textarea class="textarea" id="description" name="description" rows="4" cols="50" placeholder="type your message here" value="<?php echo $description; ?>"></textarea>
    <input type="file" name ="picture" id="myFile"  value="<?php echo $picture ?>">

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