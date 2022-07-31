<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_grid.css">
    <link rel="stylesheet"  href="index.css">
    <script src="Homepage.js"></script>
</head>
<body>
  
   <!-- ########################## MAIN MANU ################################### -->
    <nav  class="navbar">
        <img class="image_logo" src="image/logo1 (1).png" alt="logo">  
       <span class="open-side">
        <a href="#" class="hamberga" onclick="openSlideMenu()">&#9776;</a>
       </span>
          <ul class="navbar-nav">
            
          <li><a class = "login" href="login.php">login</a></li>
            <li><a href="Registration.php">Register</a></li>
            <li><a href="ContactUs.php">Contact Us</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="Events.php">Events</a></li>
            <li><a href="Vacancies.php">Vacancies</a></li>
            <li><a href="BookTicket.php">Book Tickets</a></li>
            <li><a href="Animal.php">Animals</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
            <li><a href="index.php">Home</a></li>
         </ul>
    </nav>
 <!-- ########################## Side Manu ################################### -->
<div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlidemenu()">&times;</a>
    <a href="index.php">Home</a>
    <a href="Gallery.php">Gallery</a>
    <a href="Animal.php">Animals</a>
    <a href="BookTicket.php">Book Tickets</a>
    <a href="Vacancies.php">Vacancies</a>
    <a href="Events.php">Events</a>
    <a href="ContactUS.php">Contact Us</a>
    <a href="Registration.php">Register</a>
    <li><button type="button" class="sidebarLogin_button">login</button></li>
</div>


<!-- ########################## OPen and Close javascrip code ################################### -->

<script>
    function openSlideMenu(){
          document.getElementById('side-menu').style.width = '250px';
          document.getElementById('main').style.marginLeft = '250px';
      }
      function closeSlidemenu(){
          document.getElementById('side-menu').style.width = '0';
          document.getElementById('main').style.marginLeft = '0';
      }
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>