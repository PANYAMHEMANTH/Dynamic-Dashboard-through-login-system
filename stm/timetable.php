<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="shortcut icon" href="./images/logo.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'nav.php'; ?>
    <main style="margin: 0;">
        <div class="timetable active" id="timetable">
            <div>
                <span id="prevDay">&lt;</span>
                <h2>Today's Timetable</h2>
                <span id="nextDay">&gt;</span>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>Room No.</th>
                        <th>Subject</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </main>

</body>

<script src="timeTable.js"></script>
<script src="app.js"></script>
</html>