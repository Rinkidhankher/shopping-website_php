<?php
session_start();
@include "../config.php";
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<style>
		.error{
			color: red;
		}
	</style>

	</head>
	<body class="img js-fullheight" style="background-image: url(images/icecream.avif);">

	<?php
		$username = $password = "";
		$usernameErr = $passwordErr = "";
		if(isset($_POST['submit'])){
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			if(empty($_POST["username"])){
				$usernameErr = "*your name shouldn't be empty";
			}
		}else{
			$username = $_POST["username"];	
		}
			if(empty($_POST["password"])){
				$passwordErr = "*your password shouldn't be empty";
			}else{
				$password =$_POST["password"];
			}
		}
	?>
	<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$username = "";
	$username = $_POST["fullname"];
	$password = "";
	$password = $_POST["password"];
	if(isset($_POST['submit'])){
		$username = $_POST['fullname'];
		$pass = $_POST['password'];
		$check_login = "SELECT * FROM users WHERE username = '$username' && password = '$pass'";
		$result = mysqli_query($conn, $check_login);
		if(mysqli_num_rows($result )>0){	
				$_SESSION['username'] = $username;	
				header("location:../index.php");
				
		}else{

		}
	}
}
?>


<?php @include "../header.php" ?>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="<?php $_SERVER["PHP_SELF"] ?>" class="signin-form" method="POST">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Username" name="fullname" required>
						  <span class="error"><?php if(empty($username)){echo "<p>$usernameErr</p>"; }?></span>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" name="password"  required>
				  <span class="error"><?php if(empty($password)){echo "<p>$passwordErr</p>"; }?></span>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" name="submit">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>	
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

