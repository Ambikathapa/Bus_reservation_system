<!DOCTYPE html>
<html>
<body>
 
<?php
 
    // echo "Logged out successfully";
 
    session_start();
    session_destroy();
    
    header("Location: home.html"); 
    echo "Logged out successfully";
?>
 
</body>
</html>