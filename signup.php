<?php ?>
<!DOCTYPE HTML>
<html>
<head>
    <link href="css/signup.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="form">
    <div class="login-welcome">
        <h1>Signing up</h1>
    </div>

    <div class="information">
        <form class="form1" method="post" action="signupuser.php">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="password" name="confirm" placeholder="Confirm" required><br>
            <input type="text" name="name" placeholder="Name" required><br>
            <input type="text" name="address" placeholder="Address" required><br>
            <input  type="text" name="city" placeholder="City" required><br>
            <input type="text" value="(+__) ___-__-__" data-mask="(+__) ___-__-__"/><br/>
            <input type="text" name="email" placeholder="Email" required><br>
            <input type="submit" name="submit" value="Sign up">
        </form>
        <a href="index.php">
            <h2 style="color: #101010"; align="center";>Back to Sign in</h2>
        </a>
    </div>
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

</div>
</body>
</html>