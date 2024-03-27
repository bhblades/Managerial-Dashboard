<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Screen</title>
    <style>
        body {
            background-image: url('http://localhost/Managerial-Dashboard/images/Main Screen.png');
            background-size: cover;
            background-repeat: no-repeat;
        }
        h2 {
            font-size: 36px;
            margin-top: 20px;
        }
        .teams-section {
            margin-top: auto;
            text-align: center;
        }
        .teams {
            font-size: 28px;
            margin-bottom: 400px;
        }
        .add-team-button {
            font-size: 36px;
            cursor: pointer;
            color: blue;
        }
    </style>
</head>
<body>

<?php
// Start the session
session_start();

// Allows me to access username
$username = $_SESSION["user_username"];

echo "<h2>Welcome to your combined dashboard, $username!</h2>"; // Display a welcome message with the username
?>


<div class="teams-section">

    <div class="teams">
        Your teams are:<br>
        Team 1<br>
        Team 2
    </div>

    <div class="add-team-button" onclick="addTeam()">+</div>
</div>

<script>
    // Function to add a team
    function addTeam() {
        // Create a new team element
        var teamElement = document.createElement('div');
        teamElement.textContent = "Team " + (document.querySelectorAll('.teams div').length + 1); // Increment team number
        // Append the new team element to the teams list
        document.querySelector('.teams').appendChild(teamElement);
    }
</script>
</body>
</html>
