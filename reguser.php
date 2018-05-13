<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>User Signup</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
extract($_POST);
$con=mysqli_connect('localhost', 'root', '', 'quiz') or die("Couldn't connect");

if ($_POST != null) {
    $username = $_POST['name'];
    $city = $_POST['course'];
    $phone= $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['age'];

    $sql = "INSERT INTO coursered(Full_name,course,phone,email, age, regdate) VALUES ('$username','$city','$phone','$email','$age', NOW())";
    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }
    $_SESSION['alogin']="true";
    header('Location: index.php');
    exit;

    mysqli_close($con);
}

?>
</body>
</html>

