<?php
$con = mysqli_connect('localhost','root',);
mysqli_select_db($con,'library');
$query="delete from books where book_no = $_GET[bn]";
$query_run=mysqli_query($con,$query);
header("location:manage_books.php");
?>

