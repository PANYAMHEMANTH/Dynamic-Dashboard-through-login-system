<?php
// Connect to the database (replace with your actual database credentials)
$conn = mysqli_connect("localhost", "root", "", "dbs");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
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

    <style>
        body{overflow: hidden;}
        header{position: relative;}
        .exam{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 80vh;
            width: 80%;
            margin: auto;
        }
    </style>
</head>
<body>
    <?php include 'nav.php'; ?>

    <main>
        <div class="exam timetable">
            <h2>Exam Available</h2>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Subject</th>
                        <th>Room no.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>13 May 2022</td>
                        <td>09-12 AM</td>
                        <td>CS200</td>
                        <td>38-718</td>
                    </tr>
                    <tr>
                        <td>16 May 2022</td>
                        <td>09-12 AM</td>
                        <td>DBMS130</td>
                        <td>38-718</td>
                    </tr>
                    <tr>
                        <td>18 May 2022</td>
                        <td>09-12 AM</td>
                        <td>MTH166</td>
                        <td>38-718</td>
                    </tr>
                    <tr>
                        <td>20 May 2022</td>
                        <td>09-12 AM</td>
                        <td>NS200</td>
                        <td>38-718</td>
                    </tr>
                    <tr>
                        <td>23 May 2022</td>
                        <td>09-12 AM</td>
                        <td>CS849</td>
                        <td>38-718</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    </main>

</body>

<script src="app.js"></script>
</html>