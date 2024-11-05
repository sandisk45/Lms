<?php
    session_start();
    $con = mysqli_connect('localhost','root',);
    mysqli_select_db($con,'library');
    $name= "";
    $email= "";
    $mobile = "";
    $query="select * from userdata where email='$_SESSION[email]'";
    $query_run = mysqli_query($con,$query);
    while ($row=mysqli_fetch_assoc($query_run)) {
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];

    }

?>
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
      <a class="navbar-brand fw-bold mx-3" href="user_dashboard.php">Library Management System (LMS)</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
        <li class="nav-item dropdown mx-3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <strong>My Profile</strong>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="view_profile.php"><strong>View Profiile</strong></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="change_password.php"><strong>Change Password</strong></a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="user_dashboard.php"><strong>Dashboard</strong></a>
        </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <span><marquee>This Is A Library Management System And This System Opens At 8.00 AM And Close At 6.00 PM</marquee></span>
  <br><br><br>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><strong>Username:</strong></label>
                <input type="text" class="form-control" id="inputName4" value="<?php echo $name; ?>"disabled>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><strong>Email-Id:</strong></label>
                <input type="email" class="form-control" id="exampleInputPassword1" value="<?php echo $email; ?>"disabled>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><strong>Mobile:</strong></label>
                <input type="name" class="form-control" id="exampleInputPassword1" value="<?php echo $mobile; ?>"disabled>
            </div>
            <div id="emailHelp" class="form-text">We'll never share your profile with anyone else.</div>
        
        </form>
    </div>
    <div class="col-md-4"></div>
    </div>     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>