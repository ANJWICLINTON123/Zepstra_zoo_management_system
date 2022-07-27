<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.6.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="BookTicket.css">
</head>
<body>
      <!-- ########################## MAIN MANU ################################### -->
      <?php include 'header.php';?>

<h1 class="ticket">Tickets</h1>

<table id="customers">
  <tr>
    <th>Ticket group</th>
    <th>Prices</th>
  </tr>
  <tr>
    <td>Cameroon Ticket</td>
    <td>20000frs</td>
  </tr>
  <tr>
    <td>Foreigner Ticket</td>
    <td>100000frs</td>
  </tr>
</table>
<br><br>
<!-- ########################## form ########################## -->

<div class="tickets">
    <div class="row">
        <div class="col-md-6">
            <h1 class="foreign_ticket"> Foreign Ticket</h1>
            <form action="/action_page.php">
                <label for="">Name</label>  <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br><br>
                <label for="">Price</label>  <input type="number" id="price" name="price" placeholder="Place your Price.."><br><br>
                <label for="">Date</label>  <input type="date" id="date" name="lastname" placeholder="mm/dd/yyyy.."><br><br>
                <button class="submit_button">Book Ticket</button>
            </form>
        </div>
        <div class="col-md-6">
            <h1 class="foreign_ticket"> Foreign Ticket</h1>
            <form action="">
                <label for="">Name</label>  <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br><br>
                <label for="">Price</label>  <input type="number" id="price" name="price" placeholder="Place your Price.."><br><br>
                <label for="">Date</label>  <input type="date" id="date" name="lastname" placeholder="mm/dd/yyyy.."><br><br>
                <button class="submit_button">Book Ticket</button>
            </form>
        </div>
    </div>
</div>
<br>
<?php include 'footer.php';?>
</body>
</html>