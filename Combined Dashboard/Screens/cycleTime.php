<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Time Comparison</title>
    <!-- Import Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        canvas {
            max-width: 500px;
            margin: 0 auto;
            display: block;
        }
        body {
            background-image: url('http://localhost/Managerial-Dashboard/images/Cycle Time Screen.png');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .team-info {
            display: flex;
            margin-top: 200px;
        }

        .team1-info {
            margin-left: 450px;
        }

        .team2-info {
            margin-left: 250px;
        }
    </style>

    <script>
        function displayPopup() {
            alert("Cycle Time is the total amount of time that it takes a task, user story, or a feature to" +
                "move from the beginning of development to being completed.");
        }
    </script>

</head>
<body>
<div class="team-info">
    <p class="team1-info">Team 1 cycle time: 50%</p>
    <p class="team2-info">Team 2 cycle time: 60%</p>
</div>
<canvas id="cycleTimeChart"></canvas>

<?php
// Hardcoded data for cycle times
$team1CycleTime = 50;
$team2CycleTime = 60;

// Generate chart
$chartData = json_encode([
    'labels' => ['Team 1', 'Team 2'],
    'datasets' => [[
        'data' => [$team1CycleTime, $team2CycleTime],
        'backgroundColor' => ['#FF6384', '#36A2EB'],
        'hoverBackgroundColor' => ['#FF6384', '#36A2EB']
    ]]
]);
?>

<script>
    // PHP-generated chart data
    var chartData = <?php echo $chartData; ?>;

    // Configuration for chart
    var chartOptions = {
        onClick: chartClickCallback
    };

    // Create pie chart
    var ctx = document.getElementById('cycleTimeChart').getContext('2d');
    var cycleTimeChart = new Chart(ctx, {
        type: 'pie',
        data: chartData,
        options: chartOptions
    });

    // Function to handle chart click
    function chartClickCallback(event, chartElements) {
        if (chartElements && chartElements.length > 0) {
            var index = chartElements[0]._index;
            var data = chartElements[0]._chart.data;
            var teamName = data.labels[index];
            var cycleTime = data.datasets[0].data[index];

            // Display percentage
            alert(teamName + " cycle time: " + cycleTime + "%");
        }
    }

</script>
<button onclick="displayPopup()">Cycle Time Meaning</button>
</body>
</html>
