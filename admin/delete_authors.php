<?php
$con = mysqli_connect('localhost','root',);
mysqli_select_db($con,'library');
$query="delete from authors where author_id = $_GET[aid]";
$query_run=mysqli_query($con,$query);
header("location:manage_authors.php");
?>

