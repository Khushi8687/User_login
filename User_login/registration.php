<?php
require('db.php');
if (isset($_REQUEST['username'])) {
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con, $username);
	$email    = stripslashes($_REQUEST['email']);
	$email    = mysqli_real_escape_string($con, $email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con, $password);
	$query    = "INSERT into `loginsystem` (username, password, email)
				 VALUES ('$username', '" . md5($password) . "', '$email')";
	$result   = mysqli_query($con, $query);
	if ($result) {
		echo "<div class='form'>
			  <h3>You are registered successfully.</h3><br/>
			  <p class='link'>Click here to <a href='login.php'>Login</a></p>
			  </div>";
	} else {
		echo "<div class='form'>
			  <h3>Required fields are missing.</h3><br/>
			  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
			  </div>";
	}
} 
?>
<!DOCTYPE html>
<head>  <h3> Khushi Patel 191203107010</h3>
<meta charset="utf-8"/>
<link rel="stylesheet" href="style.css"/>
<title> Registration Form </title>
<body> 	
<div class="header">
          <h1> Registration Form </h1>
</div>
<form>
<div class="input-group">
	Userame: <input type ="text" name="username" /> </div>
        <br> 
		<div class="input-group">
	Email: <input type="email" name="email" required>
</div>        <br>
<div class="input-group">
    Password <input id="password" name="password" type="password"/> </div>  <br>
<div class="input-group">
	Confirm Password <input id="cpassword" name="cpassword" type="password"/> </div> <br>
	<div class="input-group">
<button type="submit" class="btn" name="reg_user">Register</button>
</div>
	<p>
		Already have an account ? <a href="login.php">login</a>
		</p>
</form>
</body>
</html>