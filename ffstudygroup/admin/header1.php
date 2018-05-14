<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>F&F Admin</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">


    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


</head>

<body>




    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="admin.php">F&F Study Group Admin</a>
        </div>

        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                <ul class="dropdown-menu message-dropdown">
                    <li class="message-footer">
                        <a href="#">Read All New Messages</a>
                    </li>
                    <?php
                    include ("../database.php");

                    $sql = "SELECT * FROM  massages ORDER BY time";
                    $result=mysqli_query($cn,$sql);
                    while ($row = $result->fetch_assoc()) {
                        ?>
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong><?= $row["name"]?></strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> <?= $row["time"] ?></p>
                                    <p> <?= $row["massage"] ?></p>
                                    <p> <?= $row["email"] ?></p>
                                </div>
                            </div>
                        </a>
                    </li>
                        <?php
 }
                    mysqli_free_result($result);
                    mysqli_close($cn);
                    ?>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                <ul class="dropdown-menu alert-dropdown">
                    <li>
                        <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">View All</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> F&F <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li>
                        <a href="signout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="admin.php"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                </li>
                <li>
                    <a href="students.php"><i class="fa fa-fw fa-child"></i> Students</a>
                </li>
                <li>
                    <a href="teachers.php"><i class="fa fa-fw fa-graduation-cap"></i> Teachers</a>
                </li>
                <li>
                    <a href="quiz.php"><i class="fa fa-fw fa-file-text"></i> Quiz</a>
                </li>
                <li>
                    <a href="news.php"><i class="fa fa-fw fa fa-newspaper-o"></i> News</a>
                </li>
                <li>
                    <a href="courses.php"><i class="fa fa-fw fa fa-certificate"></i> Courses</a>
                </li>

            </ul>
        </div>

    </nav>

</body>
</html>
