<?php 
if (isset($_GET["id"])){
    $id = $_GET["id"];


require('mysql_connection.php');
$sql = "DELETE FROM events WHERE id = $id";
$conn->query($sql);
}

header("location: admin_delete_edit_events.php");
exit;

?>