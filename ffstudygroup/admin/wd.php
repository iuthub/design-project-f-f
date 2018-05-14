<!DOCTYPE html>
<html  class="lockscreen">
<head>
    <meta charset="UTF-8">
    <title> adminLoginPage</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

</head>
<body>
{if $page.username == ""}
<div class="form-box" id="login-box">
    <div class="header">{$translation.adminLoginPage}</div>
    <form action="?mod=login&op=login" method="post">
        <div class="body bg-gray">
            <p>{$page.message|stripslashes}</p>
            <div class="form-group">
                <input type="text" name="user" class="form-control" placeholder="{$translation.adminLogin}"/>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="{$translation.adminPassword}"/>
            </div>
        </div>
        <div class="footer">
            <input type="hidden" name="status" value="1" />
            <button type="submit" class="btn bg-olive btn-block">adminEnter</button>
        </div>
    </form>

    <div class="margin text-center hidden">
        <span>Sign in using social networks</span>
        <br/>
        <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
        <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
        <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

    </div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<div class="center">
    <div class="headline text-center" id="time">

    </div>

    <div class="lockscreen-name">{$page.users.user_name}</div>
    <div class="lockscreen-item">

        <div class="lockscreen-image">
            <img src="userfiles/avatar/{$page.auth_users.user_photo}" alt="{$translation.avatar}"/>
        </div>


        <div class="lockscreen-credentials">
            <form action="?mod=login&op=login&username={$page.auth_users.user_login}" method="post">
                <div class="input-group">
                    <input type="hidden" name="user" value="{$page.auth_users.user_login}">
                    <input type="hidden" name="status" value="1" />
                    <input type="password" name="password" class="form-control" placeholder="{$translation.adminPassword}" />
                    <div class="input-group-btn">
                        <button class="btn btn-flat"><i class="fa fa-arrow-right text-muted"></i></button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <div class="lockscreen-link">
        <p>{$page.message|stripslashes}</p>
    </div>
    <div class="lockscreen-link">
        <a href="?mod=login">{$translation.otheruser}</a>
    </div>
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