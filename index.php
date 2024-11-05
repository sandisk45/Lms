<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>LIBRARY MANGEMENT SYSTEM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold mx-3" href="index.php">Library Management System (LMS)</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
          <li class="nav-item mx-3">
            <a class="nav-link active" aria-current="page" href="admin/index.php"><strong>Admin Login</strong></span></a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="index.php"><strong>User Login</strong></a>
          </li>
            <li class="nav-item mx-3">
            <a class="nav-link" aria-current="page" href="signup.php"><strong>Register</strong></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <span><marquee>This Is A Library Management System And This System Opens At 8.00 AM And Close At 6.00 PM</marquee></span>
  <br><br>
  <div class="row">
    <div class="col-md-4" id="side_bar">
        <h5><b>Library Timing</b></h5>
        <ul>
            <li>Opening Timing: 8.00 AM</li>
            <li>Closing Timing: 6.00 PM</li>
            <li>Sunday Off</li>
        </ul>
        <h5><b>What We Provide</b></h5>
        <ul>
            <li>Free Wi-Fi</li>
            <li>News Papers</li>
            <li>Discussion Room</li>
            <li>Peacefull Environment</li>
        </ul>
    </div>
    <div class="col-md-8" id="main-content">
        <center><h3>User Login Form</h3></center>
        <form action="login.php" method="post">
            <div class="mb-3">
                <label for="Email Id" class="form-label">Email Id</label>
                <input type="email" name="email" class="form-control" required>
    
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
    
            </div>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
            </form>
            <p><a class="link-offset-2 link-underline link-underline-opacity-0" href="signup.php">Haven't Register Yet? Register Now</a></p>
    </div>
  </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>