<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="admin.css">
  <title>Dashboard</title>
</head>
<body>
  <input type="checkbox" id ="nav-toggle">
  <div class="sidebar">
    <div class="sidebar-brand">
      <h2><span class="lab la-accusoft"></span><span>Zoo System</span></h2>
    </div>
    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="admin.php" class="active"><span class = "fa fa-area-chart"></span><span>Dashboard</span></a>
        </li>
        <li>
          <a href="admin_delete_edit_animals.php"><span class = "fa fa-github-alt"></span><span>Animal details</span></a>
        </li>
        <li>
          <a href="admin-management-ticket.php"><span class = "fa fa-money"></span><span>Manage Ticket</span></a>
        </li>
        <li>
          <a href=""><span class = "fa fa-money"></span><span>Cameroon Ticket</span></a>
        </li>
        <li>
          <a href=""><span class = "fa fa-money"></span><span>Foreign Ticket</span></a>
        </li>
        <li>
          <a href="admin_delete_edit_events.php"><span class = "fa fa-pagelines"></span><span>Events</span></a>
        </li>
        <li>
          <a href="admin_delete_edit_vacancies.php"><span class = "fa fa-vimeo"></span><span>Vacancies</span></a>
        </li>
        <li>
          <a href="reports.php"><span class = "las la-igloo"></span><span>Reports</span></a>
        </li>
        <li>
          <a href="admin _delete_edit.php"><span class ='fas'>&#xf067;</span><span>Add admin</span></a>
        </li>
        <li>
          <a href="admin _delete_edit.php"><span class ='fas'>&#xf067;</span><span>Add admin</span></a>
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
          <small>super admin</small><br>
          <a href = 'logout.php'><input type = button value = 'logout' name ='logout'></a>
        </div>
      </div>
  </header> 
</body>
</html>