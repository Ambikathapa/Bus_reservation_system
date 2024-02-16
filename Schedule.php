


<?php
session_start();

include("db_connection.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <title>Bus Schedules</title>	
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bus_list.css">
 
 
<style>
  body {
    background-image: url("cloud.jpg");
    background-repeat: no-repeat;
    background-attachment: covered;
  }
</style>
</head>
<body>
	
	
    <div class="navbar">
      <a  href="bus-info.php"><b>BUS-LIST</a>
      <a href="location.php"><b>OUR DETAILS </a>
       <a class="active" href="Schedule.php"><b>SCHEDULE</a>
      <a href="User.php"><b>USER</a>
      </div>
<div class="form">

|| <a href="bus_time.php">Add Schedule</a> 
|| <a href="logout.php">Logout</a></p>
<h3 align="center">
  <font face="lato"color="black"size="4" ><p><br><b>SAJA BUS RESERVATION SYSTEM </b></p></font>
</h3>
<h3 align="center">
  <font face="lato"color="green"size="4" ><p>Bus Schedule:</p></font>
</h3>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>ID</strong></th>
<!-- <th><strong>Company Name</strong></th> -->
<th><strong>Bus Name</strong></th>
<th><strong>Date</strong></th>
<th><strong>Time</strong></th>
<th><strong>Location</strong></th>
<th><strong>Destination</strong></th>
<th><strong>Bus-fare per seat</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$query="Select * from bus_time ORDER BY id asc;";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<!-- <td align="center"><?php echo $row["bus_company"]; ?></td> -->
<td align="center"><?php echo $row["bus_name"]; ?></td>
<td align="center"><?php echo $row["date"]; ?></td>
<td align="center"><?php echo $row["time"]; ?></td>

<td align="center"><?php echo $row["location"]; ?></td>
<td align="center"><?php echo $row["destination"]; ?></td>
<td align="center"><?php echo $row["cost"]; ?></td>


<td align="center">
<a href="edit1.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete1.php?id=<?php echo $row["id"]; ?>">Delete</a>

</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>