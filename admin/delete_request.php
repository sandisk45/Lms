<?php
$con = mysqli_connect('localhost','root',);
mysqli_select_db($con,'library');
$query="delete from request_books where request_id = $_GET[rn]";
$query_run=mysqli_query($con,$query);
header("location:user_book_request.php");
?>

