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
  <?php include "header.php"?>
  <input type="checkbox" id ="nav-toggle">
  <div class="sidebar">
    <div class="sidebar-brand">
      <h2><span class="lab la-accusoft"></span><span>Accusoft</span></h2>
    </div>
    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="" class="active"><span class = "las la-igloo"></span><span>Dashboard</span></a>
        </li>
        <li>
          <a href="admin-animal-details.php"><span class = "las la-igloo"></span><span>Animal details</span></a>
        </li>
        <li>
          <a href=""><span class = "las la-igloo"></span><span>Manage Ticket</span></a>
        </li>
        <li>
          <a href=""><span class = "las la-igloo"></span><span>Cameroon Ticket</span></a>
        </li>
        <li>
          <a href=""><span class = "las la-igloo"></span><span>Foreign Ticket</span></a>
        </li>
        <li>
          <a href=""><span class = "las la-igloo"></span><span>Events</span></a>
        </li>
        <li>
          <a href=""><span class = "las la-igloo"></span><span>Vacancies</span></a>
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
  

  <!-- ########################### MAIN ############################ -->
  <main>
    <div class="cards">
      <div class="card-single">
        <div>
          <h1>54</h1>
          <span>Animals</span>
        </div>
        <div>
          <span class="las la-users"></span>
        </div>
      </div>
      <div class="cards">
      <div class="card-single">
        <div>
          <h1>120</h1>
          <span>Tickets</span>
        </div>
        <div>
          <span class="las la-clipboard"></span>
        </div>
      </div>
      <div class="cards">
      <div class="card-single">
        <div>
          <h1>80</h1>
          <span>Foreign Tickets</span>
        </div>
        <div>
          <span class="las la-shopping-bag"></span>
        </div>
      </div>
      <div class="cards">
      <div class="card-single">
        <div>
          <h1>40</h1>
          <span>Cameroon Tickets</span>
        </div>
        <div>
          <span class="las la-shopping-bag"></span>
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
          <button>See all <span class = "las la-arrow-right"></span></button>
        </div>
        <div class="card-body">
          <div class="customer">
            <div class="info">
            <img src="image/man.jpg" width="40px" height = "40px" alt="">
            <div>
              <h4>Clinton brown</h4>
              <small>manager</small>
            </div>
          </div>
          <div class="contact">
          <span class = "las la-user-circle"></span>
            <span class = "las la-comment"></span>
            <span class = "las la-phone"></span>
          </div>
         </div>
         <div class="customer">
            <div class="info">
            <img src="image/man.jpg" width="40px" height = "40px" alt="">
            <div>
              <h4>James sam</h4>
              <small>Developer</small>
            </div>
          </div>
          <div class="contact">
          <span class = "las la-user-circle"></span>
            <span class = "las la-comment"></span>
            <span class = "las la-phone"></span>
          </div>
         </div>

         <div class="customer">
            <div class="info">
            <img src="image/man.jpg" width="40px" height = "40px" alt="">
            <div>
              <h4>Gills</h4>
              <small>Developer</small>
            </div>
          </div>
          <div class="contact">
          <span class = "las la-user-circle"></span>
            <span class = "las la-comment"></span>
            <span class = "las la-phone"></span>
          </div>
         </div>

         <div class="customer">
            <div class="info">
            <img src="image/man.jpg" width="40px" height = "40px" alt="">
            <div>
              <h4>Eben Yenchi</h4>
              <small>manager</small>
            </div>
          </div>
          <div class="contact">
          <span class = "las la-user-circle"></span>
            <span class = "las la-comment"></span>
            <span class = "las la-phone"></span>
          </div>
         </div>

         <div class="customer">
            <div class="info">
            <img src="image/man.jpg" width="40px" height = "40px" alt="">
            <div>
              <h4>Joyce peace</h4>
              <small>Assistant Dvl</small>
            </div>
          </div>
          <div class="contact">
          <span class = "las la-user-circle"></span>
            <span class = "las la-comment"></span>
            <span class = "las la-phone"></span>
          </div>
         </div>

        </div>
      </div>

      </div>
    </div>
 </div>

</body>
</html>