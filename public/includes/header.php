<!doctype html>
<html lang="en">


<?php

$phone = "01 480 1021";
$email = "chinari.saccos@gmail.com";
$address = "Gokarneshwor-4, Kathmandu";
$company = "Chinari Saving & Credit Co-operation";
$lic = "";
$map = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28382.688390905743!2d152.9964739624395!3d-27.224296799947894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b93e4e95a0f9dc9%3A0x502a35af3df04f0!2sNorth%20Lakes%20QLD%204509%2C%20Australia!5e0!3m2!1sen!2snp!4v1650971843550!5m2!1sen!2snp";

?>


<head>
  <!-- Meta -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $company; ?></title>

  <!-- LInks -->
  <!-- Boostrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- FontAwesome version 4.7 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- FontAwesome version 5.8 / 5.15-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <!-- bxslider -->
  <link rel="stylesheet" href="css/jquery.bxslider.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Slick Slider -->
  <link rel="stylesheet" href="css/slick.min.css">

  <!-- animate animation -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


  <!-- Custom Style -->
  <link rel="stylesheet" href="css/style.css">


</head>
<!-- End of Head Section -->

<body>
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="topic d-flex">
            <div class="image">
              <img src="images/logo.png" alt="">
            </div>
            <div class="title">
              <h1>Chinari <span>Saving</span></h1>
              <p>& Credit Co-operative Limited</p>
            </div>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="wrap d-flex">
            <div class="item d-flex">
              <div class="icon">
                <i class="fa-solid fa-phone"></i>
              </div>
              <div class="text">
                <p>Phone</p>
                <p class="num"><?php echo $phone; ?></p>
              </div>
            </div>
            <div class="item d-flex">
              <div class="icon">
                <i class="fa-solid fa-envelope"></i>
              </div>
              <div class="text">
                <p>Email</p>
                <p class="num"><?php echo $email; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <header class="lower">
    <nav class="navbar navbar-expand-lg ">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <img src="images/menu.png" alt="">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item ">
              <a class="nav-link <?php if($page== 'home'){echo 'active';}?>" href="./">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link <?php if($page== 'about'){echo 'active';}?>" href="about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link "href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link "href="#">Downloads</a>
            </li>
            <li class="nav-item">
              <a class="nav-link "href="#">Our Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Contact Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Login
              </a>
              <form class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><input class="dropdown-item" type="text" placeholder="Username"></li>
            <li><input class="dropdown-item" type="password" placeholder="Password"></li>
            <li>
              <p class="dropdown-item pass">Forget Password</p>
            </li>
            <li><button class="dropdown-item btn"> LOGIN </button></li>
            <li>
              <p class="dropdown-item sign">Or Signup using</p>
            </li>
            <li>
              <div class="dropdown-item icon d-flex">
                <i class="dropdown-item fa-brands fa-facebook"></i>
                <i class="dropdown-item fa-brands fa-twitter-square"></i>
                <i class="dropdown-item fa-brands fa-google"></i>
                <p class="dropdown-item or">Or signup using</p>
                <h5 class="dropdown-item">SignUp</h5>
              </div>
              
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- Header Ends -->