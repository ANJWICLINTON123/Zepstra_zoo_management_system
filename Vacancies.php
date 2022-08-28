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
    <link rel="stylesheet" href="myvacancies.css">
</head>
<body>
      <!-- ########################## MAIN MANU ################################### -->
      <?php include ('Header.php');?>
      <div class="vacancies_h1">
        <h1>Vacancies</h1>
        <p>The following jobs are avialable</p> 
      </div>
      
<?php
              require('mysql_connection.php');

              // Check connection
              if(mysqli_connect_errno()) {  
                die(" Failed to connect with MySQL: ". mysqli_connect_error());  
              }

              // read all row from database table
              $sql = "SELECT * FROM jobvacancies";
              $result = $conn->query($sql);

              if (!$result){
                die("Invalid query: ". $conn->error);
              }

              $count = "";
              while($row = $result->fetch_assoc()){
                 echo "
                 <div class='Container_Events jobApply2'>
                 <div class='row'>
                   <div class='col-md-1'></div>
                   <div class='col-md-9 jobApply'>
                     <h2>$row[vacancies_name]</h2>
                     <p><b>Description: </b> $row[description]</p>
                     <p><b>Job type:</b>$row[job_type]</p>
                     <p class = 'shift'><b>Job start date:</b> $row[job_start_date]</p>
                     <a class = 'applybutton' href ='apply_vacancy.php'>Apply</a>
                   </div>
                  <div class='col-md-2'></div>
                 </div>
               <br><br><br>
                 ";
                 $count++;
              }
              ?>
                  
<!-- #################### footer ###################### -->
<?php include ('Footer.php');?>
</body>
</html>