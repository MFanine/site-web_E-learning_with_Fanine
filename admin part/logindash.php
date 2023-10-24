<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="images/icon/favicon.png">
	<title>Login dash</title>
	<link rel="stylesheet" type="text/css" href="loginStyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- It will redirect to the Home Page after submitting the form -->
  <script>
//   $(document).ready(function(){
//     $("form").submit(function(){
//       alert("Great Job !");
//     });
//   });
  </script>
</head>
<body img src="images/bg1.png">
<?php
				session_start();	
				if(isset($_SESSION['login_dash'])){	
					header("location: admin.php");
				}
			?>
		<div class="form-box">
			<div class="button-box">
				<h2 class= "log">Hello !</h2>
			</div>
		
			
			<!-- Login Form -->
			<form id="login" class="input-group" action="loginhandlerdash.php" method="POST">
				<div class="inp">
					<img src="images/user.png">
					<input type="text" id="email" name='email' class="input-field" placeholder="Username or Phone Number" style="width: 88%; border:none;" required="required">
				</div>
				<div class="inp">
					<img src="images/password.png">
					<input type="password" id="password" name='password' class="input-field" placeholder="Password" style="width: 88%; border: none;" required="required">
				</div>
				<input type="checkbox" class="check-box">Remember Password
				<button name='login' type="submit" class="submit-btn">Log In</button>
			</form>


		</div>
		<script type="text/javascript" src="script.js"></script>
</body>
</html>