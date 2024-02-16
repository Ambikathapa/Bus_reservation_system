
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>For Admin Only</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="bus_list.css">
 
  <style>
  body {
    background-image: url("dimseat.jpg");
    background-repeat: no-repeat;
    background-attachment: covered;
  }
</style>

</head>
<body>
	
	
    
      
<div class="form-box"action="bus_time.php"method="post">
<h3 align="center">
  <font face="lato"color="black"size="4" ><p><b>SAJA BUS RESERVATION SYSTEM </b></p></font>
</h3>
<h3 align="center">
  <font face="lato"color="green"size="4" ><p>Bus time: </p></font>
</h3>
        <form id="save" class="input-group"action="bus_time.php" method="post">
        
        <!-- <input type="varchar" name="bus_company" class="input-field" placeholder="Company Name"
					required> -->
        <input type="varchar" name="bus_name" class="input-field" placeholder="Bus Name"
					required>
     <input type="date" name="date" class="input-field" 
					required>
          <input type="time" name="time" class="input-field" 
					required>
    <input type="text" name="location" class="input-field" placeholder="Location"
					required>
    <input type="text" name="destination" class="input-field" placeholder="Destination"
					required>
          <input type="number" name="cost" class="input-field" placeholder="Bus-Fare per seat"
					required>
      <button type="Submit" class="submit-btn">Save</button>
    </form></div>
</body>
</html>

<?php
      session_start();
     
    //   header("Location: bus-info.php"); 
       
    
      include "db_connection.php";

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // echo "test here";
        // $id =  $_POST['id'] ;
        // $bus_company =  $_POST['bus_company'] ;
        $bus_name =  $_POST['bus_name'] ;
        $date =  $_POST['date'] ;
        $time =  $_POST['time'] ;
        $location =  $_POST['location'] ;
        $destination =  $_POST['destination'] ;
        $cost =  $_POST['cost'] ;
        
       
        
if (  $bus_name == ""|| $date == ""|| $time == ""|| $location == ""|| $destination == ""|| $cost == "") 
{
echo "Please fill all fields";
}

else 
{

    //This is where the errors are found
       $query = mysqli_query($con, "SELECT * FROM bus_time WHERE bus_name = '$bus_name' ") or 
       die ("Cannot query table");

       $num = mysqli_num_rows($query);
       if($num>=1)
    {
      echo '<script>alert("SORRY ,CHECK AGAIN
      THANK YOU!!!!")</script>';

       
    }
    else
    {
    $add = mysqli_query($con, "INSERT INTO bus_time (  bus_name,date, time,location,destination,cost)
     VALUES
    (  '$bus_name','$date', '$time', '$location', '$destination', '$cost') ") or die ("Cant insert data");
    if($add)
    header("Location: Schedule.php"); 
    }
  }
// }
    }
    
    ?>




