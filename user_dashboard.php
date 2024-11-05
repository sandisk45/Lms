<?php
require('function.php');
session_start();
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
      <a class="navbar-brand fw-bold mx-3" href="index.php">Library Management System (LMS)</a>
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
          <a class="nav-link" aria-current="page" href="index.php"><strong>Log Out</strong></a>
        </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <span><marquee>This Is A Library Management System And This System Opens At 8.00 AM And Close At 6.00 PM</marquee></span>
  <br><br>
  <div class="container">
  <div class="row">
  <div class="col-md-4 text-center">
      <div class="card" style="width: 300px height:20px;">
        <img src="issued_book.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Your Issued Books</h5>
          <p class="card-text">Number Of Issued Books : <?php echo get_user_issue_book_count();?> </p>
          <a href="view_issued_book.php" class="btn btn-success">View</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="card" style="width: 300px height:20px;">
        <img src="available_book.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Available Books</h5>
          <p class="card-text">No Of Available Books : <?php echo get_books_count(); ?> </p>
          <a href="available_book.php" class="btn btn-success">View</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="card" style="width: 300px height:20px;">
        <img src="request_book.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Request for Books</h5>
          <p class="card-text">You Can Sent A Book Requset To Admin </p>
          <a href="request_book.php" class="btn btn-success">Request</a>
        </div>
      </div>
    </div>
  

    
  </div>
  </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>