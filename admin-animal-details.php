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
<?php include "header.php"?>
<?php include "defaultadmin.php"?>

<form action="/action_page.php">
<div class="container">
    <h1>Add to Gallery</h1><br>

    <label for="name"><b>Animal name</b></label>
    <input type="text" placeholder="Enter animal speciel" name="name" id="name" required>

    <label for="date"><b>Date of birth</b></label>
    <input type="date" placeholder="Animal date of birth" name="date" id="date" required>

    <label for="gender"><b>Gender</b></label>
    <input type="text" placeholder="Enter animal gender " name="gender" id="gender" required>
    <label for="gender"><b>Decription</b></label><br><br>
    <textarea class="textarea" id="w3review" name="w3review" rows="4" cols="50" placeholder="type your message here"></textarea>
    <input type="file" id="myFile" name="filename">
    <button type="submit" class="registerbtn">Add Animal</button>
  </div>
  

</form>

</body>
</html>