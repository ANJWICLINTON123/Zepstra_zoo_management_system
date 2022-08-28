<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search ticket by ID</title>
    <link rel="stylesheet" href="BookTicket.css">
</head>
<body>
<?php include ('Header.php');?>
<?php include "defaultadmin.php"?>


<!-- ##################### table ######################## -->
<div class= "animal_details">
      <div class="projects">
        <div class="card">
        <div class="card-header">
          <h2>Search Ticket By ID</h2>
        </div>
        <div class="card-body">
            <form action="" method = 'POST'>
                <input type="text" class="searchinput" name = "id" placeholder = "enter ticket ID">
                <input type="submit" class="searchinput" name = "search" value = "search By ID  ">
            </form>
          <div class="table-responsive">
          <table width="100%">
            <thead>
            <tr>
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

            <?php
             require('mysql_connection.php');

              // Check connection
              if(mysqli_connect_errno()) {  
                die(" Failed to connect with MySQL: ". mysqli_connect_error());  
              }

              // read all row from database table
    
              if(isset($_POST['search'])){
                $id = $_POST['id'];

                $sql = "SELECT * FROM bookticket1 WHERE id = '$id'";
                $result = mysqli_query($conn,$sql);

                $err = "";
              while($row = $result->fetch_assoc()){
                ?>  
            <tr>
            <td><?php echo $row['name']; ?></td>  
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['ticket']; ?></td>
                <td><?php echo $row['country']; ?></td>
                <td>
                <?php echo $row['address']; ?>
                </td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['tel']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
              </tr>
             <?php
              }
              mysqli_free_result($result);
            } 
            ?>
            </tbody>
          </table>
          <?php echo $err;?>
          </div>
        </div>
      </div>
    </div>
</body>
</html>