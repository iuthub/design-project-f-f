<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php
include("database.php");
include("header.php");?>
<div id="page-wrapper">

    <section id="quiz" class="container-fluid">
        <div class="container-fluid">
            <br><br><br>
            <?php
            echo "<h2 style='color: #00a65a' align='center'> Select Subject to Give Quiz </h2>";
            $rs=mysqli_query($cn,"select * from mst_subject");
            echo "<table align=center>";
                while($row=mysqli_fetch_row($rs))
                {
                echo "<tr><td align=center ><a href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
                        }
                        echo "</table>";
            ?>
        </div>
    </section>
</div>
<?php
include ("footer.php");
?>
</body>
</html>
