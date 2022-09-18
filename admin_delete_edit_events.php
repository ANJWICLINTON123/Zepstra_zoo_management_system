<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_delete_edit_events.php</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<?php include "header.php"?>
<?php include "defaultadmin.php"?>

<!-- ##################### table ######################## -->
<div class= "animal_details">
      <div class="projects">
        <div class="card">
        <div class="card-header">
          <h2>Events</h2>
        </div>
        <div class="card-body">
          <div class="table-responsive">
          <table width="100%">
            <thead>
              <tr>
                <td>Event Name</td>
                <td>Picture</td>
                <td>Description</td>
                <td>Event duration</td>
                <td>Event date</td>
                <td></td>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td>Events Aventure</td>
                <td> <img class="animal_image" src="image/bird1.jpg"  width="50px" height = "40px" alt=""></td>
                <td> Forest elephant <br> populations</td>
                <td>
                <span class="status"></span>
                Four hours
                </td>
                <td>20/05/2022</td>
                <td><button class = "edit">Edit</button> 
                &nbsp; &nbsp;&nbsp;<button class = "delete">Delete</button></td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
    
<button class ="addamimal" type ="button" onclick = "location.href ='adminEvents.php'">Add New Animal &nbsp; <i class="fa fa-angle-double-down" style="font-size:30px;color:#fff"></i></button>
</body>
</html>