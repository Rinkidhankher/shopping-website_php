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
                    <a href="http://localhost/project/project/index.php" class="nav-item nav-link ">Home</a>
                            <a href="http://localhost/project/project/about.php" class="nav-item nav-link">About</a>
                            <a href="http://localhost/project/project/product.php" class="nav-item nav-link">Product</a>       
                </div>
                    <a href="index.php" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">i</span>CREAM</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">   
                    <a href="http://localhost/project/project/contact.php" class="nav-item nav-link ">Contact Us</a>                  
                        <?php 
                        if(isset($_SESSION["username"])){
                            echo '<a href="http://localhost/project/project/orders.php" class="nav-item nav-link ">Orders</a>';
                            echo '<a href="http://localhost/project/project/cart.php" class="nav-item nav-link ">Cart</a>';

                            echo '<a href="http://localhost/project/project/logout.php" class="nav-item nav-link ">Logout</a>';
                        }else{
                            echo '<a href="http://localhost/project/project/signup-form-19/index.php" class="nav-item nav-link ">Signin/Login</a>';
                        }
                        ?>  
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
