<?php
session_start();
$con = mysqli_connect('localhost','root',);
mysqli_select_db($con,'library');
$password="";
$query="select * from admins where email='$_SESSION[email]'";
$query_run = mysqli_query($con,$query);
while ($row=mysqli_fetch_assoc($query_run)) {
   $password=$row['password'];
}
if($password==$_POST['old_password']){
    $query="update admins set password='$_POST[new_password]' where email = '$_SESSION[email]'";
    $query_run=mysqli_query($con,$query);
    echo '<script language="javascript">';
    echo 'alert("Password Updated Successfully")';
    echo '</script>';
}
else {
    echo '<script language="javascript">';
    echo 'alert("Wrong Password")';
    echo '</script>';
}
?>

