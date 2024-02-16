<?php

require('db_connection.php');

$id=$_REQUEST['id'];
$query = "SELECT * from bus_time where id='".$id."'"; 
$result = mysqli_query($con, $query) ;
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>


<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
        $id=$_REQUEST['id'];
        // $bus_company =  $_POST['bus_company'] ;
        $bus_name =  $_POST['bus_name'] ;
        $date =  $_POST['date'] ;
        $time =  $_POST['time'] ;
        $cost =  $_POST['cost'] ;
        $location =  $_POST['location'] ;
        $destination =  $_POST['destination'] ;
$update="update bus_time set 
bus_name='".$bus_name."', date='".$date."',time='".$time."',cost='".$cost."', location='".$location."',destination='".$destination."'
 where id='".$id."'";
mysqli_query($con, $update) ;
$status = "Record Updated Successfully. </br></br>
<a href='Schedule.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />

<p><input type="varchar" name="bus_name" class="input-field" placeholder="Bus Name"
					required="<?php echo $row['bus_name'];?>" /></p>
 
 <p><input type="date" name="date" class="input-field" 
					required="<?php echo $row['date'];?>" /></p>
          <p><input type="time" name="time" class="input-field" 
					required="<?php echo $row['time'];?>" /></p>
 <p><input type="text" name="location" class="input-field" placeholder="Location"
					required="<?php echo $row['location'];?>" /></p>
 <p><input type="text" name="destination" class="input-field" placeholder="Destination"
					required="<?php echo $row['destination'];?>" /></p>
  <p><input type="number" name="cost" class="input-field" placeholder="Bus-fare per seat "
					required="<?php echo $row['cost'];?>" /></p>

  <p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>

</body>
</html>