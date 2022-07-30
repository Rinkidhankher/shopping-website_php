<!doctype html>
<html lang="en">
  <head>
  	<title>Sign Up 09</title>
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

	<body class="img" style="background-image: url(images/bg.jpg.jpg);">

		<!-- error part here -->
		<?php
		$username = $email = $password = $cpassword = "";
		$nameErr = $emailErr = $passwordErr = $cpasswordErr = "";
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			if(empty($_POST["fullname"])){
				$nameErr = "your name shouldn't be empty";
			}
		else{
			$name = $_POST["fullname"];
			if(!preg_match("/^[a-zA-Z-']*$/",$name)){
				$nameErr = "only letter and whites spaces not allowed";
			}
		}

		if(empty($_POST["email"])){
			$emailErr = "email address is empty";


		}else{
			$email = $_POST["email"];
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email format";
			}
		}

		if(empty($_POST["password"])){
			$passwordErr = "please fill any password";
		}else{
			$password = $_POST["password"];
				if( !preg_match("#[0-9]+#", $password ) ) {
					$passwordErr= "Password must include at least one number!";
				}if( strlen($password ) < 8 ) {
					$passwordErr = "Password too short!";
			
				}if( strlen($password ) > 20 ) {
					$passwordErr = "Password too long!";
					
				
				}if( !preg_match("#[a-z]+#", $password ) ) {
					$passwordErr= "Password must include at least one letter!";
					
					}if( !preg_match("#[A-Z]+#", $password ) ) {
						$password = "Password must include at least one CAPS!";
						
					}
		
			
		}
	if(empty($_POST["confirmPASSWORD"])){
		$cpasswordErr = "please fill your confirm password again";
	}else{
		if ( $_POST["confirmPASSWORD"] != $_POST["password"]) {
			$cpasswordErr = "password doesn't match";
 		}
		 else{
			$cpassword = $_POST["confirmPASSWORD"];

		 }
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
                        <a href="../index.php" class="nav-item nav-link active">Home</a>
                        <a href="../about.php" class="nav-item nav-link">About</a>
                        <a href="../product.php" class="nav-item nav-link">Product</a>
                    </div>
                    <a href="../index.php" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">i</span>CREAM</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="../service.php" class="nav-item nav-link">Service</a>
                        <a href="../gallery.php" class="nav-item nav-link">Gallery</a>
                        <a href="../contact.php" class="nav-item nav-link">Contact</a>
                        <a href="signup-form-19" class="nav-item nav-link">Register/Login</a>
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
					<h2 class="heading-section">Sign Up </h2>
				</div>
			</div>
			<?php
            if(isset($error)){
                foreach($error as $x){

                    echo '<span class = "error-msg">' .$x .'</span>';
                }
            }
            ?>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap">
		      	<h3 class="text-center mb-4">Create Your Account</h3>
						<form action="<?php echo($_SERVER['PHP_SELF']);?>" method="post" class="signup-form">
		      		<div class="form-group mb-3">
		      			<label class="label" for="name">UserName</label>
		      			<input type="text" for="name" class="form-control" class="error" placeholder="John Doe"  name="fullname"><small style="color:red;"><?php if(!empty($nameErr)){ echo $nameErr; } ?></small>
		      			<span class="icon fa fa-user-o"></span>
		      		</div>
		      		<div class="form-group mb-3">
		      			<label class="label" for="email">Email Address</label>
		      			<input type="text"  name="email" for ="email" class="form-control" class="error" placeholder="johndoe@gmail.com" name="email"> <small style="color:red;"><?php if(!empty($emailErr)){echo $emailErr;} ?> </small>
		      			<span class="icon fa fa-paper-plane-o"></span>
		      		</div>
	            <div class="form-group mb-3">
	            	<label class="label" for="password">Password</label>
	              <input id="password" type="password" class="form-control" placeholder="Password" name="password"><small style="color:red;"><?php if(!empty($passwordErr)){echo $passwordErr;} ?> </small>
	              <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	              <span class="icon fa fa-lock"></span>
	            </div>
	            <div class="form-group mb-3">
	            	<label class="label" for="password">Password</label>
	              <input id="password-confirm" type="password" class="form-control" placeholder="Password" name="confirmPASSWORD"><small style="color:red;"><?php if(!empty($cpasswordErr)){echo $cpasswordErr;} ?> </small>
	              <span toggle="#password-confirm" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	              <span class="icon fa fa-lock"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" name="submit">Sign Up</button>
	            </div>
	          </form>
	          <p>I'm already a member! <a href="../login-form-20/login-form-20/index.php">Sign In</a></p>
	        </div>
				</div>
			</div>
		</div>
	</section>

   <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$db = "icecream";
$conn = new mysqli($servername , $username , $password , $db);
if($conn->connect_error){
	echo"failed to connect" .$conn ->connect_error;
  }else{
	  echo"connect";
  }

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username ="";
    $username = $_POST["fullname"];
    $email = "";
    $email = $_POST["email"];
    $password = "";
    $password = $_POST["password"];
	$confirmPASSWORD = "";
	$confirmPASSWORD = $_POST["confirmPASSWORD"];
    
    $sql = "INSERT INTO users(username , email , password)Values ('$username' , '$email', '$password');";
		$isexecuted=$conn->query($sql);

	if ($isexecuted === TRUE) {
		
?>
		<script>
			  location.replace("http://localhost/project/project/login-form-20/login-form-20/index.php");
		</script>
		<?php
		
	  } else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	  }
	  
	  $conn->close();
}
?>

	</body>
</html>

