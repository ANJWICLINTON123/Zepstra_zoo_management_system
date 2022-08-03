<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_delete_edit_vacancies.php</title>
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
          <h2>Vacancies</h2>
        </div>
        <div class="card-body">
          <div class="table-responsive">
          <table width="100%">
            <thead>
              <tr>
                <td>Title</td>
                <td>Description</td>
                <td>Job type</td>
                <td>Job start date</td>
                <td></td>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td>Medical Assistant</td>
                <td>Physician</td>
                <td>Perminent</td>
                <td>20/05/2022</td>
                <td><button class = "edit">Edit</button> 
                &nbsp; &nbsp;&nbsp;<button class = "delete">Delete</button></td>
              </tr>

              <tr>
                <td>Demo vacancies Announcment</td>
                <td>This for testing purpose! 
                <br> This for testing purpose!</td>
                <td>Perminent</td>
                <td>2022-03-11</td>
                <td><button class = "edit">Edit</button> 
                &nbsp; &nbsp;&nbsp;<button class = "delete">Delete</button></td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
<button class ="addamimal" type ="button" onclick = "location.href ='adminVacancies.php'">Add New Animal &nbsp;<i class="fa fa-angle-double-down" style="font-size:30px;color:#fff"></i></button>
</body>
</html>