<?php

require('mysql_connection.php');

$id = "";
$name = "";
$price = "";

$errormessage = "";
$successmessage = "";

if ($_SERVER['REQUEST_METHOD']=='GET'){
    // GET method: show the data of the client

    if (!isset($_GET['id'])){
        header("location: admin-management-ticket.php");
        exit;
    }

    $id = $_GET["id"];

    //read the row of selected client from database table

    $sql = "SELECT * FROM ticketmanagement WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
    if(!$row){
        header("location: admin-management-ticket.php");
        exit;

        $name  = $_POST["name"];
        $price = $_POST["price"];
    }



}else{
      // post method: show the data of the client
        $id = $_POST["id"];
        $name  = $_POST["name"];
        $price = $_POST["price"];
      do {
        if (empty($id)||empty($name)||empty($price)){
            $errormessage = "All the files are required";
            break;
          }

          $sql = "UPDATE ticketmanagement " . 
          "SET name= '$name', price= '$price'". 
          "WHERE id = $id";

          $result = $conn->query($sql);
          if (!$result){
            $errormessage = "invalid query: " . $conn->error;
            break;
          }

          $successmessage = "Ticket updated correctly";

          header("location: admin-management-ticket.php");
          exit;

      }while(true);

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
<br><br>

<h1 class="ticketh1">Update Ticket</h1>
<div class="tickets">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-md-6">
            <h1 class="foreign_ticket"> Update Ticket</h1><br><br>
            <form method = "post">   
            <input type="hidden" name = "id" value = "<?php echo $id;?>">            
            <?php
            if(!empty($errormessage)){
            echo "<b>$errormessage</b>";
             }
             ?>
                <label for="">Name</label>  <input type="text" id="name" name="name" placeholder=" Enter ticket name.." value = "<?php $name;?>"><br><br>
                <label for="">Price</label>  <input type="number" id="price" name="price" placeholder="Place your Price.." value = "<?php $price;?>"><br><br>
                <?php
                 if(!empty($successmessage )){
                 echo $successmessage;
                 }
                 ?>
                 <!-- <input type="submit" value = "update"> -->
                 <button type="submit" class ="update edit">Update</button>
                <button class ="cancel" role = "button" type ="button" onclick = "location.href ='admin-management-ticket.php'">cancel</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<br>
</body>
</html>