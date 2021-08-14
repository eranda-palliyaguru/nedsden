<html>
<head>
<title>Login</title>
<meta charset="UTF-8">
  <link rel="stylesheet" href="loging.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>


<?php
include('facebook.php');
//include('connect.php');

 ?>


 <?php
 	$message=".";
 session_start();
 if (isset($_SESSION["name"]))
 {
 	header("location:index.php");
 }
 $connect = mysqli_connect("localhost", "root", "", "foodcity");
 if (isset($_POST["login"]))
 {
 	if (!empty($_POST["user_name"]) && !empty($_POST["user_password"]))
 	{
 		$name = mysqli_real_escape_string($connect, $_POST["user_name"]);
 		$password = md5(mysqli_real_escape_string($connect,$_POST["user_password"]));
 		$sql = "Select * from user where name = '" . $name . "' and password = '" . $password . "'";
 		$result = mysqli_query($connect, $sql);
 		$user = mysqli_fetch_array($result);
 		if ($user)
 		{
 			// Saving the username and password as cookies
 			if (!empty($_POST["rememberme"]))
 			{
$message = "success";
 				// Username is stored as cookie for 10 years as
 				// 10years * 365days * 24hrs * 60mins * 60secs
 				setcookie("user_login", $name, time() +	(10 * 365 * 24 * 60 * 60));

 				// Password is stored as cookie for 10 years as
 				// 10years * 365days * 24hrs * 60mins * 60secs

 			//	setcookie("user_password", $password, time() +
 			//						(10 * 365 * 24 * 60 * 60));

 				// After setting cookies the session variable will be set
 				$_SESSION["name"] = $name;

 			}
 			else
 			{
 				if (isset($_COOKIE["user_login"]))
 				{
 					setcookie("user_login", "");
 				}
 				if (isset($_COOKIE["user_password"]))
 				{
 					setcookie("user_password", "");
 				}
 			}

 			header("location:index.php");
 		}
 		else
 		{
 			$message = "Invalid Login Credentials";
 		}
 	}
 	else
 	{
 		$message = "Both are Required Fields. Please fill both the fields";
 	}
 }
 ?>





<!-- The JS SDK Login Button -->

<!-- Load the JS SDK asynchronously -->
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>

<h1>Food City Lanka</h1>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="bi bi-facebook" style="font-size:35px; color:#015AC4 "></i></a>
				<a href="#" class="social"><i class="bi bi-google"style="font-size:35px;"></i></a>

			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
      <h3 style="color:red"><?php echo $message; ?></h3>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#" method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="bi bi-facebook" style="font-size:35px; color:#015AC4  "></i></a>
				<a href="#" class="social" ><i class="bi bi-google"style="font-size:35px;  "></i></a>

			</div>
			<span>or use your account</span>
			<input name="user_name" type="text" placeholder="Email" />
			<input name="user_password" type="password" placeholder="Password" />
      <input type="checkbox" name="rememberme"  value="1">Remember Me
      <h3 style="color:red"><?php echo $message; ?></h3>
			<a href="#">Forgot your password?</a>
			<button name="login">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>


<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>

</body>
<script type="text/javascript">
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
container.classList.remove("right-panel-active");
});
</script>
</html>
