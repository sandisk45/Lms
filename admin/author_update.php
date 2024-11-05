<?php
$con = mysqli_connect('localhost','root',);
mysqli_select_db($con,'library');
$author_name=$_POST['author_name'];
$query="insert into authors (author_name)
values ('$author_name') ";
mysqli_query($con,$query);
?>
<script type="text/javascript">
    alert("Author Added Successfully");
    window.location.href = "manage_authors.php";
</script>
