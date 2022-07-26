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
    <link rel="stylesheet" href="contact.css">
    <!-- <link rel="stylesheet" href="ContactUS.css"> -->
</head>
<body>
      <!-- ########################## MAIN MANU ################################### -->
      <?php include 'header.php';?>


      <div class="contactus">
  <h1>Contact</h1>
  <p>Just send us your questions or concerns
     by starting a new case and we will give 
     you the help you need. Start Here. Live Chat.
     Chat with <br> a member of our team</p>

      </div>

     <div class="contactus_form">
      <div class="row">
        <div class="col-sm-4">
          <img class ="icon" src="image/icon-removebg-preview.png" alt="">
          <div  class= "contactp">
            <h1>Address</h1>
            <p>Located in Balboa Park <br>
            Address 2920 Zoo Dr, San Diego, CA 92101, United States
          <br>Area: 40 ha            
          </div>

          <br><br><br>
          <img class ="icon2" src="image/call-removebg-preview.png" alt="">
          <div class= "callCenter">
            <h1>Call center</h1>
            <p>Tel: +237 767 776 767 <br>
            Address 2920 Zoo Dr, San Diego, CA 92101, United States
          <br>Area: 40 ha
        </p>
          </div>

        </div>
        <div class="col-sm-8">
        <img class ="contacticon" src="image/contactu.png" alt="" width= "12%">
            <h1 class= "Center">Contact US</h1>
            <p class= "Center2">Send us a message using our form and we'll get back
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


<?php include 'footer.php';?>
</body>
</html>