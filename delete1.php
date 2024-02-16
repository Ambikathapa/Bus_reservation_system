<?php
require('db_connection.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM bus_time WHERE id=$id"; 
$result = mysqli_query($con,$query) ;
header("Location: Schedule.php"); 
?>