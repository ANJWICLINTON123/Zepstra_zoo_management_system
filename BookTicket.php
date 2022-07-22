<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.6.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="Homepage.css">
    <link rel="stylesheet" href="BookTicket.css">
</head>
<body>
      <!-- ########################## MAIN MANU ################################### -->
      <nav  class="navbar">
        <img class="image_logo" src="image/logo1 (1).png" alt="logo">  
       <span class="open-side">
        <a href="#" class="hamberga" onclick="openSlideMenu()">&#9776;</a>
       </span>
          <ul class="navbar-nav">
            
            <li><button type="button" class="Login_button">login</button></li>
            <li><a href="">Register</a></li>
            <li><a href="">Contact Us</a></li>
            <li><a href="">Events</a></li>
            <li><a href="">Vacancies</a></li>
            <li><a href="">Book Tickets</a></li>
            <li><a href="">Animals</a></li>
            <li><a href="">Gallery</a></li>
            <li><a href="">Home</a></li>
         </ul>
    </nav>
 <!-- ########################## Side Manu ################################### -->
<div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlidemenu()">&times;</a>
    <a href="">Home</a>
    <a href="">Gallery</a>
    <a href="">Animals</a>
    <a href="">Book Tickets</a>
    <a href="">Vacancies</a>
    <a href="">Events</a>
    <a href="">Contact Us</a>
    <a href="">Register</a>
    <li><button type="button" class="sidebarLogin_button">login</button></li>
</div>

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
<footer class="container_footer">
    <div class="row">
      <div class="col-md-8 Our_footer">
        <h1 class="green"><a href="#">About</a> Sandiego Zoo Management System</h1>
        <p>At couponsalecode.info, it's our mission to provide extra 
          value for our customers, and help people save time and money.
           We provide thousands of coupon codes, promo codes, deals and 
           sales for you to make life more affordable. With limited money, 
           buy more stuff, and enjoy your day. Our editors keep updating the 
           content by searching any coupons or sales from destination websites
           . Some other coupons are provided by our affiliates. We provide
           you fresh and working promo codes at couponsalecode.info.</p>
      </div>
      <div class="col-md-4 Our_footer1">
        <h1><a href="#">Our </a>Location</h1>
        <h3>Zoo Management System</h3>
        <p>Located in <a href="">Balboa Park</a><br>
          Address <a href="">2920 Zoo Dr, San Diego, CA 92101, United States</a>
          <br>Area: 40 ha
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 Our_footer arrange1">
        <h1><a href="#">Popular</a> Animals</h1>
        <p>lion <br> Tiger <br> Dolpine</p>
      </div>
      <div class="col-md-5 Our_footer arrange2">
        <h1><a href="#">Connect </a> with Using</h1>
        <i class="fa-brands fa-facebook"></i>
      </div>
      <div class="col-md-3 Our_footer arrange3">
        <h1><a href="#">Contact</a>  US</h1>
        <p> Tel: <a href="#"> +321 767 865</a></p>
      </div>
    </div>
    <div class="info">
      <p>@2022-Sandiego Zoo Management</p>
    </div>
    </footer>
<!-- ########################## OPen and Close javascrip code ################################### -->

<script>
    function openSlideMenu(){
          document.getElementById('side-menu').style.width = '250px';
          document.getElementById('main').style.marginLeft = '250px';
      }
      function closeSlidemenu(){
          document.getElementById('side-menu').style.width = '0';
          document.getElementById('main').style.marginLeft = '0';
      }
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="bootstrap-4.6.1-dist/js/bootstrap.min.js"></script>
</body>
</html>