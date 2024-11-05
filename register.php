<?php
$con = mysqli_connect('localhost','root',);
mysqli_select_db($con,'library');
$mobile=$_POST['mobile'];
$user=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$query="insert into userdata (mobile,name,email,password)
values ('$mobile','$user','$email','$password') ";
mysqli_query($con,$query);
?>
<script type="text/javascript">
    alert("Registration Successfully, You May Login Now");
    window.location.href = "index.php";
</script>
