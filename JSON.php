<?php

    // Route JSON
    $query = mysqli_query($con,"SELECT * FROM routes ") ;
    $arr = array();
    if(mysqli_num_rows($query))
            $arr[] = $row;
        $routeJson = json_encode($arr);
    
    // Customer JSON
    $query = mysqli_query($con,"SELECT * FROM customers ") ;
    $arr = array();
    if(mysqli_num_rows($query))
     while($row = mysqli_fetch_assoc($query))
            $arr[] = $row;
     $customerJson = json_encode($arr);
    
    // Seats JSON
    $query = mysqli_query($con,"SELECT * FROM seats ") ;
    $arr = array();
    if(mysqli_num_rows($query))
        while($row = mysqli_fetch_assoc($query))
        $arr[] = $row;
        $seatJson = json_encode($arr);

    // Bus JSON
    $query = mysqli_query($con,"SELECT * FROM buses ") ;
    $arr = array();
    if(mysqli_num_rows($query))
        while($row = mysqli_fetch_assoc($query))
        $arr[] = $row;
        $busJson = json_encode($arr);

    // Booking JSON
    $query = mysqli_query($con,"SELECT * FROM bookings ") ;
    $arr = array();
    if(mysqli_num_rows($query))
        while($row = mysqli_fetch_assoc($query))
        $arr[] = $row;
        $bookingJson = json_encode($arr);
        
    // Admin JSON
    
    $adminSql = "SELECT * from users";
    $resultAdminSql = mysqli_query($con, $adminSql);
    $arr = array();
    while($row = mysqli_fetch_assoc($resultAdminSql))
        $arr[] = $row;
    $adminJson = json_encode($arr);

    //Earning JSON
    // $result = mysqli_query($conn, 'SELECT SUM(booked_amount) AS value_sum FROM bookings'); 
    // $row = mysqli_fetch_assoc($result); 
    // $sum = $row['value_sum'];
    // echo $sum;
    // $earningJson = json_encode($sum);

?>