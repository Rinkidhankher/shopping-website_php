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

	 <!-- Navbar Start -->
	 <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="index.php" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">i</span>CREAM</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="product.php" class="nav-item nav-link">Product</a>
                    </div>
                    <a href="index.php" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">i</span>CREAM</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="" class="nav-item nav-link">Service</a>
                        <a href="../gallery.php" class="nav-item nav-link">Gallery</a>
                        <a href="../contact.php" class="nav-item nav-link">Contact</a>
                        <a href="../signup-form-19" class="nav-item nav-link">Register/Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

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
		      			<input type="text" class="form-control" placeholder="Username" name="username" required>
						  <span class="error"><?php if(!empty($username)){echo $usernameErr; }?></span>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" name="password"  required>
				  <span class="error"><?php echo $passwordErr;?></span>
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
<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$db = "icecream";
$conn = new mysqli($servername , $username , $password , $db);

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$username = "";
	$username = $_POST["username"];
	$password = "";
	$password = $_POST["password"];
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$pass = $_POST['password'];
		$check_login = "SELECT *FROM users WHERE username = '$username' && password = '$pass'";
		$result = mysqli_query($conn, $check_login);
		if(mysqli_num_rows($result )==1){
				echo "<h1 style='color:red;'>true<h1>";
		}else{
			echo "<h1 style='color:red;'>false<h1>";
		}
	}
}
?>

