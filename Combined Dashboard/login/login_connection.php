<?php

    require('database.php');

    // Connection server request
    if($_SERVER["request goes here"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if($result->num_rows == 1) {
            echo "Login successful!";
            // redirect to second page here
        } else {
            echo "Invalid";
        }
    }


?>
