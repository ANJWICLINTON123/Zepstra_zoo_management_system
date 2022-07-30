<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-management-ticket</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="BookTicket.css">
</head>
<body>
<?php include ('Header.php');?>
<?php include "defaultadmin.php"?>
<br><br>

<h1 class="ticketh1">Tickets Types</h1>
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


<div class="tickets">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-md-6">
            <h1 class="foreign_ticket"> Manage Ticket</h1><br><br>
            <form action="/action_page.php">
                <label for="">Name</label>  <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br><br>
                <label for="">Price</label>  <input type="number" id="price" name="price" placeholder="Place your Price.."><br><br>
                <button class="submit_button">Save</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<br>
</body>
</html>