<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Adding news</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/plugins/morris.css" rel="stylesheet">


    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>


<body style="background-image: url("blur-back.jpg")">
<?php
session_start();
error_reporting(1);
include ("../database.php");

if (isset($_POST['submit'])) {
    $heading= mysqli_real_escape_string($_POST['heading']);
    $body = mysqli_real_escape_string($_POST['body']);
    $image=mysqli_real_escape_string($_POST['image']);
    $sql = "INSERT INTO news(heading, body, image, date) VALUES ('$heading','$body','$image', NOW())";
    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }

}?>
<div id="wrapper">
    <?php
    include("header1.php");
    ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <section class="content-header">
                <h1>Adding news
                </h1>
                <ol class="breadcrumb">
                    <li><a href="admin.php"><i class="fa fa-dashboard"></i> Main</a></li>
                    <li><a href="news.php"><i class="fa fa-flag"></i> news</a></li>
                    <li class="active">Adding news</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <form action="" method="post" class="validate-form form bt-space15">
                        <div class="col-md-6">
                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Details</h3>
                                </div>

                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Heading:</label>
                                        <textarea class="form-control" rows="2" name="heading" id="note"></textarea>
                                    </div>

                                    <div class="clear"></div>

                                    <div class="form-group col-xs-6">
                                        <label>Choose a picture:</label>
                                        <input type="file" class="form-control" name="image"/>
                                    </div><br>

                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Body</h3>
                                </div>
                                <div class="box-body">

                                    <div class="clear"></div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="14" name="body" id="note"></textarea>
                                    </div>

                                </div>
                                <div class="box-footer">
                                    <input type="submit" class="btn btn-primary" value="Add" /><input type="hidden" name="submit"" />
                                    <a href="news.php" class="btn btn-default">Cancel</a>
                                </div>

                            </div>
                        </div>

                    </form>
            </section>
        </div>
    </div>
</div>
<script src="js/jquery.js"></script>


<script src="js/bootstrap.min.js"></script>

<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>
