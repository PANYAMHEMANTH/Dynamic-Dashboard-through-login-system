<?php
session_start(); // Start the session

// Check if the user is logged in (roll number is set in the session)
if (!isset($_SESSION['roll_number'])) {
    // Redirect to the login page if not logged in
    header("Location: login.html");
    exit();
}

// Retrieve the roll number from the session
$logged_in_user_roll_number = $_SESSION['roll_number'];

// Connect to the database (replace with your actual database credentials)
$conn = mysqli_connect("localhost", "root", "", "dbs");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Placeholder for dynamic data retrieval (replace with actual logic)
$query = "SELECT * FROM dts WHERE roll_number = '$logged_in_user_roll_number'";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $studentData = mysqli_fetch_assoc($result);
} else {
    // Handle the case where no data is found for the provided roll number
    $studentData = array(
        'name' => 'Unknown',
        'roll_number' => $logged_in_user_roll_number,
        'branch' => 'Unknown',
        'dob' => 'Unknown',
        'contact' => 'Unknown',
        'email' => 'Unknown',
        'address' => 'Unknown'
    );
}

// Close the database connection
mysqli_close($conn);
?>

<!-- The rest of your HTML and PHP code for the student dashboard -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="shortcut icon" href="./images/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'nav.php'; ?>
    <div class="container">
        <aside>
            <div class="profile">
                <div class="top">
                    <div class="profile-photo">
                        <img src="<?php echo $studentData['image']; ?>" alt="">
                    </div>
                    <div class="info">
                        <p>Hey, <b><?php echo $studentData['name']; ?></b></p>
                        <small class="text-muted"><?php echo $studentData['roll_number']; ?></small>
                    </div>
                </div>
                <div class="about">
                    <h5>Branch</h5>
                    <p><?php echo $studentData['branch']; ?></p>
                    <h5>DOB</h5>
                    <p><?php echo $studentData['dob']; ?></p>
                    <h5>Contact</h5>
                    <p><?php echo $studentData['contact']; ?></p>
                    <h5>Email</h5>
                    <p><?php echo $studentData['email']; ?></p>
                    <h5>Address</h5>
                    <p><?php echo $studentData['address']; ?></p>
                </div>
            </div>
        </aside>

        <main>
            <a href="it.html">
        <marquee behavior="scroll" direction="left" scrollamount="5" style="background-color: black; color: white;">
    <?php
    // Example PHP code to dynamically generate marquee content
    $messages = array( 
        'Announcement :',
        'Placement have came',
        'participate in interveiw and get selected. click for more details'
    );

    // Display each message inside the marquee
    foreach ($messages as $message) {
        echo $message . ' ';
    }
    ?>
        </marquee>
            </a>
            <h1>Attendance for this month</h1>
            <div class="subjects">
                <div class="eg">
                    <span class="material-icons-sharp">architecture</span>
                    <h3>Engineering Graphics</h3>
                    <h2>12/14</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>86%</p></div>
                    </div>
                    <small class="text-muted">Last month</small>
                </div>
                <div class="mth">
                    <span class="material-icons-sharp">functions</span>
                    <h3>Mathematical Engineering</h3>
                    <h2>27/29</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>93%</p></div>
                    </div>
                    <small class="text-muted">Last month</small>
                </div>
                <div class="cs">
                    <span class="material-icons-sharp">computer</span>
                    <h3>Computer Architecture</h3>
                    <h2>27/30</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>81%</p></div>
                    </div>
                    <small class="text-muted">Last month</small>
                </div>
                <div class="cg">
                    <span class="material-icons-sharp">dns</span>
                    <h3>Database Management</h3>
                    <h2>24/25</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>96%</p></div>
                    </div>
                    <small class="text-muted">Last month</small>
                </div>
                <div class="net">
                    <span class="material-icons-sharp">router</span>
                    <h3>Network Security</h3>
                    <h2>25/27</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>92%</p></div>
                    </div>
                    <small class="text-muted">Last month</small>
                </div>
            </div>

            <div class="timetable" id="timetable">
                <div>
                    <span id="prevDay">&lt;</span>
                    <h2>Today's Timetable</h2>
                    <span id="nextDay">&gt;</span>
                </div>
                <span class="closeBtn" onclick="timeTableAll()">X</span>
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

        <div class="right">
            <div class="announcements">
                <h2>Announcements</h2>
                <div class="updates">
                    <div class="message">
                        <p> <b>Academic</b> Summer training internship with Live Projects.</p>
                        <small class="text-muted">2 Minutes Ago</small>
                    </div>
                    <div class="message">
                        <p> <b>Co-curricular</b> Global internship oportunity by Student organization.</p>
                        <small class="text-muted">10 Minutes Ago</small>
                    </div>
                    <div class="message">
                        <p> <b>Examination</b> Instructions for Mid Term Examination.</p>
                        <small class="text-muted">Yesterday</small>
                    </div>
                </div>
            </div>

            <div class="leaves">
                <h2>Teachers on leave</h2>
                <div class="teacher">
                    <div class="profile-photo"><img src="./images/profile-2.jpeg" alt=""></div>
                    <div class="info">
                        <h3>The Professor</h3>
                        <small class="text-muted">Full Day</small>
                    </div>
                </div>
                <div class="teacher">
                    <div class="profile-photo"><img src="./images/profile-3.jpg" alt=""></div>
                    <div class="info">
                        <h3>Lisa Manobal</h3>
                        <small class="text-muted">Half Day</small>
                    </div>
                </div>
                <div class="teacher">
                    <div class="profile-photo"><img src="./images/profile-4.jpg" alt=""></div>
                    <div class="info">
                        <h3>Himanshu Jindal</h3>
                        <small class="text-muted">Full Day</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="timeTable.js"></script>
    <script src="app.js"></script>
</body>
</html>
