<?php
$con = mysqli_connect('localhost','root',);
mysqli_select_db($con,'library');
$issued_name=$_POST['issued_name'];
$student_name=$_POST['student_name'];
$query="insert into issued_books (issued_name,student_name)
values ('$issued_name','$student_name') ";
mysqli_query($con,$query);
?>
<script type="text/javascript">
    alert("Issued Successfully");
    window.location.href = "admin_dashboard.php";
</script>
