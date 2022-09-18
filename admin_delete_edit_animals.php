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
<?php include "header.php"?>
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
              <tr>
                <td>Animal Name</td>
                <td>Date of birth</td>
                <td>Gender</td>
                <td>Description</td>
                <td>Picture</td>
                <td></td>
              </tr>
            </thead>
            <tbody>
            <tr class= "color">
                <td>Common myna</td>
                <td> 2011-03-23</td>
                <td>Male</td>
                <td>
                <span class="status"></span>
                review
                </td>
                <td><img class="animal_image" src="image/bird1.jpg"  width="50px" height = "40px" alt=""></td>
                <td><button class = "edit">Edit</button> 
                &nbsp; &nbsp;&nbsp;<button class = "delete">Delete</button></td>
              </tr>
              <tr>
                <td>Tiger</td>
                <td>2021-09-05</td>
                <td>Female</td>
                <td>
                <span class="status pink"></span>
                progress
                </td>
                <td><img class="animal_image" src="image/cheetah.jpg"  width="50px" height = "40px" alt=""></td>
                <td><button class = "edit">Edit</button> 
                &nbsp; &nbsp;&nbsp;<button class = "delete">Delete</button></td>
              </tr>
              <tr class= "color">
                <td>Baboon</td>
                <td>2015-09-22</td>
                <td>Female</td>
                <td>
                <span class="status orange"></span>
                pending
                </td>
                <td><img class="animal_image" src="image/baboon.jpg"  width="50px" height = "40px" alt=""></td>
                <td><button class = "edit">Edit</button> 
                &nbsp; &nbsp;&nbsp;<button class = "delete">Delete</button></td>
              </tr>
              <tr>
                <td>Python</td>
                <td> 2011-03-23</td>
                <td>Male</td>
                <td>
                <span class="status"></span>
                review
                </td>
                <td><img class="animal_image" src="image/python1.jpg"  width="50px" height = "40px" alt=""></td>
                <td><button class = "edit">Edit</button> 
                &nbsp; &nbsp;&nbsp;<button class = "delete">Delete</button></td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
<button class ="addamimal" type ="button" onclick = "location.href ='admin-animal-details.php'">Add New animal &nbsp; <i class="fa fa-angle-double-down" style="font-size:30px;color:#fff"></i></button>
</body>
</html>