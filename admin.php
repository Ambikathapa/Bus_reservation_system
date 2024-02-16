<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>welcome to my website</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="ADMIN.css">
 
 
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
      <a  href="HOME.html"> HOME</a>
      <a href="ABOUT US.html">ABOUT US </a>
       <a href="SERVICES.html">SERVICES</a>
       <a href="ROUTE AVAILABLE.html">ROUTE AVAILABLE</a>
     
      <div class="dropdown">
        <button class="active" class="dropbtn"><b>LOGIN</b>
		</button>
        <div class="dropdown-content">
          <a href="CUSTOMER.html">CUSTOMER</a>
          <a href="ADMIN.html">ADMIN</a>
         
        </div>
      </div>
	</div>

			<div class="form-box"action="db_connection.php"method="post">
				<h3 align="center">
					<font face="lato"color="brown"size="3.5" ><p><b>ADMIN</b></p></font>
				  </h3>
				<div class="button-box">
					<div id="btn"></div>
					<button type="button" class="toggle-btn" onclick="login()">Log In</button>
					<button type="button" class="toggle-btn"
					onclick="register()">Register</button>
				</div>
				<div class="social-icons">
					<img src="fb.png">
					<img src="tw.png">
					<img src="google.png">
					<img src="instagram.png">
				</div>
				<form id="login" class="input-group"action="login.php" method="post">
					<input type="char" class="input-field" placeholder="User Id"
					required>
					<input type="password" class="input-field" placeholder="Enter Password"
					required>
					<input type="checkbox" class="check-box"><span>Remember Password</span>
					<button type="Submit" class="submit-btn">Login</button>
				</form> 
				<form id="register" class="input-group"action="register.php"method="post">
					<input type="char"name="user id" class="input-field" placeholder="User Id"
					required>
                   <input type="email"name="email id" class="input-field" placeholder="Email Id"
					required>
					<input type="number"name="phone no" class="input-field" placeholder="Phone no"
					required>
					<input type="varchar"name="address" class="input-field" placeholder="Address"
					required>
                    <input type="text"name="company" class="input-field" placeholder="Bus-Company-Name"
					required>
					<input type="password"name="password" class="input-field" placeholder="Enter Password"
					required>
					<input type="radio" name="gender" id="Male"> 
      				<label for="male">Male</label>
                  <input type="radio" name="gender" id="Female"> 
                    <label for="female">Female</label>
					<input type="radio" name="gender" id="Others"> 
                    <label for="Others">Others</label><br>
					<input type="checkbox" class="check-box"><span>I agree to the terms and conditions</span>
					<input type="submit" name="submit" class="submit-btn" value="Submit"/>
				</form>
			</div>	
		</div>
		<script>
			var x = document.getElementById("login");
			var y = document.getElementById("register");
			var z = document.getElementById("btn");

			function register(){
			x.style.left="-400px";
			y.style.left="50px";
			z.style.left="110px";	
			}
			function login(){
			x.style.left="50px";
			y.style.left="450px";
			z.style.left="0px";	
			}

		</script>
    </body>
</html>