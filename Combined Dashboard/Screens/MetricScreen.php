<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combined Team Metrics</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0; /* Set a light gray background color */
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a light shadow */
        }
        .btn-container {
            text-align: center;
        }
        button {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            background-color: #007bff; /* Set blue background color */
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Add a smooth transition */
        }
        button:hover {
            background-color: #0056b3; /* Darken the background color on hover */
        }
    </style>
</head>
<body>
<div class="container">
    <h1 style="text-align: center;">Combined Team Metrics</h1>
    <div class="btn-container">
        <button onclick="location.href='progress.php';">Progress</button>
        <button onclick="location.href='cycleTime.php';">Cycle Time</button>
        <button onclick="location.href='leadTime.php';">Lead Time</button>
        <button onclick="location.href='processingTime.php';">Processing Time</button>
        <button onclick="location.href='waitingTime.php';">Waiting Time</button>
        <button onclick="location.href='bugs.php';">Bugs</button>
    </div>
</div>
</body>
</html>

