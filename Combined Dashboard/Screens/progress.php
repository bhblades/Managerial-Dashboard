<?php
// Sample data for team 1
$team1Stories = 15;
$team1TotalStories = 15;
$team1Points = 45;
$team1TotalPoints = 45;

// Sample data for team 2
$team2Stories = 8;
$team2TotalStories = 12;
$team2Points = 25;
$team2TotalPoints = 40;

// Function to calculate progress color based on value
function calculateProgressColor($value) {
    if ($value <= 30) {
        return 'red';
    } elseif ($value <= 60) {
        return 'yellow';
    } elseif ($value <= 80) {
        return 'lightgreen';
    } else {
        return 'darkgreen';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress of Team 1 and Team 2</title>
    <style>
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .progress-wrapper {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .progress {
            width: 45%;
            margin-right: 10px;
        }
        .progress-text {
            font-size: 14px;
            margin-top: 5px;
        }
        .progress-text.team2 {
            margin-left: auto;
        }

        h2 {
            text-align: center;
        }

        /* Adjust progress bar color based on value */
        progress[value] {
            -webkit-appearance: none;
            appearance: none;
            border: none;
            border-radius: 5px;
            height: 20px;
            width: 100%;
        }
        progress[value]::-webkit-progress-bar {
            background-color: #f4f4f4;
            border-radius: 5px;
        }
        progress[value]::-webkit-progress-value {
            border-radius: 5px;
            background-color: red; /* Default color */
        }
        <?php
        // Dynamic color calculation for team 1 progress bar
        $team1ProgressValue = ($team1Stories / $team1TotalStories) * 100;
        $team1ProgressColor = calculateProgressColor($team1ProgressValue);
        echo "progress#team1Progress[value]::-webkit-progress-value { background-color: $team1ProgressColor; }";

        // Dynamic color calculation for team 2 progress bar
        $team2ProgressValue = ($team2Stories / $team2TotalStories) * 100;
        $team2ProgressColor = calculateProgressColor($team2ProgressValue);
        echo "progress#team2Progress[value]::-webkit-progress-value { background-color: $team2ProgressColor; }";
        ?>
    </style>
</head>
<body>
<div class="container">
    <h2>Progress of Team 1 and Team 2</h2>
    <div class="progress-wrapper">
        <div class="progress">
            <label for="team1Progress">Team 1:</label>
            <progress id="team1Progress" value="<?= $team1ProgressValue ?>" max="100"><?= $team1ProgressValue ?>%</progress>
            <div class="progress-text" id="team1Text">User stories completed: <?= $team1Stories ?>/<?= $team1TotalStories ?></div>
            <div class="progress-text" id="team1PointsText">Story points completed: <?= $team1Points ?>/<?= $team1TotalPoints ?></div>
        </div>
        <div class="progress">
            <label for="team2Progress">Team 2:</label>
            <progress id="team2Progress" value="<?= $team2ProgressValue ?>" max="100"><?= $team2ProgressValue ?>%</progress>
            <div class="progress-text progress-text team2" id="team2Text">User stories completed: <?= $team2Stories ?>/<?= $team2TotalStories ?></div>
            <div class="progress-text progress-text team2" id="team2PointsText">Story points completed: <?= $team2Points ?>/<?= $team2TotalPoints ?></div>
        </div>
    </div>
</div>
</body>
</html>
