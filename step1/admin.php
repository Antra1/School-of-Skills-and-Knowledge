<!DOCTYPE html>
<html> 
    <head>
        <title> Admin Page </title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.om/css?family=Josefin+Sans&display=swap" rel="stylesheet">

    </head>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Ali Fatim Admin</a>
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" href="adminservices.php">Services</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="userenquires.php">User Enquires</a>
      </li>
    
    </ul>
</nav>
    <body> 
 <!--Form-->

 <section class="my-5">
    <div class="py-5">
        <h3 class="text-center"> Admin Login </h3>
    </div>
    <div> 
      <div class="w-50 m-auto">
      <form action="adminlogin.php" method="post">
        <div class ="form group">
          <label>Username</label>
          <input type="text" name="Username" autocomplete="off" class="form-control">
</div>
<div class ="form group">
          <label>Password</label>
          <input type="Password" name="Password" autocomplete="off" class="form-control">
</div>
<div>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

</body>
</html>