<?php
session_start();

include("db_connection.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>welcome to Admin Panel</title>
  <link rel="stylesheet" href="style.css">


  <style>
    body {
      background-image: url("cloud.jpg");
      background-repeat: no-repeat;
      background-attachment: covered;
    }
  </style>
</head>

<body>

  <!-- <h3 align="left-top">
    <font face="lato" size="5.5">
      <marquee behaviour="alternative"><b>SAJA BUS COMPANY</b></marquee>
    </font>
    </font> -->
    <div class="navbar">
      <a href="bus-info.php"><b>BUS-DETAILS</a>
      <a href="location.php"><b>OUR DETAILS </a>
      <a href="Schedule.php"><b>SCHEDULE</a>
      <a href="User.php"><b>USER</a>
    </div>
    <h3 align="center">
      <br>
      <font face="lato" color="red" size="8">
        
          <br><b>WELCOME TO  ADMIN PANEL </b>
        </p>
      </font>
    </h3>
    <h3 align="center">
      <font face="lato" color="black" size="10">
      <p><br>Bus Counter <span><?php echo $_SESSION['user_id'] ?></span>

        <font face="lato" color="yellow" size="10">
        <p><br><b>SAJA BUS RESERVATION SYSTEM </b></p>
      </font>
      </font>

    </h3>

  
</body>

</html>