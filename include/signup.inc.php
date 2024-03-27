<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username =$_POST['username'];
    $pwd = $_POST["pwd"];
    $email = $_POST['email'];

    try{

        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_controller.inc.php';

        // ERROR HANDLING
        $errors=[];

        if(is_input_empty($username, $pwd, $email)){
            $errors["empty_input"] = "Fill in all fields!";
        }
        if(is_email_valid($email)){
            $errors["invalid_email"] = "Invalid email used!";
        }
        if(is_username_unique($pdo, $username)){
            $errors["username_taken"] = "Username already taken!";
        }
        if(is_email_registered($pdo, $email)) {
            $errors["email_used"] = "Email already registered!";
        }

        require_once 'config_session.inc.php';

        if ($errors){
            $_SESSION["error_signup"] = $errors;
            header("Location: ../index.php");
        }
    }catch (PDOException $e){
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php");
    die();
}