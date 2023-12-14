<header>
    <div class="logo" title="University Management System">
        <img src="./images/logo.png" alt="">
        <h2>U<span class="danger">M</span>S</h2>
    </div>
    <div class="navbar">
        <a href="att.php">
            <span class="material-icons-sharp">book</span>
            <h3>Attendance</h3>
        </a>
        <a href="server.php">
            <span class="material-icons-sharp">home</span>
            <h3>Home</h3>
        </a>
        <!-- Add other navigation links here -->
        <a href="timetable.php" onclick="timeTableAll()">
            <span class="material-icons-sharp">today</span>
            <h3>Time Table</h3>
        </a> 
        <a href="exam.php">
            <span class="material-icons-sharp">grid_view</span>
            <h3>Examination</h3>
        </a>
        <a href="password.php">
            <span class="material-icons-sharp">password</span>
            <h3>Change Password</h3>
        </a>
        <a href="logout.php">
            <span class="material-icons-sharp" onclick="">logout</span>
            <h3>Logout</h3>
        </a>
        <a href="gallery.php">
            <span class="material-icons-sharp">photo_library</span>
            <h3>Gallery</h3>
        </a>
    </div>
    <div id="profile-btn">
        <span class="material-icons-sharp">person</span>
    </div>
    <div class="theme-toggler">
        <span class="material-icons-sharp active">light_mode</span>
        <span class="material-icons-sharp">dark_mode</span>
    </div>
    
</header>
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
<style>
    /* Add hover effects for navigation links */
    .navbar a:hover {
        background-color: #7380ec; /* Change this to your desired hover background color */
        color: gray; /* Change this to your desired hover text color */
    }
</style>