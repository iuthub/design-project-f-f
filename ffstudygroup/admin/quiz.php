<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adminstrative Quiz </title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<style>

</style>
<body>
<div id="wrapper">
<?php
include("header1.php");
?>
    <div id="page-wrapper">
         <p align="center"> Creating Quiz </p>


               <p class="style7"><a href="subadd.php">Add Subject</a></p>
               <p class="style7"><a href="testadd.php">Add Test</a></p>
               <p class="style7"><a href="questionadd.php">Add Question </a></p>



    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>
