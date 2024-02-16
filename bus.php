
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>welcome to my website</title>
  <link rel="stylesheet" href="style.css">
  
 
 
<style>
  body {
    background-image: url("customer.jpg");
    background-repeat: no-repeat;
    background-attachment: covered;
    background-color: rgb(159, 195, 243); ;
  }
</style>
</head>
<body>
	
	<h3 align="left-top">
		<font face="lato" size="5.5">
			<marquee behaviour="alternative"><b>SAJA BUS RESERVATION SYSTEM</b></marquee></font>
	</font>
    <div class="navbar">
      <a href="bus.php"><b>BUS-LIST</a>
      <a href="location.php"><b>LOCATION </a>
       <a href="Schedule.php"><b>SCHEDULE</a>
      <a href="User.php"><b>USER</a>
      </div>
      <h3 align="center">
  <font face="lato"color="green"size="9" ><p><br><br><br><b>WELCOME </b></p></font>
</h3>

<?php
include('db_connection.php');
if(isset($_GET['id']) && !empty($_GET['id']) ){
	$query = $conn->query("SELECT * FROM bus where id = ".$_GET['id'])->fetch_array();
	foreach($query as $k => $val){
		$meta[$k] =  $val;
	}
}
?>
<div class="container-fluid">
	<form id="manage_bus">
		<div class="col-md-12">
        <form id="login" class="input-group"action="bus.php" method="post">
					
					<input type="text" name="name" class="control-label" placeholder="Bus Name"
					required>
					<input type="number" name="number" class="control-label" placeholder="Bus Number"
					required>
					
					<button type="Submit" class="submit-btn">Save</button>
				
	</form>
</div>
<script>
	$('#manage_bus').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'bus.php',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
    			end_load()
    			alert_toast('An error occured','danger');
			},
			success:function(resp){
				if(resp == 1){
    				end_load()
    				$('.modal').modal('hide')
    				alert_toast('Data successfully saved','success');
    				load_bus()
				}
			}
		})
	})
</script>
</body>
</html>