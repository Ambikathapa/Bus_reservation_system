
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>welcome to admin panel</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bus_list.css">
 
 
<style>
  body {
    background-image: url("b1.jpg");
    background-repeat: no-repeat;
    background-attachment: covered;
    background-color:darkgrey;

  }
</style>
</head>
<body>
	
<div class="form-box"action="bus-info.php"method="post">
<h3 align="center">
  <font face="lato"color="black"size="5.5" ><p><br><b>SAJA BUS RESERVATION SYSTEM </b></p></font>
</h3>
<h3 align="center">
  <font face="lato"color="green"size="5.5" ><p><b>Bus Details: </b></p></font>
</h3>
        <form id="save" class="input-group"action="bus_list.php" method="post">
        <!-- <input type="auto" name="id" class="input-field" placeholder="Bus Id"
					required> --><br>
        <!-- <input type="varchar" name="bus_company" class="input-field" placeholder="Company Name"
					required> -->
        <input type="varchar" name="bus_name" class="input-field" placeholder="Bus Name"
					required>
        <input type="varchar" name="bus_number" class="input-field" placeholder="Bus Number"
					required>
<br>
      <button type="Submit" class="submit-btn">Save</button>
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
        $bus_number =  $_POST['bus_number'] ;
        
       
        
if (  $bus_name == ""|| $bus_number == "") 
{
echo "Please fill all fields";
}

else 
{

    //This is where the errors are found
       $query = mysqli_query($con, "SELECT * FROM bus_list WHERE bus_number = '$bus_number' ") or 
       die ("Cannot query table");

       $num = mysqli_num_rows($query);
       if($num>=1)
    {
        echo "SORRY ,CHECK AGAIN/nTHANK YOU";
    }
    else
    {
    $add = mysqli_query($con, "INSERT INTO bus_list (  bus_name, bus_number) VALUES
    (  '$bus_name', '$bus_number') ") or die ("Cant insert data");
    if($add)
    header("Location: bus-info.php"); 
    }
  }
// }
    }
    
    ?>




