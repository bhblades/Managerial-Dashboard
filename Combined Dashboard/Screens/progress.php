<?php
// Sample data for team 1
$team1Stories = 10;
$team1TotalStories = 15;
$team1Points = 30;
$team1TotalPoints = 45;

// Sample data for team 2
$team2Stories = 8;
$team2TotalStories = 12;
$team2Points = 25;
$team2TotalPoints = 40;
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
    </style>
</head>
<body>
<div class="container">
    <h2>Progress of Team 1 and Team 2</h2>
    <div class="progress-wrapper">
        <div class="progress">
            <label for="team1Progress">Team 1:</label>
            <progress id="team1Progress" value="<?= ($team1Stories / $team1TotalStories) * 100 ?>" max="100"><?= ($team1Stories / $team1TotalStories) * 100 ?>%</progress>
        </div>
        <div class="progress">
            <label for="team2Progress">Team 2:</label>
            <progress id="team2Progress" value="<?= ($team2Stories / $team2TotalStories) * 100 ?>" max="100"><?= ($team2Stories / $team2TotalStories) * 100 ?>%</progress>
        </div>
    </div>
    <div class="progress-text" id="team1Text">User stories completed: <?= $team1Stories ?>/<?= $team1TotalStories ?></div>
    <div class="progress-text" id="team2Text">User stories completed: <?= $team2Stories ?>/<?= $team2TotalStories ?></div>
    <div class="progress-text" id="team1PointsText">Story points completed: <?= $team1Points ?>/<?= $team1TotalPoints ?></div>
    <div class="progress-text" id="team2PointsText">Story points completed: <?= $team2Points ?>/<?= $team2TotalPoints ?></div>
</div>

<script>
    // Sample data for team 1
    var team1Stories = <?= $team1Stories ?>;
    var team1TotalStories = <?= $team1TotalStories ?>;

    // Sample data for team 2
    var team2Stories = <?= $team2Stories ?>;
    var team2TotalStories = <?= $team2TotalStories ?>;
</script>
</body>
</html>
