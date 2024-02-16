
<?php 

$server = "localhost";
$user = "root";
$password = "";
$db = "db_connection";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
        //  echo("Connection Successful");

}else{
        echo("No Connection");
              
}


function dd($var){
        var_dump($var);
        die();
}
?>


