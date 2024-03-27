<?php
require_once '../include/config_session.inc.php';
require_once '../include/signup_view.inc.php';
require_once '../include/login_view.inc.php';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body {
            background-image: url('http://localhost/Managerial-Dashboard/images/Sign In Screen.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; /* This will make the background image fixed */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Centers the content vertically */
            margin: 0;
        }

        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .form-container h3 {
            margin-bottom: 20px;
        }

        .signup-form {
            display: none;
        }

        .toggle-signup {
            margin-top: 10px;
            text-decoration: underline;
            color: blue;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="form-container">
    <h3>Login</h3>
    <form id="login-form" action="../include/login.inc.php" method="post">
        <label>
            <input type="text" name="username" placeholder="Username">
        </label>
        <br>
        <label>
            <input type="password" name="pwd" placeholder="Password">
        </label>
        <br>
        <button type="submit">Login</button>
    </form>
    <?php check_login_errors(); ?>
    <div class="toggle-signup" onclick="toggleSignup()">Sign Up</div>
</div>

<div class="form-container signup-form">
    <h3>Signup</h3>
    <form id="signup-form" action="../include/signup.inc.php" method="post">
        <label>
            <input type="text" name="username" placeholder="Username">
        </label>
        <br>
        <label>
            <input type="password" name="pwd" placeholder="Password">
        </label>
        <br>
        <label>
            <input type="text" name="email" placeholder="E-Mail">
        </label>
        <br>
        <button type="submit">Signup</button>
    </form>
    <?php check_signup_errors(); ?>
</div>

<script>
    function toggleSignup() {
        const signupForm = document.querySelector('.signup-form');
        signupForm.style.display = signupForm.style.display === 'none' ? 'block' : 'none';
    }
</script>
</body>
</html>
