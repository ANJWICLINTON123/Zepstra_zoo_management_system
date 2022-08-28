
<?php
//include("session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="admin.css">
  <title>Dashboard</title>
</head>
<body>
<?php include ('Header.php');?>
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
  

  <!-- ########################### MAIN ############################ -->
  
  <main>
    <div class="cards">
      <div class="card-single">
      <?php
              require('mysql_connection.php');
              // Check connection
              if(mysqli_connect_errno()) {  
                die(" Failed to connect with MySQL: ". mysqli_connect_error());  
              }

              // read all row from database table
              $sql = "SELECT * FROM animal_details";
              $result = $conn->query($sql);

              if (!$result){
                die("Invalid query: ". $conn->error);
              }

              $count = 0;
              while($row = $result->fetch_assoc()){
            $count++;
              }
              ?>
        <div>
          <h1><?php echo $count;?></h1>
          <span>Animals</span>
        </div>
        <div>
          <span class="fa fa-github-alt"></span>
        </div>
      </div>
      <div class="cards">
      <div class="card-single">


        <div>
          <?php
require('mysql_connection.php');

// Check connection
if(mysqli_connect_errno()) {  
  die(" Failed to connect with MySQL: ". mysqli_connect_error());  
}

// read all row from database table
$sql = "SELECT * FROM bookticket1";
$result = $conn->query($sql);

if (!$result){
  die("Invalid query: ". $conn->error);
}

$count1 = 1;
while($row = $result->fetch_assoc()){
  echo 
  "";
  $count1++;
}
?>
          <h1><?php echo $count1;?></h1>
          <span>Tickets</span>
        </div>
        <div>
          <span class="las la-clipboard"></span>
        </div>
      </div>
      <div class="cards">
      <div class="card-single">
        <div>
        <?php
        
require('mysql_connection.php');

// Check connection
if(mysqli_connect_errno()) {  
  die(" Failed to connect with MySQL: ". mysqli_connect_error());  
}

// read all row from database table
$sql = "SELECT ticket FROM bookticket1 WHERE ticket = 'Foreign Ticket'";
$result = $conn->query($sql);

if (!$result){
  die("Invalid query: ". $conn->error);
}

$count2 = 0;
while($row = $result->fetch_assoc()){
  echo 
  "";
  $count2++;
}
?>
          <h1><?php echo $count2?></h1>
          <span>Foreign Tickets</span>
        </div>
        <div>
          <span class="fa fa-money"></span>
        </div>
      </div>
      <div class="cards">
      <div class="card-single">
        <div>
        <?php
require('mysql_connection.php');

// Check connection
if(mysqli_connect_errno()) {  
  die(" Failed to connect with MySQL: ". mysqli_connect_error());  
}

// read all row from database table
$sql = "SELECT country FROM bookticket1 WHERE country = 'indian'";
$result = $conn->query($sql);

if (!$result){
  die("Invalid query: ". $conn->error);
}

$count3 = 0;
while($row = $result->fetch_assoc()){
  echo 
  "";
  $count3++;
}
?>
          <h1><?php echo $count3?></h1>
          <span>indian Tickets</span>
        </div>
        <div>
          <span class="fa fa-money"></span>
        </div>
      </div>
    </div>
  </main>
<!-- ##################### table ######################## -->
<div class="recent-grid">
      <div class="projects">
        <div class="card">
        <div class="card-header">
          <h2>Recent Animals</h2>
          <button>See all <span class = "las la-arrow-right"></span></button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
          <table width="100%">
            <thead>
              <tr>
                <td>species Name</td>
                <td>Date of birth</td>
                <td>Gender</td>
                <td>Description</td>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td>Common myna</td>
                <td> 2011-03-23</td>
                <td>Male</td>
                <td>
                <span class="status"></span>
                review
                </td>
              </tr>
              <tr>
                <td>Common myna</td>
                <td> 2011-03-23</td>
                <td>Male</td>
                <td>
                <span class="status purple"></span>
                review
                </td>
              </tr>
              <tr>
                <td>Tiger</td>
                <td>2021-09-05</td>
                <td>Female</td>
                <td>
                <span class="status pink"></span>
                progress
                </td>
              </tr>
              <tr>
                <td>lion</td>
                <td>2015-09-22</td>
                <td>Female</td>
                <td>
                <span class="status orange"></span>
                pending
                </td>
              </tr>
              <tr>
                <td>Common myna</td>
                <td> 2011-03-23</td>
                <td>Male</td>
                <td>
                <span class="status"></span>
                review
                </td>
              </tr>
              <tr>
                <td>Common myna</td>
                <td> 2011-03-23</td>
                <td>Male</td>
                <td>
                <span class="status purple"></span>
                review
                </td>
              </tr>
              <tr>
                <td>Tiger</td>
                <td>2021-09-05</td>
                <td>Female</td>
                <td>
                <span class="status pink"></span>
                progress
                </td>
              </tr>
              <tr>
                <td>lion</td>
                <td>2015-09-22</td>
                <td>Female</td>
                <td>
                <span class="status orange"></span>
                pending
                </td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>

    <div class="customers">
      
      <div class="card">
        <div class="card-header">
          <h3>Admins</h3>
          <button role = "button" type ="button" onclick = "location.href ='admin _delete_edit.php'">See all <span class = "las la-arrow-right"></span></button>
        </div>

        <?php
                require('mysql_connection.php');
              // Check connection
              if(mysqli_connect_errno()) {  
                die(" Failed to connect with MySQL: ". mysqli_connect_error());  
              }

              // read all row from database table
              $sql = "SELECT * FROM registration";
              $result = $conn->query($sql);

              if (!$result){
                die("Invalid query: ". $conn->error);
              }

              $count = 0;
              while($row = $result->fetch_assoc()){
                if ($count == 5){
                  break;
                 }
                 echo "
                 <div class='card-body'>
                 <div class='customer'>
                    <div class='info'>
                    <img src='image/$row[picture]' width='40px' height = '40px' alt='admin pic'>
                    <div>
                      <h4>$row[name]</h4>
                      <small>$row[position]</small><br>
                      <small><a class = 'dashbordedit' href ='#'>view_profile</a></small>
                    </div>
                  </div>
                  <div class='contact'>
                  <span class = 'las la-user-circle'></span>
                    <span class = 'las la-comment'></span>
                    <span class = 'las la-phone'></span>
                  </div>
                 </div>
                </div>
        
                 ";
                 $count++;
              }
              ?>   
      </div>

      </div>
    </div>
 </div>

</body>
</html>