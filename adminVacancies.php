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

<form action="/action_page.php">
<div class="container">
    <h1>Add Vacancies</h1><br><br>
    <label for="name"><b>Vacancie title</b></label>
    <input type="text" placeholder="Enter event title" name="name" id="name" required>
    <label for="gender"><b>Decription</b></label><br><br>
    <textarea class="textarea" id="w3review" name="w3review" rows="4" cols="50" placeholder="type your message here"></textarea>
    <label for="name"><b>Job Type</b></label>
    <input type="text" placeholder="Enter Event Duration" name="name" id="name" required>

    <label for="date"><b>Job Start Date</b></label>
    <input type="date" placeholder="Animal date of birth" name="date" id="date" required>
    <button type="submit" class="registerbtn">Add  A New Vacancie</button>
  </div>
  

</form>

</body>
</html>