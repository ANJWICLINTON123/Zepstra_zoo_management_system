<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap-4.6.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="ContactUS.css">
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
            <li><a href="Registration.php">Register</a></li>
            <li><a href="ContactUs.php">Contact Us</a></li>
            <li><a href="Events.php">Events</a></li>
            <li><a href="Vacancies.php">Vacancies</a></li>
            <li><a href="BookTicket.php">Book Tickets</a></li>
            <li><a href="Animal.php">Animals</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
            <li><a href="index.php">Home</a></li>
         </ul>
    </nav>
 <!-- ########################## Side Manu ################################### -->
<div id="side-menu" class="side-nav">
<a href="#" class="btn-close" onclick="closeSlidemenu()">&times;</a>
    <a href="index.php">Home</a>
    <a href="Gallery.php">Gallery</a>
    <a href="Animal.php">Animals</a>
    <a href="BookTicket.php">Book Tickets</a>
    <a href="Vacancies.php">Vacancies</a>
    <a href="Events.php">Events</a>
    <a href="ContactUS.php">Contact Us</a>
    <a href="Registration.php">Register</a>
    <li><button type="button" class="sidebarLogin_button">login</button></li>
</div>
<div class="contactus">
  <h1>Contact</h1>
  <p>Just send us your questions or concerns
     by starting a new case and we will give 
     you the help you need. Start Here. Live Chat.
     Chat with <br> a member of our team</p>

     <div class="contactus_form">
      <div class="row">
        <div class="col-sm-4">
          <img class ="icon" src="image/icon-removebg-preview.png" alt="">
            <h1>Address</h1>
            <p>Located in Balboa Park <br>
            Address 2920 Zoo Dr, San Diego, CA 92101, United States
          <br>Area: 40 ha
          <br><br><br>
          <img class ="icon" src="image/call-removebg-preview.png" alt="">
            <h1 class= "callCenter">Call center</h1>
            <p>Tel: +237 767 776 767 <br>
            Address 2920 Zoo Dr, San Diego, CA 92101, United States
          <br>Area: 40 ha
        </p>
        </div>
        <div class="col-sm-8">
        <img class ="contacticon" src="image/contactu.png" alt="" width= "12%">
            <h1 class= "Center">Contact US</h1>
            <p>Send us a message using our form and we'll get back
               to you with an answer shortly. We will 
              respond to your email request in 24 - 48 business hours.</p>
 <!-- ########################## contact us form ################################### -->

        <div class="SubmitForm">
        <h1 class="foreign_ticket">Send your Message</h1>
            <form action="">
                <label for="">Name</label>  <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br><br>
                <label for="">Email</label>  <input type="Email" id="email" name="email" placeholder="enter email.."><br><br>
                <label for="">Subject</label> <input type="text" id="subject" name="subject" placeholder=""><br><br>
                <textarea class="textarea" id="w3review" name="w3review" rows="4" cols="50" placeholder="type your message here"></textarea>
                <br>
                
                <button class="submit_button">Submit</button>
            </form>
        </div>
        </div>
      </div>
     </div>

</div>



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