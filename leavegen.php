<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Apply For Leave</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->

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
  <link href="assets/img/icon.png" rel="icon">
</head>


<body style="background-color:#f6e3da">
  <?php require_once 'registration.php' ?>
  <?php session_start() ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="register.php"><span>Leave Management App</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a>Dashboard</a></li>
          <li class="dropdown"><a href="#"><span>Hello <?php echo $_SESSION['user']; ?></span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="login.php">Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header>

  <section>
    <div class="container">
      <br><br><br><br>
      <div class="row gy-4">
        <h2 style="margin-left:20px; font-weight:bold; font-size:50px; ">Apply Here For Leave</h2>
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          
          <form method="POST">
          <div class="form-group col-md-6">
                  <label for="name" style="font-weight:800">Name</label>
                  <input type="text" name="fname" class="form-control" id="name" placeholder="Enter your Name" required>
          </div>
          <div class="form-group col-md-6">
                  <label for="regnumber" style="font-weight:800">Registration Number</label>
                  <input type="number" name="fregno" class="form-control" id="regno" placeholder="Enter your Register Number" size="50" style="width:249px;"required>
          </div>
          <div class="form-group col-md-6">
                  <label for="dept" style="font-weight:800">Department</label>
                  <select class="form-control" style="width:360px;" name="dept" required>
                    <option>Select Your Department</option>
                    <option value="Computer science and Engineering" class="form-control">Computer Science and Engineering</option>
                    <option value="Electronics and Electronics Engineering" class="form-control">Electronics and Electrical Engineering</option>
                    <option value="Mechanical Engineering" class="form-control">Mechanical Engineering</option>
                    <option value="Electronics and Communication Engineering" class="form-control">Electronics and Communication Engineering</option>
                    <option value="Civil Engineering" class="form-control">Civil Engineering</option>
                  </select>
          </div>
          <div class="form-group col-md-6">
                  <label for="days" style="font-weight:800" >Number of days </label>
                  <select class="form-control" name="days" id="days" onchange="SelectedDay()" required>
                    <option class="form-control"  hidden selected>Select Here</option>
                    <option class="form-control" value="1">One day</option>
                    <option class="form-control" value="2">More than a Day</option>
                  </select>
          </div>

          <script>
            function SelectedDay(){
              var i=0;
              if(document.getElementById("days").value==1){
                      document.getElementById("content").style.display='block';    
                      document.getElementById("more").style.display="none";

              }
              else if(document.getElementById("days").value==2){

                
                  document.getElementById("more").style.display='block';
                  document.getElementById("content").style.display="none";
                    
            }}
          </script>
           <div class="form-group col-md-6" id='content' style="display:none;">
            <label for="date" style="font-weight:800">Date of Leave</label>
            <input type="date" name="dob" class="form-control" id="fdate" placeholder="From :" >
           </div>
          <div class="form-group col-md-6" id='more' style="display:none;">
                  <label for="date" style="font-weight:800">From</label>
                  <input type="date" name="fromdob" class="form-control" id="fdate" placeholder="From :" ><br>
                  <label for="date" style="font-weight:800">To</label>
                  <input type="date" name="todob" class="form-control" id="tdate" placeholder="To : " >
          </div>
          <div class="form-group col-md-6">
                  <label for="reason" style="font-weight:800">Reason For Leave</label>
                  <input type="text" name="reason" class="form-control" id="password" placeholder="Reason For Leave" style="height:100px;width:400px;" required>
          </div>
          <br>
          <div>
             <button type="submit" name="apply" class="btn " style="margin-left:15px; outline: none;  border:none; background-color:#f14800; color:white; width:150px; height:50px">Apply Here</button>
          </div>

          </form>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/apply.svg"  height=400 weight=400 alt="">
        </div>
      </div>
    </div>
   </section>

</body>
</html>