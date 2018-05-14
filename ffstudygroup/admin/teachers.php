
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Teachers</title>


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
                Teachers
            </h1>
            <ol class="breadcrumb">
                <li><a href="admin.php"><i class="fa fa-dashboard"></i> main</a></li>
                <li class="active">teachers</li>
            </ol>
        </section>


        <section class="content">
            <div class="row">
                <div class="col-xs-12">

                    <div class="box box-warning">

                        <div class="box-body">

                            <form role="form" method="get">
                                <input type="hidden" name="mod"  value="teachers">
                                <input type="hidden" name="op"  value="mnmgt">

                                <div class="form-group  col-xs-2 ">
                                    <select class="form-control input-sm" id="code" name="form[teachers]" >
                                        <option value="">All</option>
                                        <option value="0">Permanent</option>
                                        <option value="1">Regular</option>
                                    </select>
                                </div>

                                <div class="form-group  col-xs-2">
                                    <button class="btn btn-primary btn-sm">Filter</button>
                                    <a href="admin.php" class="btn btn-success btn-sm">Cancel</a>
                                </div>
                                <div class="form-group  col-xs-2">
                                    <a href="add.teacher.php" class="btn btn-primary">Add</a>
                                </div>
                                <div class="clear"></div>

                            </form>
                        </div>
                    </div><!-- /.box -->
                </div>
                <div class="col-xs-12">
                    <div class="box box-info">
                        <div class="box-body table-responsive">
                            <form name="" method="post" action="">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>namelastname</th>
                                        <th>datebirth</th>
                                        <th>phones</th>
                                        <th>email</th>
                                        <th>subject</th>
                                        <th>Activeness</th>
                                        <th>Operations</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include ("../database.php");

                                        $sql = "SELECT * FROM  tb_teachers";


                                           $result=mysqli_query($cn,$sql);


                                            while ($row = $result->fetch_assoc()) {



                                            ?>

                                        <tr>

                                            <td><?= $row["id"] ?></td>
                                            <td><?= $row["name"]."  ". $row["lastname"] ?></td>
                                            <td><?= $row["datebirth"] ?></td>
                                            <td><?= $row["phone1"] ?></td>
                                            <td><?= $row["email"] ?></td>
                                            <td><?= $row["subject"] ?></td>



                                            <td>Active   <i class="fa  fa-check text-green"></i>
                                            </td>
                                            <td><a href="?mod=teachers&op=edit&elid={$teachers.id}"><i
                                                            class="fa  fa-edit text-green"></i>Edit</a>
                                                <br/><a href="?mod=teachers&op=delete&elid={$teachers.id}"
                                                        onclick="{literal}if(window.confirm('{/literal}{$translation.adminDeleteConfirmation}{literal}')) { return true; } else { return false; }{/literal}"><i
                                                            class="fa  fa-minus-circle text-red"></i>Delete</a>
                                            </td>



                                    </tr>
                                                <?php
                                            }
                                        mysqli_free_result($result);

                                        mysqli_close($cn);
                                        ?>
                                    </tbody>

                                </table>

                                <div class="clear"><br /></div>


                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
</body>
</html>