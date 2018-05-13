<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Signing in</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/css/plugins/morris.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
        .panel-green {
            border-color: #00a65a;
        }

        .panel-green > .panel-heading {
            border-color: #00a65a;
            color: #fff;
            background-color: #00a65a;
        }

        .panel-green > a {
            color: #00a65a;
        }

        .panel-green > a:hover {
            color: #3d8b3d;
        }

        #page-wrapper {
            width: 100%;
            padding: 0;
            background-color: #fff;
        }

        @media(min-width:768px) {

            #page-wrapper {
                padding: 10px;
            }
        }
    </style>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>
<body>

    <?php
    include("header.php");
    ?>
    <div id="page-wrapper">

        <section id="quiz" class="container-fluid">
            <div class="container-fluid">
                <br><br><br>
                <h1 style="color: #4cae4c" align=center>Welcome to <span style="color: #00a65a">Online Exam!</span></h1>;

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa  fa-arrow-right fa-5x"></i>
                                    </div>
                                    <a style="color: white" href="sublist.php">
                                        <div class="col-xs-9 text-right">
                                            <div><h2 align="center">Start the quiz</h2></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <a style="color: white" href="result.php">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div><h2 align="center">Your results</h2></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
</div>
<?php include ("footer.php");
?>



</body>
</html>