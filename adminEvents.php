<?php

require('mysql_connection.php');
$event_name = "";
$event_duration = "";
$description = "";
$event_date = "";
$picture = "";

$errormessage = "";
$successmessage = "";

if ($_SERVER['REQUEST_METHOD']=='POST'){
  $event_name  = $_POST["event_name"];
  $event_duration = $_POST["event_duration"];
  $description  = $_POST["description"];
  $event_date = $_POST["event_date"];
  $picture= $_POST["picture"];

do{
  if (empty($event_name)||empty($event_duration)||empty($description)||empty($event_date)||empty($picture)){
    $errormessage = "All the files are required";
    break;
  }

  //add new client to database
$sql = "INSERT INTO events (event_name, event_duration, description, event_date, picture)". 
        "VALUES('$event_name', '$event_duration', '$description', '$event_date', '$picture')";
$result = $conn->query($sql);

if (!$result){
  $errormessage = "Invalid query: ".$conn->error;
  break;
}



$event_name = "";
$event_duration = "";
$description = "";
$event_date = "";
$picture = "";

$successmessage = "client added correctly";

header("location: admin_delete_edit_events.php");
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

<form method="post">
<div class="container">
    <h1>Add a new event</h1><br><br>
    <?php
    if(!empty($errormessage)){
      echo "<b>$errormessage</b>";
    }
    ?>
    <label for="name"><b>Event title</b></label>
    <input type="text" placeholder="Enter event title" name="event_name" id="name" >
    <label for="name"><b>Event Duration</b></label>
    <input type="text" placeholder="Enter Event Duration" name="event_duration" id="name" >
    <label for="gender"><b>Decription</b></label><br><br>
    <textarea class="textarea" id="w3review" name="description" rows="4" cols="50" placeholder="type your message here"></textarea>
    <label for="date"><b>Event Start Date</b></label>
    <input type="date" placeholder="Animal date of birth" name="event_date" id="date" >
    <input type="file" id="myFile" name="picture">
    <h3>Upload Animal for event</h3><br><br>

    <?php
    if(!empty($successmessage )){
      echo "<b>$successmessage </b>";
    }
    ?>

<button type="submit" class ="add_animal">Add Event</button>
<button class ="cancel" role = "button" type ="button" onclick = "location.href ='admin_delete_edit_events.php'">cancel</button>
</div>
  

</form>

</body>
</html>