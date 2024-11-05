<?php
$con = mysqli_connect('localhost','root',);
mysqli_select_db($con,'library');
$book_name=$_POST['book_name'];
$author_id=$_POST['author_id'];
$author_name=$_POST['author_name'];
$book_price=$_POST['book_price'];
$book_no=$_POST['book_no'];
$query="insert into books (book_name,author_id,author_name,book_price,book_no)
values ('$book_name','$author_id','$author_name','$book_price','$book_no') ";
mysqli_query($con,$query);
?>
<script type="text/javascript">
    alert("Books Added Successfully");
    window.location.href = "manage_books.php";
</script>
