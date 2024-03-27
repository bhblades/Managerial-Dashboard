<?php
require_once '../include/config_session.inc.php';
require_once '../include/signup_view.inc.php';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Login</h3>

    <form action="../include/login.inc.php" method="post">
        <label>
            <input type="text" name="username" placeholder="Username">
        </label>
        <label>
            <input type="password" name="pwd" placeholder="Password">
        </label>
        <button>Login</button>
    </form>

    <h3>Signup</h3>

    <form action="../include/signup.inc.php" method="post">
        <label>
            <input type="text" name="username" placeholder="Username">
        </label>
        <label>
            <input type="password" name="pwd" placeholder="Password">
        </label>
        <label>
            <input type="text" name="email" placeholder="E-Mail">
        </label>
        <button>Signup</button>
    </form>

    <?php
        check_signup_errors();
    ?>

</body>
</html>