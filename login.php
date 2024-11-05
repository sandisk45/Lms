<?php
    session_start();
    if (isset($_POST['login'])){
        $con = mysqli_connect('localhost','root',);
        mysqli_select_db($con,'library');
        $query="select * from userdata where email='$_POST[email]'";
        $query_run = mysqli_query($con,$query);
        while ($row=mysqli_fetch_assoc($query_run)) {
            if($row['email']==$_POST['email']){
                if($row['password']==$_POST['password']){
                    $_SESSION['name']=$row['name'];
                    $_SESSION['email']=$row['email'];
                    header("location:user_dashboard.php");
                }
                else{
                    echo '<script language="javascript">';
                    echo 'alert("Login Failed, Something Wrong With Your Details")';
                    echo '</script>';
                    
                }
            }
            else {
                echo "wrong email";
            }
        }
    }

?>