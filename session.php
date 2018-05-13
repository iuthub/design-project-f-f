<?php

include ("database.php");
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($cn, "select username from mst_user where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
    mysqli_close($cn); 
    header('Location: index.php'); 
}
?>