<?php
$con = mysqli_connect('localhost','root',);
mysqli_select_db($con,'library');
$book_name="";
$book_no="";
$author_name="";
$author_id="";
$book_price="";
$query="select * from books where book_no = $_GET[bn]";
$query_run=mysqli_query($con,$query);
while ($row=mysqli_fetch_assoc($query_run)) {
    $book_name=$row['book_name'];
    $book_no=$row['book_no'];
    $author_name=$row['author_name'];
    $author_id=$row['author_id'];
    $book_price=$row['book_price'];
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
      <a class="navbar-brand fw-bold mx-3" href="admin_dashboard.php">Library Management System (LMS)</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="admin_dashboard.php"><strong>Dashboard</strong></a>
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
        <form action="" method="post">
            <div class="mb-3">
                <label for="name" class="form-label"><strong>Book Name</strong></label>
                <input type="text" name="book_name" value="<?php echo $book_name;?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label"><strong>Book No</strong></label>
                <input type="text" name="book_no" value="<?php echo $book_no;?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label"><strong>Author Name</strong></label>
                <input type="text" name="author_name" value="<?php echo $author_name;?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label"><strong>Author_id</strong></label>
                <input type="text" name="author_id" value="<?php echo $author_id;?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label"><strong>Book Price</strong></label>
                <input type="text" name="book_price" value="<?php echo $book_price;?>" class="form-control" required>
            </div>

            <button type="update" name="update"class="btn btn-success">Update Book</button>
            
        
        </form>
    </div>
    <div class="col-md-4"></div>
    </div>     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
<?php
if(isset($_POST['update'])){
    $con = mysqli_connect('localhost','root',);
    mysqli_select_db($con,'library');
    $query="update books set book_name='$_POST[book_name]', book_no=$_POST[book_no],author_name='$_POST[author_name]',author_id=$_POST[author_id],book_price='$_POST[book_price]' where book_no=$_GET[bn]";
    mysqli_query($con,$query);
    header("location:manage_books.php");
}

?>
