
<?php
session_start();
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Edu Center</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/slick.css" rel="stylesheet">
    <style>
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #00a65a;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }


        .cancebtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }
        .cancelbt {
            width: auto;
            padding: 10px 18px;
            background-color: #00a65a;
        }
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

        .cancelbtn,.signupbtn {float:left;width:50%}


        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 10%;
            border-radius: 70%;
        }

        .container {
            padding: 16px;
            width: 80%;
        }

        span.psw {
            padding-top: 16px;
        }


        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.4); 
            padding-top: 60px;
        }


        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; 
            border: 1px solid #888;
            width: 80%; 
        }

        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }


        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)}
            to {-webkit-transform: scale(1)}
        }

        @keyframes animatezoom {
            from {transform: scale(0)}
            to {transform: scale(1)}
        }


        @media screen and (max-width: 300px) {
            span.cancelbt, .cancelbtn, .signupbtn {
                width: 100%;
                display: block;
                float: right;
            }
        }
    </style>

</head>
<body>




<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>


<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

<nav class="navbar navbar-default navbar-fixed-top" data-spy="affix" data-offset-top="197">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="color: white" href="index.php">F&F <span> Study Group</span></a>

        </div>
        <div id="navbar" class="navbar-collapse collapse navbar_area">
            <ul class="nav navbar-nav navbar-right custom_nav">
                <form class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <li><a href="index.php">Home</a></li>
                <li class="#"><a href="#news">News</a></li>
                <li><a href="#team">Team</a></li>
                <li><a onclick="document.getElementById('id01').style.display='block'">take quiz</a></li>
                <li class="#"><a href="#about_content">Why Us</a></li>
                <li><a href="#courses">Courses</a></li>
                <li class="#"><a href="#contact">Contacts</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Login <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="login1.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a onclick="document.getElementById('id02').style.display='block'"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div id="id01" class="modal">

    <form class="modal-content animate" method="post" action="">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
            <h4 style="color: #00a65a"> To take a quiz, you need to register!</h4>
        </div>

        <div class="container">
            <?php if(isset($found))
            {
                echo "<h4 style='color: red'> Invalid Username or Password</h4>";
            }
            ?>
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="loginid" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pass" required>

            <button type="submit" name="submit">Login</button>
            <input type="checkbox" checked="checked"> Remember me
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancebtn">Cancel</button>
            <button onclick="document.getElementById('id01').style.display='none'; document.getElementById('id02').style.display='block'" type="button" class="cancelbt">register</button>
        </div>
    </form>
</div>

<div id="id02" class="modal">
    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
    <form class="modal-content animate" method="post" action="signupuser.php">
        <div class="container">
            <label><b>Name*</b></label>
            <input type="text" placeholder="Enter your name" name="username" required>

            <label><b>Login*</b></label>
            <input type="text" placeholder="Enter Login" name="name" required>

            <label><b>Password*</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <label><b>City</b></label>
            <input type="text" placeholder="Enter Email" name="city" required>

            <label><b>Phone* (+99) 999-99-99</b></label>
            <input type="text" value="(+__) ___-__-__" data-mask="(+__) ___-__-__">

            <label><b>Email*</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label><b>Age</b></label>
            <input type="text" placeholder="Enter your age" name="age" required>
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
</div>

<script>
    var modal = document.getElementById('id02');

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<script>
    // Get the modal
    var modal = document.getElementById('id01');

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<script>
    Array.prototype.forEach.call(document.body.querySelectorAll("*[data-mask]"), applyDataMask);

    function applyDataMask(field) {
        var mask = field.dataset.mask.split('');

        function stripMask(maskedData) {
            function isDigit(char) {
                return /\d/.test(char);
            }
            return maskedData.split('').filter(isDigit);
        }

        function applyMask(data) {
            return mask.map(function(char) {
                if (char != '_') return char;
                if (data.length == 0) return char;
                return data.shift();
            }).join('')
        }

        function reapplyMask(data) {
            return applyMask(stripMask(data));
        }

        function changed() {
            var oldStart = field.selectionStart;
            var oldEnd = field.selectionEnd;

            field.value = reapplyMask(field.value);

            field.selectionStart = oldStart;
            field.selectionEnd = oldEnd;
        }

        field.addEventListener('click', changed)
        field.addEventListener('keyup', changed)
    }
</script>

</body>
</html>