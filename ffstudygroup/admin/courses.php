<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Courses</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/sb-admin.css" rel="stylesheet">


    <link href="css/plugins/morris.css" rel="stylesheet">


    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
<div id="wrapper">
    <?php
    include("../database.php");
    include ("header1.php");
    ?>
    <div id="page-wrapper">

        <section class="content-header">
            <h1>
                Students
            </h1>
            <ol class="breadcrumb">
                <li><a href="admin.php"><i class="fa fa-dashboard"></i>main</a></li>
                <li class="active">students</li>
            </ol>
        </section>


        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-warning">
                        <div class="box-body">
                            <form role="form" method="get">
                                <div class="form-group  col-xs-2">
                                    <select class="form-control input-sm" id="level" name="form[level]" >
                                        <option value="">level</option>

                                    </select>
                                </div>

                                <button class="btn btn-primary btn-sm">search</button>
                                <a href="students.php" class="btn btn-success btn-sm">Cancel</a>
                        </div>
                        <div class="clear"></div>

                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-body table-responsive">
                        <form name="" method="post" action="" class="validate-form form bt-space15">
                            <table id="example1" class="table table-bordered table-hover" style="font-size:12px">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>regCourse</th>
                                    <th>Phone</th>
                                    <th>email</th>
                                    <th>regisDate</th>
                                    <th>age</th>
                                    <th>Activeness</th>
                                    <th>Operations</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                include ("../database.php");;
                                $sql = "SELECT * FROM  coursered";
                                $result=mysqli_query($cn,$sql);
                                while ($row = $result->fetch_assoc()) {
                                    ?>

                                    <tr class="{$students.class}">

                                        <td><?= $row["id"] ?></td>
                                        <td><?= $row["Full_name"]?></td>
                                        <td><?= $row['course'] ?></td>
                                        <td><?= $row["phone"] ?></td>
                                        <td><?= $row["email"] ?></td>
                                        <td><?= $row["regdate"] ?></td>
                                        <td><?= $row["age"] ?></td>



                                        <td>Active   <i class="fa  fa-check text-green"></i>
                                        </td>
                                        <td><a href="#"><i
                                                    class="fa  fa-edit text-green"></i>results</a>
                                        </td>



                                    </tr>
                                    <?php
                                }
                                mysqli_free_result($result);

                                mysqli_close($cn);
                                ?>
                                </tbody>

                            </table>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>

        </section><!-- /.content -->
    </div>
</div>

</body>
</html>