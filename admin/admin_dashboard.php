<?php
require('functions.php');
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
 
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#e3f2fd">
    <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a href="admin_dashboard.php" class="nav-link active"><strong>Dashboard</strong></a>
          </li>
        <li class="nav-item dropdown mx-3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <strong>Books</strong>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="add_books.php"><strong>Add New Books</strong></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="manage_books.php"><strong>Manage Books</strong></a></li>
          </ul>
        </li>
        <li class="nav-item dropdown mx-2">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <strong>Category</strong>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="add_category.php"><strong>Add New Category</strong></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="manage_category.php"><strong>Manage Category</strong></a></li>
          </ul>
        </li>
        <li class="nav-item dropdown mx-2">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <strong>Authors</strong>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="add_authors.php"><strong>Add New Authors</strong></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="manage_authors.php"><strong>Manage Authors</strong></a></li>
          </ul>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" aria-current="page" href="issued_books.php"><strong>Issue Books</strong></a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" aria-current="page" href="user_book_request.php"><strong>Book Requests</strong></a>
        </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <span><marquee>This Is A Library Management System And This System Opens At 8.00 AM And Close At 6.00 PM</marquee></span>
  <br><br>
  <div class="row">
    <div class="col-md-3 text-center">
      <div class="card" style="width: 300px height:20px;">
        <img src="reg_users.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Registered Users</h5>
          <p class="card-text">Number Of Registered Users : <?php echo get_user_count(); ?> </p>
          <a href="reg_users.php" class="btn btn-success">View Users</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 text-center">
      <div class="card" style="width: 300px height:20px;">
        <img src="avl_books.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Available Books</h5>
          <p class="card-text">Number Of Available Books : <?php echo get_books_count(); ?></p>
          <a href="view_books.php" class="btn btn-success">View Books</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 text-center">
      <div class="card" style="width: 300px height:20px;">
        <img src="books_cat.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Registered Category</h5>
          <p class="card-text">Number Of Registered Books Category : <?php echo get_cat_count(); ?></p>
          <a href="view_category.php" class="btn btn-success">View Category</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 text-center">
      <div class="card" style="width: 300px height:20px;">
        <img src="authors.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Registered Authors</h5>
          <p class="card-text">Number Of Avaialble Authors : <?php echo get_auth_count(); ?></p>
          <a href="view_authors.php" class="btn btn-success">View Authors</a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3 mt-4 text-center">
          <div class="card" style="width: 300px height:20px;">
            <img src="issued_books.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Issued Books</h5>
              <p class="card-text">Number Of Issued Books :  <?php echo get_issued_books_count(); ?></p>
              <a href="view_issued_books.php" class="btn btn-success">View Issued Books</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mt-4 text-center">
          <div class="card" style="width: 300px height:20px;">
            <img src="6889340.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Approved Books</h5>
              <p class="card-text">Number Of Approved Books : <?php echo get_approved_books_count(); ?></p>
              <a href="view_approved_books.php" class="btn btn-success">View approved Books</a>
            </div>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>