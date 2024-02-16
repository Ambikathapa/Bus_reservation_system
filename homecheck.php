<?php 

session_start();

include("db_connection.php");

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $location =  $_POST['location'] ;
    $destination =  $_POST['destination'] ;
    $date =  $_POST['date'] ;
    
   
     $query = mysqli_query($con,"SELECT * FROM bus_time where location ='$location' and
     destination='$destination'and date='$date' ") ;
    $num = mysqli_num_rows($query);
    $res = mysqli_fetch_assoc($query);
    if ( $location == "" || $destination == ""||   $date == "") 
{
echo "Please fill all fields";
}
    if($num>=1)
    {
        $location =  $_POST['location'] ;
        $destination =  $_POST['destination'] ;
        $date =  $_POST['date'] ;
        // echo '<script>alert("Congrants! AVAILABLE. Please login and book your seat ,Thank you!!!!")</script>';
        header("Location: CUSTOMER.HTML");
    //  manage it
        
       
    }
    else
    {
        echo '<script>alert("OOPS, NOT AVAILABLE. Please login and check our schedules ,Thank you!!!!")</script>';

     
        
    }
}
?>