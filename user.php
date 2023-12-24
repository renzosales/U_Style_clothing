<?php include_once('config.php'); 
//session_start();
//echo $_SESSION['user_info'];
if(!isset($_SESSION['user_id'])){
  header("location: index.php?msg=no_user_found");   
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>USTYLE - U Home</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<style type="text/css">
	
	.navbar-logo{
        max-width: 100px;
    }

    header {
        padding: 50px 0;
        text-align: center;
        background-image: url('ezgif.com-video-to-gif-converted (2).gif'); /* Updated path to the background image */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        filter: contrast(100%); /* Adjust the percentage as needed for contrast */
    }

     footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
            position: static;
            bottom: 0;
            width: 100%;
        }
</style>
<body>

	<nav class="navbar navbar-expand-lg bg-body-tertiary">
	  <div class="container-fluid">
	     <a class="navbar-brand" href="#"><img src="logo.png" alt="Logo" class="navbar-logo"></a>
	   		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	  <span class="navbar-toggler-icon"></span>
	    	</button>

			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			        <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
			        </li>
			        
			          
			        <!--<li class="nav-item">
			          <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
			              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
			            </svg></i></button>
			        </li>-->
			        <li class="nav-item">
			            <a href="cart.php" class="nav-link" > Cart</a>
			        </li>
			        <li class="nav-item">
			            <a href="account.php" class="nav-link"> Account</a>
			        </li>
			        <li class="nav-item">
			            <a href="logout.php" class="nav-link"> logout</a>
			        </li>
			      </ul>

	      	<form action="search.php" method="GET" class="d-flex" role="search">
		        <input class="form-control me-2" name="searchTerm" type="search" placeholder="Search" aria-label="Search">
		        <button class="btn btn-outline-success" name="search" type="submit">Search</button>
	      </form>
	    </div>
	  </div>
	</nav>

	<header class="bg-dark py-5">
	    <div class="container px-10 px-lg-10 my-5">
	        <div class="text-center text-white">
	            <h1 class="display-1 fw-bolder">CHOOSE YOUR STYLE</h1>
	            <p class="lead fw-normal text-white-50 mb-0">FIND YOUR STYLE</p>
	        </div>
	        
	    </div>
	</header>

	<section class="">
		<div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="shirt1.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Cotton Shirt</h5>
                                    <!-- Product price-->
                                    Php 250.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="custom.php">Start Customizing</a></div>
                            </div>
                        </div>
                    </div>
	</section>

	

    

<footer>
        &copy; 2023 Ustyle. All rights reserved.
    </footer>
<!-- Bootstrap core JS-->
<script src="  https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

</body>
</html>


