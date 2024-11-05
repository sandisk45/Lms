<?php
$con = mysqli_connect('localhost','root',);
mysqli_select_db($con,'library');
$cat_name=$_POST['cat_name'];
$query="insert into category (cat_name)
values ('$cat_name') ";
mysqli_query($con,$query);
?>
<script type="text/javascript">
    alert("Category Added Successfully");
    window.location.href = "manage_category.php";
</script>
