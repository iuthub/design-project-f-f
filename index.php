
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>F&F Study Group : Home page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/superslides.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/st2.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


</head>
<body>

<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

<?php
include ("header.php");
?>


<header id="myCarousel" class="carousel slide">

    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner">
        <div class="item active">

            <div class="caros" style="background-image:url('images/study2.jpg');"></div>
            <div class="carousel-caption">
                <h1>Intensive course for summer is available</h1>
            </div>
        </div>
        <div class="item">

            <div class="caros" style="background-image:url('images/study3.jpg');"></div>
            <div class="carousel-caption">
                <h2>Math is always most a popular course</h2>
            </div>
        </div>
        <div class="item">

            <div class="caros" style="background-image:url('images/study1.jpg');"></div>
            <div class="carousel-caption">
                <h2>Learn English from a Native speaker</h2>
            </div>
        </div>
    </div>


    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>

</header>


    <section id="news" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="featuredBlog_area">
                        <div class="team_title">
                            <hr>
                            <h2>News <span>From Our Blog</span></h2>
                        </div>
                        <!-- start featured blog -->
                        <div class="featured_blog">
                            <div class="row">
                                <!-- start single featured blog -->
                                <?php
                                include ("database.php");
                                error_reporting(1);
                                $sql = "SELECT heading, body FROM news";

                                $result = mysqli_query($cn, $sql);

                                if (mysqli_num_rows($result) > 0) 
                                {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) 
                                    {
                                    echo '<div class="col-lg-4 col-md-4 col-sm-4">';
                                    echo'<div class="single_featured_blog">';
                                        echo '<img alt="img" src="images/Homepage_Mega_Navigation_Summer_at_FBU_172.jpg">';
                                      echo  '<h2>' . $row["heading"] . '</h2>';
                                       echo '<p>' .substr($row['body'], 0, 400). '...'.'</p>';
                                       echo '<a href="singlenews.php" class="read_more">read more<i class="fa fa-long-arrow-right"></i></a>';
                                    echo '</div>';
                                echo '</div>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section id="about_content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="about_content">
                <div class="about_us_title">
                    <h2 style="color: #4cae4c"><span style="color: #00a65a">Why</span> Us </h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a class="about_icon" href="#"><i class="fa fa-users"></i></a>
                        <h2 id="about_us_text">Creativity! </h2>
                        <p>We have a course that's right for you, no matter your skill level or writing goal,
                            and we're always adding more options! And, unlike other Educational centres, our courses
                            are small—between 6 and 14 students per section—so you'll get individualized attention and feedback on your work.
                            Our 10-week classes run in fall (September-December), winter (January-March) and spring (March-May).
                            Summer classes are five weeks long (July-August) and a great choice for students, travelers, or those
                            wanting a short peek at our longer sessions.</p>
                    </div>
                    <div class="col-md-4 ">
                        <a class="about_icon" href="#"><i class="fa fa-gears"></i></a>
                        <h2 id="about_us_text">Quality! </h2>
                        <p>If you’re looking for a demanding yet rewarding career where no two
                            days are the same, we have a course for you. One thing’s for sure;
                            you’ll never be stuck for a story to tell as every day brings a new chapter.
                            It’s worth noting that we’re one of only ten centres for excellence in teacher
                            training in Tashkent for lifelong learning. We recognise that it’s quality
                            that counts and our courses are rated highly by our students. We’ve been ranked top five in
                            the Educational center Guide for Education 2016 for the sixth year running. The quality of
                            our teaching is also backed up by external audits. Our primary and Lifelong Learning courses are
                            Ofsted inspected, primary rated ‘Outstanding’ and Lifelong Learning ‘Good with outstanding features’.</p>
                    </div>
                    <div class="col-md-4">
                        <a class="about_icon" href="#"><i class="fa fa-support"></i></a>
                        <h2 id="about_us_text">Affordability! </h2>
                        <p>You want with a range of course materials options at the lowest cost possible.
                            And you want to have these materials on the first day of class. Real Study group provides this assurance through
                            a variety of course materials sourcing and management services.</p>
                        <a class="about_more" href="#">read more<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="courses">
        <div class="container">
            <div class="team_title">
                <hr>
                <h2 style="padding: 30px"><span>Our </span>Courses</h2>
            </div>
            <div class="columns">
                <ul class="price">
                    <li class="header">Basic English</li>
                    <li class="grey"><i class="fa fa-fw fa-money"></i> 150K UZS / month</li>
                    <li>12 Classes</li>
                    <li>2 Hours</li>
                    <li>free materials</li>
                    <li>any payment methond</li>
                    <li class="grey"><a onclick="document.getElementById('id03').style.display='block'" class="but"> Sign up</a></li>
                </ul>
            </div>

            <div class="columns">
                <ul class="price">
                    <li class="header" style="background-color:red">IELTS</li>
                    <li class="grey"><i class="fa fa-fw fa-money"></i> 250K UZS/ month</li>
                    <li>12 Classes</li>
                    <li>3 Hours</li>
                    <li>free materials</li>
                    <li>any payment methond</li>
                    <li class="grey"><a onclick="document.getElementById('id03').style.display='block'" class="but"> Sign up</a></li>
                </ul>
            </div>

            <div class="columns">
                <ul class="price">
                    <li class="header" style="background-color: white; color: red">Korean</li>
                    <li class="grey"><i class="fa fa-fw fa-money"></i> 200K UZS/ month</li>
                    <li>12 Classes</li>
                    <li>2 Hours</li>
                    <li>free materials</li>
                    <li>any payment methond</li>
                    <li class="grey"><a onclick="document.getElementById('id03').style.display='block'" class="but"> Sign up</a></li>
                </ul>
            </div>
            <div class="columns">
                <ul class="price">
                    <li class="header" style="background-color: #00a65a">Math</li>
                    <li class="grey"><i class="fa fa-fw fa-money"></i> 150K UZS / month</li>
                    <li>12 Classes</li>
                    <li>2 Hours</li>
                    <li>free materials</li>
                    <li>any payment methond</li>
                    <li class="grey"><a onclick="document.getElementById('id03').style.display='block'" class="but"> Sign up</a></li>
                </ul>
            </div>
        </div>
</section>

<div id="id03" class="modal">
    <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">×</span>
    <form class="modal-content animate" method="post" action="reguser.php">
        <div class="container">
            <label><b>Full Name*</b></label>
            <input type="text" placeholder="Enter your name" name="name" required>

            <label><b>Phone* (+99) 999-99-99</b></label>
            <input type="text" value="(+__) ___-__-__" data-mask="(+__) ___-__-__">

            <label><b>Select a course*:</b></label>
            <select name="course">
                <option value="BasicEng">Basic English</option>
                <option value="IELTS">IELTS</option>
                <option value="Korean">Korean</option>
                <option value="Math">Math</option>
            </select>

            <label><b>Email*</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label><b>Age</b></label>
            <input type="text" placeholder="Enter your age" name="age" required>

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Register</button>
            </div>
        </div>
    </form>
</div>
<script>

    var modal = document.getElementById('id03');

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




<section id="team">
    <div class="container-fluid">
        <d<div class="row">
            <div class="team_title">
                <hr>
                <h2 style="padding: 30px"><span>Meet</span> Our Team</h2>
            </div>
            <div class="column">
                <div class="card">
                    <img src="images/team1.jpg" alt="Jane" style="width:100%">
                    <div class="container">
                        <h2>Jane Doe</h2>
                        <p class="title">CEO & Founder</p>
                        <p>Aside from being CEO, she is a teacher of IELTS</p>
                        <p>Jane@example.com</p>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="images/team2.jpg" alt="Mike" style="width:100%">
                    <div class="container">
                        <h2>Mike Ross</h2>
                        <p class="title">English Instructor</p>
                        <p>onsible for All English Classes.</p>
                        <p>m.ross@example.com</p>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="images/team3.jpg" alt="John" style="width:100%">
                    <div class="container">
                        <h2>John Doe</h2>
                        <p class="title">Math lover</p>
                        <p>with 25 years experiance, he is our Chairman.</p>
                        <p>John@example.com</p>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<div class="container-fluid">
    <div class="row">
        <div class="parallax">
        </div>
    </div>
</div>


<section id="contact" class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="contact_content">
                    <div class="contact_title">
                        <h2 style="color: #4cae4c"><span style="color: #00a65a">Contact</span> Us!</h2>
                        <p>Here we will have some information about the contacts!</p>
                    </div>
                    <div class="col-md-4">
                        <form method="post" action="ms_send.php">
                            <div class="form-group">
                                <div>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                                </div>
                                <div>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" height="50px" required>
                                </div>
                                <div>
                                    <textarea name="massage" cols="50" placeholder=" Message" required></textarea>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-default" style="background-color: #00a65a; color: white">Send</button>
                                </div>
                            </div>
                        </form>
                        <div class="work">
                            <h4><span>Working days:</span></h4>
                            <p>Mon - Sat: 09<sup>00</sup> - 20<sup>00</sup></p>
                            <h4><span>Contact us:</span></h4>
                            <p class="glyphicon glyphicon-earphone"> 99871 289 99 99</p><br>
                            
                            <p class="glyphicon glyphicon-envelope"><a href="https://www.facebook.com/farrukh.akramov.3"> Farrukhjon Akramov</a></p><br>
                            <p class="glyphicon glyphicon-phone"> 99897 402 72 44 </p><br>
                            <p class="glyphicon glyphicon-envelope"><a href="https://www.facebook.com/farrux.maxkamov"> Farrukh Makhkamov</a></p><br>
                            <p class="glyphicon glyphicon-phone"> 99897 731 74 47 </p><br>
                            <p class="glyphicon glyphicon-home"> 9, Ziyolilar str., M.Ulugbek district, Tashkent city</p><br>
                        </div>
                    </div>
                    <div class="col-md-7 map col-md-offset-1">
                        <div id="map" style="width:100%;height:400px;background: gray;" margin-left: 20px;></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="footer">
    <div class="col-xs-8 rights col-xs-offset-2">
        <div class="header-ri">
            <ul class="social-top">
                <li><a href="https://www.facebook.com/inha.uz" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
                <li><a href="https://www.instagram.com/inha_tashkent" class="icon instagram"><i class="fa fa-instagram" aria-hidden="true"></i><span></span></a></li>
            </ul>
            <p>&copy All rights reserved. Farrukhjon & Farrukh</p>
        </div>
    </div>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/jquery.ui.map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

<script>
    $('.carousel').carousel({
        interval: 2000
    })
</script>

<script>
    function myMap() 
    {
        var mapCanvas = document.getElementById("map");
        var mapOptions = 
        {
            center: new google.maps.LatLng(41.3174, 69.2949), zoom: 17
        };
        var map = new google.maps.Map(mapCanvas, mapOptions);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9FGQn66aaihtqxB8TziEH-w2vm_oC1h4&callback=myMap"></script>
<script>
    $('.smooth').on('click', function() 
    {
        $.smoothScroll(
        {
            scrollElement: $('body'),
            scrollTarget: '#' + this.id
        });

        return false;
    })

</script>




</body>
</html>
