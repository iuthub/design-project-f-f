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
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">



</head>


<body style="background-image: url("blur-back.jpg")">
<?php
session_start();
error_reporting(1);
$con=mysqli_connect('localhost', 'root', '', 'quiz') or die("Couldn't connect");

if ($_POST != null) {
    $heading =  mysql_real_escape_string($_POST['heading']);
    $body = mysql_real_escape_string($_POST['body']);
    $image = $_POST['image'];

    $sql = "SELECT heading, body FROM news";
    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }

    mysqli_close($con);
}?>
<div id="wrapper">
    <?php
    include("header1.php");
    ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <section class="content-header">
                <h1>Editing News
                </h1>
                <ol class="breadcrumb">
                    <li><a href="admin.php"><i class="fa fa-dashboard"></i> Main</a></li>
                    <li><a href="news.php"><i class="fa fa-flag"></i> news</a></li>
                    <li class="active">Editing news</li>
                </ol>
            </section>

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
                                        <textarea class="form-control" rows="2" name="heading" id="note">
                                            <?php
                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                            echo $row["heading"];
                                            ?>
                                        </textarea>
                                    </div>

                                    <div class="clear"></div>


                                </div><!-- /.box-body -->

                            </div><!-- /.box -->
                        </div><!-- /.col (right) -->
                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Body</h3>
                                </div>
                                <div class="box-body">

                                    <div class="clear"></div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="14" name="body" id="note">
                                            <?php
                                            echo $row["body"];
                                            ?>
                                        </textarea>
                                    </div>

                                </div>
                                <div class="box-footer">
                                    <input type="submit" class="btn btn-primary" value="Update"  /><input type="hidden" name="submit"" />
                                    <a href="news.php" class="btn btn-default">Cancel</a>
                                </div>

                            </div>
                        </div>
                        <?php
                        }}
                        $con->close();
                        ?>


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
