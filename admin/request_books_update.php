<?php
$con = mysqli_connect('localhost','root',);
mysqli_select_db($con,'library');
$request_book_name=$_POST['request_book_name'];
$student_name=$_POST['student_name'];
$query="insert into approved_books (request_book_name,student_name)
values ('$request_book_name','$student_name') ";
mysqli_query($con,$query);
?>
<script type="text/javascript">
    alert("Approved Successfully");
    window.location.href = "view_approved_books.php";
</script>
