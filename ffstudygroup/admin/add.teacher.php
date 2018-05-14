<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Adding student</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>


<body>
<?php
extract($_POST);
$con=mysqli_connect('localhost', 'root', '', 'quiz') or die("Couldn't connect");

if ($_POST != null) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $phone1 = $_POST['phone1'];
    $phone2 = $_POST['phone2'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone3 = $_POST['phone3'];
    $note = $_POST['note'];
    $subject= $_POST['subject'];
    $number = $_POST['number'];
    $active = $_POST['active'];
    $sql = "INSERT INTO tb_teachers (`name`, `lastname`, `phone1`, `phone2`, `phone3`, `email`, `address`, `note`, `subject`,`number`, `date`, `active`) VALUES ('$name','$lastname','$phone1', '$phone2','$phone3','$email','$address','$note','$subject','$number',NOW(), '$active');";
    $rs = mysql_query($sql);
    if (!mysqli_query($con, $sql)) {
        echo "1 record added";
        die('Error: ' . mysqli_error($con));
        echo "1 record added";
        exit();
    }


    echo "1 record added";
    exit;


}

?>
<div id="wrapper">
    <?php
    include("header1.php");
    ?>
    <div id="page-wrapper">

    <section class="content-header">
    <h1>adding teachers
    </h1>
    <ol class="breadcrumb">
        <li><a href="?mod=main"><i class="fa fa-dashboard"></i> main</a></li>
        <li><a href="?mod=teachers&op=mnmgt"><i class="fa fa-flag"></i>teachers</a></li>
        <li class="active">adding teachers</li>
    </ol>
</section>


<section class="content">
    <div class="row">

        <form action="" method="post" class="validate-form form bt-space15"  enctype="multipart/form-data">
            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Contact Info</h3>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label>Code:</label>
                            <input type="text" class="form-control" name="number" value="" />
                        </div>

                        <div class="form-group col-xs-6 nopadding">
                            <label for="lastname">lastname<span class="text-red">*</span> :</label>
                            <input type="text" class="form-control required" id="lastname" name="lastname" value="" />
                        </div>
                        <div class="form-group col-xs-6 ">
                            <label for="name">name<span class="text-red">*</span> :</label>
                            <input type="text" class="form-control required" id="name" name="name" value="" />
                        </div>
                        <div class="form-group">
                            <label for="datebirth">datebirth<span class="text-red">*</span> :</label>
                            <input type="text" class="form-control required" id="datebirth" name="datebirth" value="" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask />
                        </div>
                        <div class="form-group col-xs-4" style="padding:0">
                            <label id="phone1">phone 1:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="text" class="form-control required" data-inputmask='"mask": "(99) 999-99-99"' data-mask id="phone1" name="phone1" value=""/>
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->
                        <div class="form-group col-xs-4" style="padding:0 5px">
                            <label for="phone2">phone 2:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="text" class="form-control" data-inputmask='"mask": "(99) 999-99-99"' data-mask id="phone2" name="phone2" value=""/>
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->
                        <div class="form-group">
                            <label id="phone3">homePhone:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <input type="text" class="form-control" data-inputmask='"mask": "(99) 999-99-99"' data-mask id="phone3" name="phone3" value=""/>
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->


                    </div><!-- /.box-body -->

                </div><!-- /.box -->
            </div><!-- /.col (right) -->
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">additional</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group  col-xs-12" style="padding:0">
                            <label for="subject" >subject<span class="text-red">*</span>:</label>
                            <select class="form-control required" id="subject" name="form[subject]" >
                                <option value="math">math</option>

                            </select>
                        </div>
                        <div class="clear"></div>

                        <div class="form-group">&nbsp;</div>
                        <div class="form-group">
                            <label for="note">note:</label>
                            <textarea class="form-control" rows="3" name="note" id="note"></textarea>
                        </div>
                        <div class="form-group">
                            <label>email:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <input type="text" class="form-control" name="email" value=""/>
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->
                        <div class="form-group">
                            <label>address:</label>
                            <input type="text" class="form-control" name="address" />
                        </div>
                        <div class="form-group">
                            <label for="active" >Activeness:</label>
                            <select class="form-control" id="active" name="form[active]" >
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary" value="Add" /><input type="hidden" name="form[status]" value="ok" />
                        <a href="?mod=teachers&op=mgmnt" class="btn btn-default">Cancel</a>
                    </div>

                </div><!-- /.box -->
            </div>

        </form>

</section><!-- /.content -->
    </div>
    </div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>