<?php
$con = mysqli_connect('localhost','root',);
mysqli_select_db($con,'library');
$query="delete from issued_books where issued_id = $_GET[appid]";
$query_run=mysqli_query($con,$query);
header("location:view_issued_books.php");
?>

