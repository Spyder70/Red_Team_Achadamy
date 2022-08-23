<?php
   require 'config.php';
   error_reporting(0);
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Red Team Hacker Achadamy</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <!-- Favicons -->
      <link href="assets/img/favicon.png" rel="icon">
      <link href="assets/img/hklogo.jpg" rel="hklogo">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <!-- Vendor CSS Files -->
      <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
      <link href="assets/vendor/aos/aos.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
      <!-- Template Main CSS File -->
      <link href="assets/css/style.css" rel="stylesheet">
      <!-- Favicons -->
      <link href="assets/img/favicon.png" rel="icon">
      <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      <!-- Template Main CSS File -->
      <link href="assets/css/style.css" rel="stylesheet">
   </head>
   <body>
      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top">
         <div class="container d-flex align-items-center">
            <p style="padding-top: 15px;padding-right: 10px;font-family: sans-serif;font-weight: bold;font-size: 20px;">Red Team Hacker Achadamy</p>
            <a href="index.php" class="logo me-auto"><img src="image/" alt="" class="img-fluid"></a>
            <nav id="navbar" class="navbar order-last order-lg-0">
               <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="courses.php">Courses</a></li>
                  <li><a href="staff.php">Our Team</a></li>
                  <li><a class="active" href="events.php">Events</a></li>
                  <li><a href="contact.php">Contact</a></li>
                  <?php if (isset($_SESSION['USER_LOGIN'])) {
                     ?>
                  <li class="dropdown">
                     <a href="#"><span>Hi,<?php echo $_SESSION['USER_NAME'] ?></span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                        <li><a href="logout.php">Logout</a></li>
                     </ul>
                  </li>
                  <?php
                     } else {
                     	?>
                  <li><a href="User-login/index.php">Login</a></li>
                  <?php
                     }
                     ?>
               </ul>
               <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
         </div>
      </header>
      <!-- End Header -->