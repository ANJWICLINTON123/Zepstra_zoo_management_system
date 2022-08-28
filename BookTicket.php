<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_grid.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="BookTicket.css">
</head>
<body>
      <!-- ########################## MAIN MANU ################################### -->
      <?php include ('Header.php');?>
<?php
// define variables and set to empty values
$nameErr = $emailErr= $countryErr=$addressErr=$ageErr=$telErr="";
$name =$successmessage=$errormessage= $email = $country = $address = $age = $tel = "";

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
    
  if (empty($_POST["country"])) {
    $countryErr = "<br> country is required";
  } else {
    $country = test_input($_POST["country"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$country)) {
      $countryErr ="<br>Only letters and white space allowed";
    }
  }

  if (empty($_POST["address"])) {
    $addressErr = "<br> address is required";
  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["age"])) {
    $ageErr = "<br> age is required";
  } else {
    $age = test_input($_POST["age"]);
  }

  if (empty($_POST["tel"])) {
    $telErr = "<br> phone number is required";
  } else {
    $tel = test_input($_POST["tel"]);
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

require('mysql_connection.php');

  if(isset($_POST['submit'])) { 
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $ticket = $_REQUEST['ticket'];
    $country = $_REQUEST['country'];
    $address = $_REQUEST['address'];  
    $age = $_REQUEST['age'];
    $tel = $_REQUEST['tel'];  
  // check for not empty
  do{
    if (empty($name)||empty($email)||empty($ticket)||empty($country)||empty($address)||empty($age)||empty($tel)){
      $errormessage = "<span class= 'message'>All the files are required</span>";
     // $errormessage = "All the files are required";
      break;
    }
  
    
    $sql = "INSERT INTO bookticket1 (name, email, ticket, country, address, age, tel)
    VALUES ('$name','$email','$ticket','$country','$address' ,'$age','$tel')";
 
   $query = mysqli_query($conn, $sql);

    if ($query){
      // $sql2 = "INSERT INTO foreignticket (country)
      // VALUES ('$country')";
      // $result = mysqli_query($conn, $sql2);
      $successmessage = "<span class= 'message'>Ticket booked successfully</span>";
     
    }else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }


// if ($conn->query($sql) === TRUE) {

//   // $sql2 = "INSERT INTO foreignticket (country)
//   // VALUES ('$country')";
//   // $result = mysqli_query($conn, $sql2);

//   echo "<span class= 'message'>Message sent successfully</span>";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
} while(false);
  $conn->close();

  }
?>



<h1 class="ticket">Tickets</h1>

<table id="customers">
  <thead>
    <th>Ticket group</th>
    <th>Prices</th>
  </thead>
  <?php
              require('mysql_connection.php');
              // Check connection
              if(mysqli_connect_errno()) {  
                die(" Failed to connect with MySQL: ". mysqli_connect_error());  
              }

              // read all row from database table
              $sql = "SELECT * FROM ticketmanagement";
              $result = $conn->query($sql);

              if (!$result){
                die("Invalid query: ". $conn->error);
              }

              $count = 0;
              while($row = $result->fetch_assoc()){
                if ($count == 2){
                  break;
                 }
                 echo " 
                 <tr>
                   <td>$row[name]</td>
                   <td>$row[price]</td>
                 </tr>
                 
                 ";
                 $count++;
              }
              ?>
</table>
<br><br>
<!-- ########################## form ########################## -->

<div class="tickets">
    <div class="row">
      <div class="col-md-1"></div>
        <div class="col-md-10">
        <?php echo $errormessage;?><br>
            <h1 class="foreign_ticket"> Get Your Tickets</h1>
            <?php echo $successmessage;?>
            <form method = "post">
                <span class="error"> <?php echo $nameErr;?></span><br>
                <label for="">Name</label>  <input type="text" id="name" name="name" placeholder="Your last name.." value = "<?php echo $name;?>"><br>
                <span class="error"> <?php echo $emailErr;?></span><br>
                <label for="">Email</label>  <input type="text" id="email" name="email" placeholder="Your email.." value = "<?php  echo $email;?>"><br><br>
               <label for="">Choose Ticket</label>  
                <select class="Bticket" name="ticket" id="ticket" required>
                <option >Cameroon Ticket</option>
                <option>Foreign Ticket</option>
                </select>&nbsp;&nbsp;<br>
                <span class="error"> <?php //echo $countryErr;?></span>
                <label for="">country</label>  <input type="text" class ="country" id="country" name="country" placeholder="Your country.." value = "<?php echo $country;?>">
                <label for="">Address</label>  <input type="text" class = "country"  id="address" name="address" placeholder="Your address.." value = "<?php  echo $address;?>"> <br><br>
                <span class="error"> <?php //echo $addressErr;?></span>
                &nbsp; &nbsp;<label class = "country"  for="">Age</label>   &nbsp;<input type="number" class = "country" id="age" name="age" placeholder="your age.." value = "<?php echo  $age;?>">
                <span class="error"> <?php //echo $ageErr;?></span>
                <label for="">PhoneNo</label>  <input type="number" class = "country" id="tel" name="tel" placeholder="your phone number.." value = "<?php  echo $tel;?>">
                <span class="error"> <?php //echo $telErr;?></span><br><br>
                <input type="submit" class="submit_button" name="submit"  value = "Book Ticket">
            </form>
        </div>
    </div>
</div>
<br>
<?php include ('Footer.php');?>
</body>
</html>