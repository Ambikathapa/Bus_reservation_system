<?php 

session_start();
include 'db_connection.php';

if(isset($_POST['submit'])) {
    $user_id= $_POST['user_id']  ;
        $password = $_POST['password']  ;
    // $p = md5();

    $user_id_search =" select * from registration where user_id ='$user_id' ";
    $query = mysqli_query($con,$user_id_search);

    $user_id_count = mysqli_num_rows($query);

    if($user_id_count){
        $user_password = mysqli_fetch_assoc($query);

        $con_password = $user_password['password'];

        $_SESSION['user_id'] = $user_id _password['user_id '];

        $password_decode = password_verify($password, $con_password);

        if($password_decode){
            // echo"Login Successful";
            ?>
            <script>
                alert("Login Successful");
            </script>
        <?php

            ?>
              <script>
            location.replace("home.php");
        </script>
            <?php

        }else{
        //echo "Password Incorrect";
        ?>
        <script>
            alert("Password Incorrect");
        </script>
    <?php
    }

}else{
    echo "Invalid Name";
}
}

?>

