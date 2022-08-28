<?php

require('mysql_connection.php');

$name = "";
$price = "";

$errormessage = "";
$successmessage = "";

if ($_SERVER['REQUEST_METHOD']=='POST'){
$name = $_POST["name"];
$price = $_POST["price"];

do{
  if (empty($name)||empty($price)){
    $errormessage = "All the files are required <br><br>";
    break;
  }

  //add new client to database
$sql = "INSERT INTO ticketmanagement (name, price)". 
        "VALUES('$name', '$price')";
$result = $conn->query($sql);

if (!$result){
  $errormessage = "Invalid query: ".$conn->error;
  break;
}



$name = "";
$price = "";

echo "<script>alert('ticket added')</script>";
echo "ticket added";
$successmessage = "ticket added";

//header("location: admin-management-ticket.php");

exit;

}while(false);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-management-ticket</title>
    <link rel="stylesheet" href="style_grid.css">
    <link rel="stylesheet" href="BookTicket.css">
</head>
<body>
<?php include ('Header.php');?>
<?php include "defaultadmin.php"?>
<div class="ticketmangement">
<button class="search" role = "button" type ="button" onclick = "location.href ='search_ticket.php'">Search ticket</button>
              <h1 class="ticketh1">Tickets Types</h1>
                <table id='customers'>
                 <thead>
                   <th>Ticket group</th>
                   <th>Prices</th>
                   <th>Update</th>
                 </thead>
                 <?php
               require('mysql_connection.php');
              // Check connection
              if(mysqli_connect_errno()) {  
                die(" Failed to connect with MySQL: ". mysqli_connect_error());  
              }

              // read all row from database table
              $sql = "SELECT * FROM ticketmanagement";
              $result = $conn->query($sql);

              if (!$result){
                die("Invalid query: ". $conn->error);
              }

              $count = 0;
              while($row = $result->fetch_assoc()){
                if ($count == 3){
                  break;
                 }
                 echo " 
                 <tr>
                   <td>$row[name]</td>
                   <td>$row[price]</td>
                   <td>
                   <a class = 'edit' href ='update_ticket.php?id=$row[id]'>Update</a>
                   </td>
                 </tr>
                 ";
                 $count++;
              }
              ?>
              </table>
               <br><br>
<div class="tickets">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-md-6">
            <h1 class="foreign_ticket"> Manage Ticket</h1><br><br>
            <form method = "post" action = "admin-management-ticket.php">               
            <?php
            if(!empty($errormessage)){
            echo "<b>$errormessage</b> <br>";
             }
             ?>
                <label for="">Name</label>  <input type="text" id="name" name="name" placeholder=" Enter ticket name.." value = "<?php $name;?>"><br><br>
                <label for="">Price</label>  <input type="number" id="price" name="price" placeholder="Place your Price.." value = "<?php $price;?>"><br><br>
                <?php
                 if(!empty($successmessage )){
                 echo $successmessage;
                 }
                 ?>
                <button type = "submit" class="submit_button">Save</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<br>
</div>
</body>
</html>