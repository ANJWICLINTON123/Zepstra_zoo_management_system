<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.6.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="Ragistration.css">
    
</head>
<body>
      <!-- ########################## MAIN MANU ################################### -->
      <?php include 'header.php';?>

<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
    <h1 class="foreign_ticket">Ragister</h1>
            <form action="">
                <label for="">Name</label>  <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br><br>
                <label for="">Email</label>  <input type="text" id="Email" name="Email" placeholder="Your email.."><br><br>
                <label for="">Address</label>  <input type="text" id="Address" name="address" placeholder="Your address.."><br><br>
                <button class="submit_button">Ragister</button>
            </form>
    </div>
    <div class="col-sm-2"></div>
</div>



<!-- #################### footer ###################### -->
<?php include 'footer.php';?>
</body>
</html>