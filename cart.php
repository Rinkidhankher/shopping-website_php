<?php


@include "config.php";
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    
  
    
</head>
<body>
       <!-- Topbar Start -->
       <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a>
                    </div>
                </div>
                
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <?php
        @include "./header.php";
    ?>
    <div class="p-5">

    
<h1>It's Your Cart Have A Look</h1>

<?php
$currentuser = $_SESSION['username'];
$cart_fetch = "SELECT * FROM allcart where cartid = (select cartid from usercart_map where username = '$currentuser')";
$result = mysqli_query($conn, $cart_fetch);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

?>
<div class="card" style="width:400px">
<div class="card-body">
      <h4 class="card-title"> Cart Id : #<?php   echo $row["cartid"] ?></h4>
      <p class="card-text">Icecream : #<?php echo  $row["productid"] ?></p>
      <p class="card-text">you have <?php echo  $row["quantity"] ?> quantity of this icecreams in cart</p>

      <p class="card-text">Total amount of this icecream : $<?php echo  $row["amount"] ?></p>

    </div>
  </div><br><br>
  <?php

    }
}
  ?>
      <a href="#" class="btn btn-primary stretched-link">Pay Now</a>
      </div>

    
</body>
</html>