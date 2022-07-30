<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="admin.css">
  <title>Dashboard</title>
</head>
<body>
  <?php include "Header.php"?>
  <input type="checkbox" id ="nav-toggle">
  <div class="sidebar">
    <div class="sidebar-brand">
      <h2><span class="lab la-accusoft"></span><span>Zoo System</span></h2>
    </div>
    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="admin.php" class="active"><span class = "las la-igloo"></span><span>Dashboard</span></a>
        </li>
        <li>
          <a href="admin-animal-details.php"><span class = "las la-igloo"></span><span>Animal details</span></a>
        </li>
        <li>
          <a href="admin-management-ticket.php"><span class = "las la-igloo"></span><span>Manage Ticket</span></a>
        </li>
        <li>
          <a href=""><span class = "las la-igloo"></span><span>Cameroon Ticket</span></a>
        </li>
        <li>
          <a href=""><span class = "las la-igloo"></span><span>Foreign Ticket</span></a>
        </li>
        <li>
          <a href="adminEvents.php"><span class = "las la-igloo"></span><span>Events</span></a>
        </li>
        <li>
          <a href="adminVacancies.php"><span class = "las la-igloo"></span><span>Vacancies</span></a>
        </li>
        <li>
          <a href=""><span class = "las la-igloo"></span><span>Reports</span></a>
        </li>
      </ul>
    </div>
  </div>

  <!-- ########################### header  ########################### -->
 <div class="main-content">
  <header>
    <h2>
      <label for="nav-toggle">
        <span class="las la-bars"></span>
      </label>
      Dashboard
      </h2>
      <div class="search-wrapper">
        <span class ="las la-search"></span>
        <input type="search" placeholder = "search here">
      </div>

      <div class="user-wrapper">
        <img src="image/man.jpg" width="40px" height ="30px" alt="">
        <div>
          <h4>John Doe</h4>
          <small>super admin</small>
        </div>
      </div>
  </header> 
</body>
</html>