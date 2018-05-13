<?php

session_start();
error_reporting(1);
include ("database.php");
if ($_POST != null) {
    $massage = $_POST['massage'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO massages(massage, name, email, time) VALUES ('$massage','$name','$email', NOW())";
    if (!mysqli_query($cn, $sql)) 
    {
        die('Error: ' . mysqli_error($cn));
    }
     header('Location: index.php');

    mysqli_close($cn);
}