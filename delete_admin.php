<?php 
if (isset($_GET["id"])){
    $id = $_GET["id"];


require('mysql_connection.php');
$sql = "DELETE FROM registration WHERE id = $id";
$conn->query($sql);
}

header("location:admin _delete_edit.php");
exit;

?>