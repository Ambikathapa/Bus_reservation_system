<?php
session_start();

include("db_connection.php");

$con =  mysqli_connect("localhost","root","","db_connection");

  



$query="Select * from book ORDER BY id DESC LIMIT 1 ";
// $last_id = mysqli_insert_id($con);
$query_run = mysqli_query($con,$query);
if(mysqli_num_rows($query_run)>0) {
foreach($query_run as $row)
 {
$n = $row["name"];
$p=$row["phone"];
$a=$row["adult"];
// $c=$row["children"];
$b = $row["bus_name"];
$d=$row["date"];
$ti=$row["time"];
$l=$row["location"];
$de=$row["destination"];
$cost=$row["cost"];
$total=$cost*$a; 


$s=$row["seat_preference"];
}
}
?>
<!DOCTYPE html>
<html>
<head> 
    <title>print booking</title>
</head>
 <body >
    <table   background="11.jpg" border="12px" width="50%" align="center" height="60%">
        <tr>
            <td> <center> <b>SAJA BUS RESERVATION SYSTEM<br> Bus Ticket</b> </center> </td>
        </tr>
        <tr>
            <td> 

<p><b> Passenger Info :</b></p>
<div class="form">
    
      <label for="name"> Name</label>
      <input type="text" disabled id="name" value="<?php echo $n; ?>" name="name">
      <br>
    
      <label for="phone"> Phone</label>
      <input type="phone" id="phone" name="phone" disabled value="<?php echo $p; ?>">

    
      <br>
    <hr>

    
    
  <label for="adult">Number of Passenger</label>
  <input type="int" id="adult" name="adult" disabled value="<?php echo $a; ?>">
 <!-- <br>
      <label for="child">Children</label>
      <input type="int" id="children" name="children" disabled value="<?php echo $c; ?>"><br>
  <br> -->
    <hr>

    <p><b>Booking Details :</b></p>
    <!-- <label for="bus_company"> Bus Company</label>
      <input type="text" id="bus_company" name="bus_company" disabled value="<?php echo $bc; ?>"><br> -->
      <label for="bus-name">Bus name</label>
      <input type="text" name="bus-name" disabled value="<?php echo $b; ?>"> <br>
      <label for="date">Date</label>
      <input type="text" name="date" disabled value="<?php echo $d; ?>"> 
    <br>
    <label for="time">time</label>
      <input type="text" name="time" disabled value="<?php echo $ti; ?>"> 
    <br><br>
    <label for="location"> Location</label>
      <input type="text" id="location" name="location" disabled value="<?php echo $l; ?>">
    <br>
    <label for="destination"> Destination</label>
      <input type="text" id="destination" name="destination" disabled value="<?php echo $de; ?>"><br>
    
      <label for="cost"> Bus-fare per seat</label>
      <input type="cost" id="cost" name="cost" disabled value="<?php echo $cost; ?>">
        <br>
        <label for="total"> Total cost</label>
      <input type="total" id="total" name="total" disabled value="<?php echo $total; ?>">
        <br>
        <br>
      <label for="seat-selection">Select seat Preference</label>
      <input type="seat-selection" id="seat-selection" name="seat_preference" disabled value="<?php echo $s; ?>">
     
      <font face="lato"color="dark-blue" ><p><br><b>[Note : Bus fare as fixed by the Government Of Nepal.]
          </b></p></font>
      
    </div>
    <hr>
    <p>Thank You For choosing us!!</p>
        
    <p>Please keep it safe since needed while travel....</p>
    <p>Have a safe and comfort journey..</p>
    </div><br><br>
    <!-- <button type="submit">Confirmed</button> -->
    <input type="submit" name="printReq" onclick="window.print()" value="Print Invoice" />
  
</td>
</tr>

</table>





</div>
</body>
</html>