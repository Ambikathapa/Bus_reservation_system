<?php

require('db_connection.php');

$id=$_REQUEST['id'];
$query = "SELECT * from bus_list where id='".$id."'"; 
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
        $bus_number =  $_POST['bus_number'] ;
$update="update bus_list set 
bus_name='".$bus_name."', bus_number='".$bus_number."'
 where id='".$id."'";
mysqli_query($con, $update) ;
$status = "Record Updated Successfully. </br></br>
<a href='bus-info.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />

<p><input type="varchar" name="bus_name" class="input-field" placeholder="Bus Name"
					required="<?php echo $row['bus_name'];?>" /></p>
 <p><input type="varchar" name="bus_number" class="input-field" placeholder="Bus Number"
					required="<?php echo $row['bus_number'];?>" /></p>

<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>

</body>
</html>