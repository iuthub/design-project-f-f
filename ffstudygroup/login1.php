<?php
session_start();
?>
<?php
include("database.php");
extract($_POST);


if ($_POST != null) {
    $username = $_POST['loginid'];}


if(isset($submit))

{
    if ($loginid==="admin") {
        $rs = mysqli_query($cn,"select * from mst_admin where loginid='$loginid' and pass='$pass'") or die(mysql_error());
        if(mysqli_num_rows($rs)<1)
        {
            $found="N";
        }


        else
        {
            $_SESSION['alogin']="true";
            header('Location: admin/admin.php');
            exit;
        }
    }
    else{
        $rs = mysqli_query($cn,"select * from mst_user where username='$username' and pass='$pass'") or die(mysql_error());
        if(mysqli_num_rows($rs)<1)
        {
            $found="N";
        }


        else
        {
            $_SESSION['alogin']="true";
            header('Location: signin.php');
            exit;
        }}

}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

    <title> Login </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link href="admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="admin/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
        h2{
            align-content: center;
        }
        body{
            background: url("admin/blur-back.jpg");
        }

        .form-control {
            -webkit-border-radius: 2px !important;
            -moz-border-radius: 2px !important;
            border-radius: 2px !important;
            box-shadow: 2px;
        }
        .form-control:focus {
            border-color: #3c8dbc !important;
            box-shadow: 2px;
        }
        .headline {
            color: #fff;
            text-shadow: 1px 3px 5px rgba(0, 0, 0, 0.5);
            font-weight: 100;
            -webkit-font-smoothing: antialiased !important;
            opacity: 0.8;
            font-size: 80px;
        }
        .form-box {
            width: 360px;
            margin: 90px auto 0 auto;
        }
        .form-box .header {
            -webkit-border-top-left-radius: 4px;
            -webkit-border-top-right-radius: 4px;
            -webkit-border-bottom-right-radius: 0;
            -webkit-border-bottom-left-radius: 0;
            -moz-border-radius-topleft: 4px;
            -moz-border-radius-topright: 4px;
            -moz-border-radius-bottomright: 0;
            -moz-border-radius-bottomleft: 0;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            background: #00a65a;
            box-shadow: inset 0px -3px 0px rgba(0, 0, 0, 0.2);
            padding: 20px 10px;
            text-align: center;
            font-size: 26px;
            font-weight: 300;
            color: #fff;
        }
        .form-box .body,
        .form-box .footer {
            padding: 10px 20px;
            background: #fff;
            color: #444;
        }
        .form-box .body > .form-group,
        .form-box .footer > .form-group {
            margin-top: 20px;
        }
        .form-box .body > .form-group > input,
        .form-box .footer > .form-group > input {
            border: #fff;
        }
        .form-box .body > .btn,
        .form-box .footer > .btn {
            margin-bottom: 10px;
        }
        .form-box .footer {
            -webkit-border-top-left-radius: 0;
            -webkit-border-top-right-radius: 0;
            -webkit-border-bottom-right-radius: 4px;
            -webkit-border-bottom-left-radius: 4px;
            -moz-border-radius-topleft: 0;
            -moz-border-radius-topright: 0;
            -moz-border-radius-bottomright: 4px;
            -moz-border-radius-bottomleft: 4px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 4px;
            border-bottom-left-radius: 4px;
        }
        @media (max-width: 767px) {
            .form-box {
                width: 90%;
            }
        }
        .bg-olive {
            background-color: #00a65a !important;
        }
        .bg-gray {
            background-color: #eaeaec !important;
        }
        .btn-group-xs > .btn {
            padding: 1px 5px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px;
        }
        .btn-block {
            display: block;
            width: 100%;
        }
        .btn-block + .btn-block {
            margin-top: 5px;
        }
        input[type="submit"].btn-block,
        input[type="reset"].btn-block,
        input[type="button"].btn-block {
            width: 100%;
        }



    </style>
</head>

<body>


<div class="headline text-center" id="time">

</div>
<p style="color: #fff; text-align:center;"><a href="signup.php"><button>Sign Up</button></a></p>
</div>
<div class="form-box" id="login-box">
    <div class="header">Login</div>
    <form method="post" action="">
        <div class="body bg-gray">
            <?php if(isset($found))
            {
                echo "<h4 style='color: red'> Invalid Username or Password</h4>";
            }
            ?>
            <div class="form-group">
                <input name="loginid" type="text" class="form-control" id="loginid" placeholder="Enter your username">
            </div>
            <div class="form-group">
                <input name="pass" class="form-control" type="password" id="pass" placeholder="Enter password">
            </div>
        </div>
        <div class="footer">
            <input type="hidden" name="status" value="1" />
            <input style="color: #fff" type="submit" name="submit" class="btn bg-olive btn-block" value="Login">
        </div>
    </form>


</div>




<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function() {
        startTime();
        $(".center").center();
        $(window).resize(function() {
            $(".center").center();
        });
    });


    function startTime()
    {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();


        m = checkTime(m);
        s = checkTime(s);


        var day_or_night = (h > 11) ? "PM" : "AM";


        if (h > 12)
            h -= 12;


        $('#time').html(h + ":" + m + ":" + s + " " + day_or_night);
        setTimeout(function() {
            startTime()
        }, 500);
    }

    function checkTime(i)
    {
        if (i < 10)
        {
            i = "0" + i;
        }
        return i;
    }


    jQuery.fn.center = function() {
        this.css("position", "absolute");
        this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) +
                $(window).scrollTop()) - 30 + "px");
        this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) +
                $(window).scrollLeft()) + "px");
        return this;
    }
</script>

</body>
</html>
