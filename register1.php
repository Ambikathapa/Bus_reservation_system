<?php
      session_start();
     
      header("Location: customer.html"); 
       
    //   if (isset($_POST['submit'])) 
    //   {
      require "db_connection.php";

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // echo "test here";
        $user_id =  $_POST['user_id'] ;
        $email_id =  $_POST['email_id'] ;
        $phone_no =  $_POST['phone_no'] ;
        $address =  $_POST['address'] ;
        
        $password =  $_POST['password'] ;
        $gender = $_POST['gender'];
        // $cpassword = $_POST['password'] ;
        
if ($user_id == "" || $email_id == "" || $phone_no == ""|| $address == ""|| 
 $password == ""||$gender == "") 
{
echo "Please fill all fields";
}

else 
{

    //This is where the errors are found
       $query = mysqli_query($con, "SELECT * FROM register1 WHERE email_id = '$email_id' ") or 
       die ("Cannot query table");

       $num = mysqli_num_rows($query);
       if($num>=1)
    {
        echo "This username is already taken";
    }
    else
    {
    $add = mysqli_query($con, "INSERT INTO register1 (user_id, email_id, phone_no, address,password) VALUES
    ('$user_id', '$email_id', '$phone_no', '$address','$password') ") or die ("Cant insert data");
    if($add)
      echo "Successfully added user!";

    }
  }
// }
    }
    
    ?>




