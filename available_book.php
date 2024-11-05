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
        <form action="" class="d-flex" method="post">
        <input class="form-control me-2" type="search" name="filter_value" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" name="filter_btn" type="submit">Search</button>
        </form>
    </div>
  </nav>
  <br>
  <span><marquee>This Is A Library Management System And This System Opens At 8.00 AM And Close At 6.00 PM</marquee></span>
  <br><br>
 <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form>
            <table class="table-bordered"  width="100%" style="text-align:center">
              <thead>
                <tr>
                    <th>BOOK NAME</th>
                    <th>AUTHOR NAME</th>
                    <th>BOOK PRICE</th>
                    
                </tr>
              </thead>
              <tbody>
                <?php
                $connection=mysqli_connect('localhost','root','','library');
                if(isset($_POST['filter_btn']))
                {
                  $value_filter=$_POST['filter_value'];
                  $query="SELECT * FROM `books` WHERE CONCAT(book_name,author_name,book_price) LIKE '%$value_filter%' ";
                  $query_run=mysqli_query($connection, $query);
                  if(mysqli_num_rows($query_run) > 0)
                  {
                    while($row=mysqli_fetch_array($query_run))
                    {
                      ?>
                      <tr>
                        <td><?php echo $row['book_name']; ?></td>
                        <td><?php echo $row['author_name']; ?></td>
                        <td><?php echo $row['book_price']; ?></td>
                        
                      </tr>
                      <?php
                    }
                  }
                
                  else
                  {
                    ?>
                    <tr>
                      <td colspan="5">Not Available</td>
                    </tr>
                    <?php
                  }
                }
                ?>
                
              </tbody>

            </table>
        </form>
    </div>
    <div class="col-md-2"></div>

 </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>