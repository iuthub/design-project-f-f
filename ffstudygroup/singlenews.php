<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wpf Bgness : Single Blog</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/superslides.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/slick.css" rel="stylesheet">
    <link id="switcher" href="css/themes/cyan-theme.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>
<body>
<?php
include ("header.php");
?>

<section id="imgbanner">
    <h2 style=" color: #fff;
    text-align: center;
    font-size: 72px;
    font-weight: bold;
    text-transform: uppercase;">Our Blog</h2>
</section>

<section id="blogArchive">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="blogArchive_area">

                    <div class="single_archiveblog">
                        <div class="archiveblog_left">
                            <img class="author_img" src="images/blogger.jpg" alt="img">
                            <h5 class="author_name">Komila</h5>
                            <p class="postdate">May 1, 2017 </p>
                        </div>

                        <div class="archiveblog_right">
                            <?php
                            error_reporting(1);
                            include ("database.php");
                            $sql = "SELECT heading, body FROM news";

                            $result = mysqli_query($cn, $sql);

                            if (mysqli_num_rows($result) > 0) 
                            {
                                while($row = mysqli_fetch_assoc($result)) 
                                {
                                    echo  '<h2>' . $row["heading"] . '</h2>';
                                    echo '<img alt="img" src="images/Homepage_Mega_Navigation_Summer_at_FBU_172.jpg">';
                                    echo '<p>' .$row['body'].'</p>';
                                }
                            }
                            ?>
                        </div>
                        <div class="social_link">
                            <ul class="sociallink_nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="blog_sidebar">

                    <div class="single_sidebar">
                        <h2>Recent Post</h2>
                        <ul class="small_catg similar_nav">
                            <li>
                                <div class="media">

                                    <?php
                                    $result = mysqli_query($cn, $sql);

                                    if (mysqli_num_rows($result) > 0) 
                                    {
                                    $row = mysqli_fetch_assoc($result);
                                        echo '<a href="#" class="media-left related-img">';
                                        echo '<img alt="img" src="images/blog.jpg">';
                                        echo '</a>';
                                        echo '<h2>' . $row["heading"] . '</h2>';
                                        echo '<p>' . substr($row['body'], 0, 100) . '...' . '</p>';}?>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="single_sidebar">
                        <h2>Popular Post</h2>
                        <ul class="small_catg similar_nav">
                            <li>
                                <div class="media">
                                    <?php
                                    $result = mysqli_query($cn, $sql);
                                    if (mysqli_num_rows($result) > 0)
                                    {
                                       while ( $row = mysqli_fetch_assoc($result)){
                                        echo '<a href="#" class="media-left related-img">';
                                        echo '<img alt="img" src="images/blog.jpg">';
                                        echo '</a>';
                                        echo '<h2>' . $row["heading"] . '</h2>';
                                        echo '<p>' . substr($row['body'], 0, 100) . '...' . '</p>';}}?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include ("footer.php");
    ?>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<script src="js/wow.min.js"></script>

<script src="js/bootstrap.min.js"></script>


<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.animate-enhanced.min.js"></script>
<script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>

<script src="js/slick.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/jquery.ui.map.js"></script>



<script src="js/custom.js"></script>

</body>
</html>