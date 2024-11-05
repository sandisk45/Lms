<?php
$con = mysqli_connect('localhost','root',);
mysqli_select_db($con,'library');
$query="delete from approved_books where approve_id = $_GET[reqid]";
$query_run=mysqli_query($con,$query);
header("location:view_approved_books.php");
?>