<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_grid.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="Events.css">
</head>
<body>
      <!-- ########################## MAIN MANU ################################### -->
      <?php include ('Header.php');?>
 <!-- ########################## Event (Adventure) ################################### -->

<h1 class = Header> Events</h1>

<?php
           require('mysql_connection.php');
              // Check connection
              if(mysqli_connect_errno()) {  
                die(" Failed to connect with MySQL: ". mysqli_connect_error());  
              }

              // read all row from database table
              $sql = "SELECT * FROM events";
              $result = $conn->query($sql);

              if (!$result){
                die("Invalid query: ". $conn->error);
              }

              $count = "";
              while($row = $result->fetch_assoc()){
                 echo "
                   <div class='Container_Events'>
                   <div class='row'>
                   <div class='col-md-2'></div>
                   <div class='col-md-8 Containerbg'>
                   <h1 class = 'Header2'>$row[event_name]</h1>
                   <img class='EventImage' src=image/$row[picture] width = '300' height = '200'>
                   <p><b>Description: </b>$row[description]</p>
                   <p><b>EVent Duration: </b>$row[event_duration]</p>
                   <p><b>Event start Date: </b>$row[event_date]</p>
                   <div class='col-md-2'></div>
                   </div> 
                   </div>
                   </div><br><br><br><br>
                 ";
                 $count++;
              }
              ?>     
              
<!-- ############################ footer #################### -->
<?php include ('Footer.php');?>
</body>
</html>