<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_delete_edit_animals.php</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<?php include ('Header.php');?>
<?php include "defaultadmin.php"?>

<!-- ##################### table ######################## -->
<div class= "animal_details">
      <div class="projects">
        <div class="card">
        <div class="card-header">
          <h2>Animals</h2>
        </div>
        <div class="card-body">
          <div class="table-responsive">
          <table class = "table_width" width="100%">
            <thead>
              <tr class ="color1">
                <td>ID</td>
                <td>Animal Name</td>
                <td>Date of birth</td>
                <td>Gender</td>
                <td>Description</td>
                <td>Picture</td>
                <td>&nbsp; &nbsp;&nbsp; &nbsp;Action</td>
              </tr>
            </thead>
            <tbody>
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

              $count = 1;
              while($row = $result->fetch_assoc()){
                echo 
                "<tr class= 'color'>
                <td>$count</td>
                <td>$row[animal_name]</td>
                <td>$row[date_of_birth]</td>
                <td>$row[gender]</td>
                <td>
                <span class='status'></span>
                $row[description]
                </td>
                <td><img src=image/$row[picture] alt='Cinque Terre' width='30' height='30'></td>                
                <td class = 'action'>
                <a class = 'edit' href ='edit.php?id=$row[id]'>edit</a>&nbsp; &nbsp; 
                <a class = 'delete' href ='delete.php?id=$row[id]'>Delete</a>
                </td>
              </tr>
                ";
                $count++;
              }
              ?>
                               
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
<button class ="addamimal" type ="button" onclick = "location.href ='admin-animal-details.php'">Add New animal &nbsp; <i class="fa fa-angle-double-down" style="font-size:30px;color:#fff"></i></button>
</body>
</html>