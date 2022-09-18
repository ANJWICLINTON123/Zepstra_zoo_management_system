<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style_grid.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="contact1.css">
</head>
<body>
      <!-- ########################## MAIN MANU ################################### -->
      <?php include ('Header.php');?>


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
 <?php
// define variables and set to empty values
$nameErr = $emailErr= "";
$name = $email = $subject = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "<br> Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr ="<br>Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "<br> Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "<br> Invalid email format";
    }
  }
    

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["subject"])) {
    $subject = "";
  } else {
    $subject = test_input($_POST["subject"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

require('mysql_connection.php');

  if(isset($_POST['email'])) { 
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $subjects = $_REQUEST['subject'];
    $messages = $_REQUEST['messages'];
    
    $sql = "INSERT INTO messagess (name, email, subjects, messages)
    VALUES ('$name',
  '$email','$subjects','$messages')";

if ($conn->query($sql) === TRUE) {
  echo "<span class= 'message'>Message sent successfully</span>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

  $conn->close();

  }
?>

        <div class="SubmitForm">
        <h1 class="foreign_ticket">Send your Message</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
       Name: <input type="text" name="name" placeholder="Your last name.." value="<?php echo $name;?>">
       <span class="error"> <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email" placeholder="enter email.." value="<?php echo $email;?>">
       <span class="error"> <?php echo $emailErr;?></span>
       <br><br>
       <label for="">Subject</label> <input type="text" id="subject" name="subject"value="<?php echo $subject;?>" required><br><br>
       <textarea class="textarea" id="w3review" name="messages" rows="4" cols="50" placeholder="type your message here"><?php echo $comment;?></textarea>
       <br><br>
         <input class ="submitButton" type="submit" name="submit" value="Submit">  
   </form>
        </div>
        </div>
      </div>
     </div>
<br>
</div>


<?php include ('Footer.php');?>
</body>
</html>