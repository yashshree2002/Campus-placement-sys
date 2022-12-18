<?php

session_start();
require_once("db.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v1.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">


    <title>Login</title>

    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="mainloginpg.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body>

  <!--<font face="calibri">-->
    
  <!-- Navigation Bar Start -->

  <section>
  <div class="container">
  <div class="row">
    <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="homepage_1.php" class="logo">
              <img src="assets/images/C1.jpg" alt=" LOGO">
            </a>
            <!-- ***** Logo End ***** -->

<ul class="nav">
<li class="scroll-to-section"><a href="homepage_1.php" class="active">Home</a></li>
<li class="scroll-to-section"><a href="search.php">Search Jobs</a></li>
<li class="scroll-to-section"><a href="mainregister.php">Register</a></li>
<li class="scroll-to-section">
<div class="main-menu">
<ul class="menu-list"><div class="border-first-button">
<li><a href="mainlogin.php"> Login </a>
<ul>
</ul>
</li>
</ul>
</div>
</div></li>
</ul>
<!-- ***** Menu End ***** -->
</nav>
        </div>
      </div>
    </div>
  </header>


  <header>
    <nav class="navbar navbar-default" style="margin-bottom: 0; height: 80px; background-color: white; border-color: transparent;">
      <div class="container-fluid">

        <div class="navbar-header">
          <a class="navbar-brand" style="font-size: 24px; color: #053a5a; line-height: 42px;" href="homepage_1.php"></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">     
          <ul class="nav navbar-nav navbar-right">
          <?php
          if(isset($_SESSION['id_user']) && empty($_SESSION['companyLogged'])) {
            ?>
            <li><a href="user/dashboard.php">Dashboard</a></li>
            <li><a href="logout.php">Logout</a></li>
            <?php 
            } else if(isset($_SESSION['id_user']) && isset($_SESSION['companyLogged'])){
            ?>
            <li><a href="company/dashboard.php">Dashboard</a></li>
            <li><a href="logout.php">Logout</a></li>
            <?php } else { 
            ?>
            
          <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  </div>
  </div>
  </section>

  <!-- Navigation Bar End -->
  <br>
  <br>
  <br>
  <br>
  

<div class="container-fluid">
    <h1 class="text-center mt-5 display-3 fw-bold">CHOOSE YOUR<span class="theme-text">LOGIN </span>TYPE</h1>
    <hr class="mx-auto mb-5 w-25">
    <div class="row mb-5">
        <div class="col-12 col-sm-6 col-md-3 m-auto">
            <!-- card starts here -->
            <div class="card shadow">
                <img src="images/web.svg" alt="" class="card-img-top">
                <div class="card-body">
                    <h3 class="text-center"><a href="login.php">STUDENT LOGIN</a></h3>
                    <hr class="mx-auto w-75">
                    
                </div>
            </div>
            <!-- card ends here -->
        </div>
        <!-- col ends here -->
        <div class="col-12 col-sm-6 col-md-3 m-auto">
            <!-- card starts here -->
            <div class="card shadow">
                <img src="images/app.svg" alt="" class="card-img-top">
                <div class="card-body">
                    <h3 class="text-center"><a href="company-login.php">COMPANY LOGIN</a></h3>
                    <hr class="mx-auto w-75">
                  
                </div>
            </div>
            <!-- card ends here -->
        </div>
        <!-- col ends here -->
        <div class="col-12 col-sm-6 col-md-3 m-auto">
            <!-- card starts here -->
            <div class="card shadow">
                <img src="images/dm.svg" alt="" class="card-img-top">
                <div class="card-body">
                    <h3 class="text-center"><a href="admin/index.php">ADMIN LOGIN</a></h3>
                    <hr class="mx-auto w-75">
                </div>
            </div>
            <!-- card ends here -->
        </div>
        <!-- col ends here -->
        </div>
        <!-- col ends here -->
    </div>
</div>
  <br>
  <br>
<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 Campus Placement . All Rights Reserved. 
          
        </div>
      </div>
    </div>
  </footer>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>

  </body>
</html>