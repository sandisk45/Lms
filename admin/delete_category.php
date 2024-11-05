<?php
$con = mysqli_connect('localhost','root',);
mysqli_select_db($con,'library');
$query="delete from category where cat_id = $_GET[cid]";
$query_run=mysqli_query($con,$query);
header("location:manage_category.php");
?>

