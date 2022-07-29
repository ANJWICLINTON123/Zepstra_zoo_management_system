<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="myvacancies.css">
</head>
<body>
      <!-- ########################## MAIN MANU ################################### -->
      <?php include 'header.php';?>
      <div class="vacancies_h1">
        <h1>Vacancies</h1>
        <p>The following jobs are avialable</p>
      </div>
      <div class="apply">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-9 jobApply ">
            <h2>Medical Assistant</h2>
            <p><b>Description: </b> Physician</p>
            <p><b>Job type:</b>Perminent</p>
            <p><b>Job start date:</b> 2022-12-03</p>
            <button class="applybutton">Apply</button>
          </div>
          <div class="col-sm-2"></div>
       
        </div>
        <br><br><br>
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-9 jobApply ">
            <h2>Demo vacancies Announcment</h2>
            <p><b>Description: </b> This for testing purpose! This for testing purpose!This for testing purpose!</p>
            <p><b>Job type:</b>Perminent</p>
            <p><b>Job start date:</b> 2022-03-11</p>
            <button class="applybutton">Apply</button>
          </div>
          <div class="col-sm-2"></div>
        <br><br>
        </div>
      </div>






      
<!-- #################### footer ###################### -->
<?php include 'footer.php';?>
</body>
</html>