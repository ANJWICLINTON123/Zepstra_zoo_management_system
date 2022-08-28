<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Report</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<?php include ('Header.php');?>
<?php include "defaultadmin.php"?>

<div class="recent-grid report">
      <div class="projects">
        <div class="card">
        <div class="card-header">
          <h2>Ticket reports</h2>
        </div>
        <div class="card-body">
          <div class="table-responsive">
          <table width="100%">
            <thead>
              <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Ticket</td>
                <td>Country</td>
                <td>Address</td>
                <td>age</td>
                <td>Phone_Number</td>
                <td>Ticket_date</td>
              </tr>
            </thead>
            <tbody>
            <tr>
            <?php
 	         require('mysql_connection.php');

              // Check connection
              if(mysqli_connect_errno()) {  
                die(" Failed to connect with MySQL: ". mysqli_connect_error());  
              }

              // read all row from database table
              $sql = "SELECT * FROM bookticket1";
              $result = $conn->query($sql);

              if (!$result){
                die("Invalid query: ". $conn->error);
              }

              $count = 1;
              while($row = $result->fetch_assoc()){
                echo 
                "<td>$count</td>
                <td>$row[name]</td>
                <td>$row[email]</td>
                <td>$row[ticket]</td>
                <td>$row[country]</td>
                <td>
                $row[address]
                </td>
                <td>$row[age]</td>
                <td>$row[tel]</td>
                <td>$row[created_at]</td>
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
</body>
</html>