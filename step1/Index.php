<!DOCTYPE html>
<html> 
    <head>
        <title> </title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.om/css?family=Josefin+Sans&display=swap" rel="stylesheet">

    </head>
    <h1> Welcome!</h1> 
    <body> 

<?php include 'menu.php';?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
<ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->

<div class="carousel-inner">

    <div class="carousel-item active">
      <img src="images/ccl8.jpg.png" alt="1" width="1100" height="300">
    </div>

    <div class="carousel-item">
      <img src="images/ccl9.jpg.png" alt="2" width="1100" height="300">
    </div>

    <div class="carousel-item">
      <img src="images/ccl10.jpg.png" alt="3" width="1100" height="300">
    </div>

  </div> 
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</div>
<!--About US-->

<section class="my-5">
<div class="py-5">
  <h2 class="text-center">About US</h2>
</div>
<div class ="container-fluid">
<div class="row">
  <div class="col-lg-6 col-md-6 col-12">
  <img src="images/ccl6.jpg.png" class="img-fluid aboutimg">
</div>

<div class="col-lg-6 col-md-6 col-12">
<p> <i> <h1> I am Ryyan Afsaar!! </h1>

<h3>School of Skills and Knowledge <h3>

Ali Fatim is an online institute. We believe in sharing knowledge freely with all. 
We share not only knowledge but skills on demand, facts, stats, technological news, events, tips, tricks, 
and tools to make your life easy while engaging with technology. We also share motivation, directions, 
inventions, personalities with impacts. We also believe in providing an opportunity for all of you to
share your knowledge with us which will be shared with your name on our page. 
Rayyan Afsar </i> </p>
<a href="About.php"> Learn More </a>
</div>
</div>
</div>
</section>



  <!--Services -->
  <?php include 'services.php';?>

 <!--Gallery -->

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center"> Gallery </h3>
    </div>
        <div class = "container-fluid"> 
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <img src="images/ccl1.jpg.png" class="img-fluid pb-4" width="400" height="400">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
              <img src="images/ccl2.jpg.png" class="img-fluid pb-4" width="400" height="400">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
              <img src="images/ccl3.jpg.png" class="img-fluid pb-4" width="400" height="400">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
              <img src="images/ccl5.jpg.png" class="img-fluid pb-4" width="400" height="400">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
              <img src="images/ccl1.jpg.png" class="img-fluid pb-4" width="400" height="400">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
              <img src="images/ccl1.jpg.png" class="img-fluid pb-4">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
              <img src="images/ccl1.jpg.png" class="img-fluid pb-4">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
              <img src="images/ccl1.jpg.png" class="img-fluid pb-4">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
              <img src="images/ccl1.jpg.png" class="img-fluid pb-4">
          </div>
        </div>
</section>

 <!--Form-->

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center"> Contact Us </h3>
    </div>
    <div> 
      <div class="w-50 m-auto">
      <form action="Userinfo.php" method="post">
        <div class ="form group">
          <label>User</label>
          <input type="text" name="User" autocomplete="off" class="form-control">
</div>


<div class ="form group">
          <label>Email</label>
          <input type="text" name="Email" autocomplete="off" class="form-control">
</div>

<div class ="form group">
          <label>Mobile</label>
          <input type="text" name="Mobile" autocomplete="off" class="form-control">
</div>

<div class ="form group">
          <label>Comments</label>
          <textarea class="form-control" id="Comments" name="Comments" rows="4"></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>

</form>

    </div>
</section>
<footer>
  <p class="p=3 bg-dark text-white text-center">@alifatim.com.au</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    </body>

</html>