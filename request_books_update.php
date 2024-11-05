<?php
$con = mysqli_connect('localhost','root',);
mysqli_select_db($con,'library');
$request_name=$_POST['request_name'];
$student_name=$_POST['student_name'];
$query="insert into request_books (request_name,student_name)
values ('$request_name','$student_name') ";
mysqli_query($con,$query);
?>
<script type="text/javascript">
    alert("Request Sent Successfully !");
    window.location.href = "user_dashboard.php";
</script>
