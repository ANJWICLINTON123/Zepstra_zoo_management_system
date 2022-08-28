<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal_details.php</title>
    <link rel="stylesheet" href="style_grid.css">
    <link rel="stylesheet" href="animal_details.css">
</head>
<body>
<?php include ('Header.php');?>

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
                echo "    
                <div class='row'>
                <div class='col-sm-2'></div>
                <div class='col-sm-7 good_display'> 
                <img class='image1' src=image/$row[picture] alt='Cinque Terre' width='400' height='300'>  
                <div class='details'>
                <h2>Myna Bird</h2>
                <p>species Name: <b>$row[animal_name]</b></p>
               <p>Date of birth: <b>$row[date_of_birth]</b></p>
               <p>Gender: <b>$row[gender]</b></p>
               <p>Description <b class='description'>$row[description].</b></p> 
              </div> 
                </div>
                <div class='col-sm-3'></div>
            </div>";
              }
              ?>

    <?php include ('Footer.php');?>
</body>
</html>





