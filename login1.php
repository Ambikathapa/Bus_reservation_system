

<?php 

session_start();


include 'db_connection.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user_id= $_POST['user_id']  ;
  $password = $_POST['password'] ;
    
   
   
     $query = mysqli_query($con,"SELECT * FROM register1 where user_id='$user_id'&&
     password='$password'") ;
    $num = mysqli_num_rows($query);
    $res = mysqli_fetch_assoc($query);
    // echo "Found ".$num." rows";exit();
    if($num>0)
    {
     
        $_SESSION["user_id"] = $res['user_id'];
        $_SESSION["password"]=$res['password'];
        
        header("Location:Schedule1.php"); 
        
    }
    else
    {
        header("Location: customer.html");
        exit();
    }
}
?>



      
  



