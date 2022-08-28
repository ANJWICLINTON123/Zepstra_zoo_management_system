<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_grid.css">
    <link rel="stylesheet"  href="index.css">
    <script src="js_file.js"></script>
</head>
<body>
  
   <!-- ########################## MAIN MANU ################################### -->
    <nav  class="navbar">
        <img class="image_logo" src="image/logo1 (1).png" alt="logo">  
       <span class="open-side">
        <a href="#" class="hamberga" onclick="openSlideMenu()">&#9776;</a>
       </span>
          <ul class="navbar-nav">
            
          <li><a class = "login" href="login.php">Admin login</a></li>
            <li><a href="aboutMe.php">About Me</a></li>
            <li><a href="ContactUS.php">Contact Us</a></li>
            <li><a href="Events.php">Events</a></li>
            <li><a href="Vacancies.php">Vacancies</a></li>
            <li><a href="BookTicket.php">Book Tickets</a></li>
            <li><a href="animal.php">Animals</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
            <li><a href="index.php">Home</a></li>
         </ul>
    </nav>
 <!-- ########################## Side Manu ################################### -->
<div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlidemenu()">&times;</a>
    <a href="index.php">Home</a>
    <a href="Gallery.php">Gallery</a>
    <a href="animal.php">Animals</a>
    <a href="BookTicket.php">Book Tickets</a>
    <a href="Vacancies.php">Vacancies</a>
    <a href="Events.php">Events</a>
    <a href="ContactUS.php">Contact Us</a>
    <a href="aboutMe.php">About Me</a>
    <a class = "login1" href="login.php"> Admin login</a>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>