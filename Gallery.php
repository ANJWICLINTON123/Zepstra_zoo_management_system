<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_grid.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="Gallery.css">
</head>
<body>
      <!-- ########################## MAIN MANU ################################### -->
      <?php include ('Header.php');?>
<!-- ########################## Gallery ################################### -->
<div class="gallery_h1">
    <h1 style="color:  #045f16; margin-left: 2%;"> Gallery</h1>
</div>
<br><br>
  
<?php
           require('mysql_connection.php');
              // Check connection
              
              if(mysqli_connect_errno()) {  
                die(" Failed to connect with MySQL: ". mysqli_connect_error());  
              }

              // read all row from database table
              $sql = "SELECT * FROM animal_details";
              $result = $conn->query($sql);

              if (!$result){
                die("Invalid query: ". $conn->error);
              }

              while($row = $result->fetch_assoc()){
                echo 
                "<div class='responsive'>
                <div class='gallery'>
                <a href='animal_details.php'>
                    <img src=image/$row[picture] alt='Cinque Terre' width='500' height='300'>
                  </a>
                  <div class='desc'>$row[description]</div>
                </div>
              </div>";
              }
              ?>
              <div class='arrange'> &nbsp;</div>

 
<!-- ####################### footer ############# -->
<?php include ('Footer.php');?>
</body>
</html>