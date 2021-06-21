<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/img/icon.png" rel="icon">

</head>


<body style="background-color:#ffd585;">
  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="register.php"><span>Leave Management App</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="getstarted scrollto" href="login.php">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
    <style>
      .still{
        color:red;
        font-weight:bold;
      }
    </style>
  </header><!-- End Header -->

  <section>
    <div class="container">
      <br><br><br><br>
      <div class="row gy-4">
        <h2 style="margin-left:20px; font-weight:bold; font-size:50px; ">Sign Up</h2>
        <?php require_once 'registration.php' ?>
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"> 
          <form method="POST" id="regform">
          <div class="form-group col-md-6">
                  <label for="name" style="font-weight:800">Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter your Name" required>                  
          </div>
          <div class="form-group col-md-6">
                  <label for="regnumber" style="font-weight:800">Registration Number</label>
                  <input type="number" name="regno" class="form-control" id="regno" placeholder="Enter your Register Number" size="50" style="width:249px; " required>
                  
          </div>
          <div class="form-group col-md-6">
                  <label for="email" style="font-weight:800">E-Mail ID</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Enter your E-mail ID" required>
                  
          </div>
          <div class="form-group col-md-6">
                  <label for="password" style="font-weight:800">Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Enter your Password" required>
                  
          </div>
          <br>
          <div>
             <button type="submit" name="signup"  id="signup"  class="btn " style="margin-left:70px; outline: none;  border:none; background-color:#f14800; color:white; width:100px;">Sign Up</button>
          </div>

          </form>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/register2.svg"  height=400 weight=400 alt="">
        </div>
      </div>
    </div>
   </section>
   
  </body>

  </html>