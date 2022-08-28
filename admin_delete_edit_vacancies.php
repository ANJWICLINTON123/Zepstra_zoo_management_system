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
<?php include ('Header.php');?>
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
                <td>ID</td>
                <td>Title</td>
                <td>Description</td>
                <td>Job type</td>
                <td>Job start date</td>
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
              $sql = "SELECT * FROM  jobvacancies";
              $result = $conn->query($sql);

              if (!$result){
                die("Invalid query: ". $conn->error);
              }

              $count = 1;
              while($row = $result->fetch_assoc()){
                echo 
                "              
                <td>$count</td>
                <td>$row[vacancies_name]</td>
                <td>$row[description]</td>
                <td>$row[job_type]</td>
                <td>$row[job_start_date]</td>
                <td class = 'action'>
                <a class = 'edit' href ='edit_vacancies.php?id=$row[id]'>edit</a>&nbsp; &nbsp; 
                <a class = 'delete' href ='delete_vacancies.php?id=$row[id]'>Delete</a>
                </td>
              </tr>";
                $count++;
              }
              ?>
            <tr>

            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
<button class ="addamimal" type ="button" onclick = "location.href ='adminVacancies.php'">Add New vacancy &nbsp;<i class="fa fa-angle-double-down" style="font-size:30px;color:#fff"></i></button>
</body>
</html>