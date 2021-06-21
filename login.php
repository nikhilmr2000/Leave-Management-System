<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign In</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->
<link href="assets/img/icon.png" rel="icon">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
</head>


<body style="background-color:#F2994A;">


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="register.php"><span>Leave Management App</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="getstarted scrollto" href="register.php">Sign Up</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->

<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row gy-4">
        <h2>Leave Management App is used to apply leave online. Sign In to Continue</h2>
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Sign In </h1>
          <br>
          <!--Register Form -->
            <?php require_once 'registration.php' ?>
          <form method="POST" id="logform">
           <div class="form-group col-md-6">
                  <label for="email" style="opacity:0.7">E-mail</label>
                  <input type="email" name="gmail" class="form-control" id="logemail" placeholder="Enter your E-mail" required>
          </div>
           <div class="form-group col-md-6">
                    <label for="name" style="opacity:0.7">Password</label>
                    <input type="password" name="loginpassword" class="form-control" id="logpassword" placeholder="Enter your Password" required>
           </div>
           <div>
             <button type="submit" name="signin" id="signin" class="btn-get-started scrollto" style="margin-left:50px; outline: none;  border:none;">Sign In</button>
          </div>
          <div class="credits">
        <a href="forgetpass.php" style="margin-left:190px; text-decoration: underline; font-size:15px;">Forgot Password?</a>
         </div>
          </form>

          <!--END OF FORM -->
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/login.svg" height="500" width="500" alt="">
        </div>
      </div>
    </div>
   <div></div>
   <div></div>
  </section>
 
</body>
</html>