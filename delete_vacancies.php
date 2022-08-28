<?php 
if (isset($_GET["id"])){
    $id = $_GET["id"];


require('mysql_connection.php');
$sql = "DELETE FROM jobvacancies WHERE id = $id";
$conn->query($sql);
}

header("location: admin_delete_edit_vacancies.php");
exit;

?>