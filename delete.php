<?php
require('db_connection.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM bus_list WHERE id=$id"; 
$result = mysqli_query($con,$query) ;
header("Location: bus-info.php"); 
?>