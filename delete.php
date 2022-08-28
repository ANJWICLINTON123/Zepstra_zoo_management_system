<?php 
if (isset($_GET["id"])){
    $id = $_GET["id"];


require('mysql_connection.php');
$sql = "DELETE FROM animal_details WHERE id = $id";
$conn->query($sql);
}

header("location: admin_delete_edit_animals.php");
exit;

?>