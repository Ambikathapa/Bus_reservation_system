

<?php 

session_start();

include 'db_connection.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user_id= $_POST['user_id']  ;
  $password = $_POST['password'] ;
  $company = $_POST['company'] ;
   
   
     $query = mysqli_query($con,"SELECT * FROM register where user_id='$user_id'and
     password='$password'and company='$company'") ;
    $num = mysqli_num_rows($query);
    $res = mysqli_fetch_assoc($query);
    // echo "Found ".$num." rows";exit();
    if($num>0)
    {
     
        $_SESSION["user_id"] = $res['user_id'];
        $_SESSION["password"]=$res['password'];
        $_SESSION["company"]=$res['company'];
        header("Location: welcome.php"); 
        
    }
    else
    {
        header("Location: admin.html");
        exit();
    }
}
?>



      
  



