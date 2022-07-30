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
<?php include "Header.php"?>
<?php include "defaultadmin.php"?>

<form action="/action_page.php">
<div class="container">
    <h1>Add a new event</h1><br><br>
    <label for="name"><b>Event title</b></label>
    <input type="text" placeholder="Enter event title" name="name" id="name" required>
    <input type="file" id="myFile" name="filename">
    <h3>Upload Animal for event</h3><br><br>
    <label for="gender"><b>Decription</b></label><br><br>
    <textarea class="textarea" id="w3review" name="w3review" rows="4" cols="50" placeholder="type your message here"></textarea>
    <label for="name"><b>Event Duration</b></label>
    <input type="text" placeholder="Enter Event Duration" name="name" id="name" required>

    <label for="date"><b>Event Start Date</b></label>
    <input type="date" placeholder="Animal date of birth" name="date" id="date" required>
    <button type="submit" class="registerbtn">Add Event</button>
  </div>
  

</form>

</body>
</html>