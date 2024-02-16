<?php
session_start();

include("db_connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>welcome to my website</title>
  <link rel="stylesheet" href="style.css">
 
 
<style>
  body {
    /* background-image: url("5.jpg"); */
    background-repeat: no-repeat;
    background-attachment: covered;
  }
</style>
</head>
<body>
	
	<h3 align="left-top">
		<font face="lato" size="5.5">
			<marquee behaviour="alternative"><b>SAJA BUS RESERVATION SYSTEM</b></marquee></font>
	</font>

	
		<div class="navbar">
      <a class="active" href="home.html"> HOME</a>
      <a href="ABOUT US.html">ABOUT US </a>
       <a href="SERVICES.html">SERVICES</a>
      <a href="ROUTE AVAILABLE.html">ROUTE AVAILABLE</a>
     
      <div class="dropdown">
        <button class="dropbtn"><b>LOGIN</b>
          
        </button>
        <div class="dropdown-content">
          <a href="CUSTOMER.html">CUSTOMER</a>
          <a href="ADMIN.html">ADMIN</a>
         
        </div>
      </div>
	</div>
        
    
		<form class="booking-form-box" action="home.php"method="post">
	<div class="">
      <div class="custom-select" style="width:200px;">
        
          <i class="location "></i>
          <select>
            <option value="0">Select city: </option>
            <option value="1">Kathmandu</option>
            <option value="2">Jhapa</option>
            <option value="3">Sunsari</option>
            <option value="4">Bardibas</option>
            <option value="5">Janakpur</opti6on>
            <option value="6">Sarlahi</option>
            <option value="7">Rautahat</option>
            <option value="8">Birgunj</option>
            <option value="9">Pokhara</option>
            <option value="10">Narayangath</option>
          
          </select>
    </div><br>
    <div class="destination-select" style="width:200px;">
      <i class="destination "></i>
      <select>
        <option value="0">Select Destination:</option>
      <option value="1">Kathmandu</option>
        <option value="2">Jhapa</option>
        <option value="3">Sunsari</option>
        <option value="4">Bardibas</option>
        <option value="5">Janakpur</option>
        <option value="6">Sarlahi</option>
        <option value="7">Rautahat</option>
        <option value="8">Birgunj</option>
        <option value="9">Pokhara</option>
        <option value="10">Narayangath</option>s
      </select>
    </div><br>
    <input type="radio" name="way" id="One way"> 
    <label for="One way">One way</label>
        <input type="radio" name="way" id="RoundTrip"> 
          <label for="RoundTrip">RoundTrip</label>
<input type="radio" name="way" id="Multitrip"> 
          <label for="Multitrip">Multitrip</label><br><br>
          <input type="date"name="date"class=" select-date"placeholder="Date "required>
</div><br>
<button type="submit"name="submit"class="btn"><br>CHECK AVAILABILITY</button>

</form>

<h3 align="center">
  <font face="lato"color="green"size="5" ><p><br><b>BOOK YOUR TICKET</b></p></font>
</h3>

<h3 align="center">
    
      <font face="lato"color="red"size="5">
        choose your destination and dates to reserve a ticket
      
      </font>
    
</h3>

<h4 align="center">
    
  <font face="lato"size="3">
    <a href="logo.html">BACK TO LOGO</a>
  </font>

</h4>

<h4 align="center">
    
  <font face="lato"size="3">
    <a href="HOME.html">GET STARTED</a>
  </font>

</h4>


<?php 


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date =  $_POST['date'] ;
    $location =  $_POST['location'] ;
    $destination =  $_POST['destination'] ;
    
   
   
     $query = mysqli_query($con,"SELECT * FROM bus_time where location ='$location'&&
     destination='$destination'&& date='$date'") ;
    $num = mysqli_num_rows($query);
    $res = mysqli_fetch_assoc($query);
    if ( $location == "" || $destination == ""||   $date == "") 
{
echo "Please fill all fields";
}
    if($num>0)
    {
        $date =  $_POST['date'] ;
        $location =  $_POST['location'] ;
        $destination =  $_POST['destination'] ;
        // $_SESSION["user_id"] = $res['user_id'];
        // $_SESSION["password"]=$res['password'];
        
        header("Location: booking.php"); 
        
    }
    else
    {
       echo"Sorry, you are unable to travel through us./n Thank you for your visit ";
        exit();
    }
}
?>



      
  





	</body>
</html>

