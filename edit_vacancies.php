<?php
require('mysql_connection.php');

$id = "";
$vacancies_name = "";
$description= "";
$job_type = "";
$job_start_date = "";

$errormessage = "";
$successmessage = "";

if ($_SERVER['REQUEST_METHOD']=='GET'){
    // GET method: show the data of the client

    if (!isset($_GET['id'])){
        header("location: admin_delete_edit_vacancies.php");
        exit;
    }

    $id = $_GET["id"];

    //read the row of selected client from database table

    $sql = "SELECT * FROM  jobvacancies WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
    if(!$row){
        header("location: admin_delete_edit_vacancies.php");
        exit;

        $vacancies_name = $_POST["vacancies_name"];
        $description = $_POST["description"];
        $job_type = $_POST["job_type"];
       $job_start_date = $_POST["job_start_date"];
    }



}else{
      // post method: show the data of the client
      $id = $_POST["id"];
      $vacancies_name = $_POST["vacancies_name"];
      $description = $_POST["description"];
      $job_type = $_POST["job_type"];
      $job_start_date = $_POST["job_start_date"];

      do {
        if (empty($id)||empty($vacancies_name)||empty($description)||empty($job_type)||empty($job_start_date)){
            $errormessage = "All the files are required";
            break;
          }

          $sql = "UPDATE jobvacancies " . 
          "SET vacancies_name= '$vacancies_name', description = '$description', job_type = '$job_type', job_start_date = '$job_start_date'". 
          "WHERE id = $id";

          $result = $conn->query($sql);
          if (!$result){
            $errormessage = "invalid query: " . $conn->error;
            break;
          }

          $successmessage = "vacancies updated correctly";

          header("location: admin_delete_edit_vacancies.php");
          exit;

      }while(true);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-animal-details</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<?php include ('Header.php');?>
<?php include "defaultadmin.php"?>

<form method = "post">
<input type="hidden"  name = "id" value = "<?php echo $id; ?>">
<div class="container"><br><br><br><b><br><b><br>
    <h1>Add Vacancies</h1><br><br>

    <?php
    if(!empty($errormessage)){
      echo "<b>$errormessage</b>";
    }
    ?>

    <label for="name"><b>Vacancie title</b></label>
    <input type="text" placeholder="Enter event title" name="vacancies_name" id="name" value="<?php echo $vacancies_name;?>">
    <label for="gender"><b>Decription</b></label><br><br>
    <textarea class="textarea" id="w3review" name="description" rows="4" cols="50" placeholder="type your message here"  value="<?php echo $description;?>"></textarea>
    <label for="name"><b>Job Type</b></label>
    <select class="selected" type="text" placeholder="Enter Event Duration" name="job_type" id="name"  value="<?php echo $job_type;?>">
    <option placeholder="vacancy type">vacancy type</option>
    <option value="TEMPORAL">TEMPORAL</option>
    <option value="PERMINENT">PERMINENT</option>
  </select>
    <label for="date"><b>Job Start Date</b></label>
    <input type="date" placeholder="Animal date of birth" name="job_start_date" id="date"  value="<?php echo $job_start_date;?>">
    <?php
    if(!empty($successmessage )){
      echo "<b>$successmessage </b>";
    }
    ?>
   <button type="submit" class ="add_animal">Add vacancies</button>
    <button class ="cancel" role = "button" type ="button" onclick = "location.href ='admin_delete_edit_vacancies.php'">cancel</button>
  </div>
  

</form>

</body>
</html>