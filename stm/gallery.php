
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - University Management System</title>
    <link rel="shortcut icon" href="./images/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="gar.css">
    <style>
        /* Add your gallery styles here */
        .gallery {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .gallery figure {
            text-align: center;
            margin: 10px;
        }

        .gallery img {
            height: 250px;
            width: 250px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        .gallery figcaption {
            margin-top: 10px;
        }
    </style>
</head>

<body>
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
    <br>
    <br>
    <br>
    <a href="it.html">
        <marquee behavior="scroll" direction="left" scrollamount="5" style="background-color: black; color: white;">
            <?php
            $messages = array(
                'Announcement :',
                'Placement have come',
                'participate in interview and get selected. click for more details'
            );

            foreach ($messages as $message) {
                echo $message . ' ';
            }
            ?>
        </marquee>
    </a>

    <main>
        <h1 align="center">Gallery</h1>
        <div class="gallery" align="center">
            <figure>
                <img src="images/avatar1.jpeg" alt="Image 1">
                <figcaption>avatar1</figcaption>
            </figure>
            <figure>
                <img src="images/avatar1.jpeg" alt="Image 1">
                <figcaption>avatar1</figcaption>
            </figure>
            <figure>
                <img src="images/Untitled design.jpg" alt="Image 2">
                <figcaption>Hemanth</figcaption>
            </figure>
            <figure>
                <img src="avatar1.jpeg" alt="Image 1">
                <figcaption>avatar1</figcaption>
            </figure>
            <figure>
                <img src="images/Untitled design1.png" alt="Image 2">
                <figcaption>Div Yaa</figcaption>
            </figure>
            <figure>
                <img src="avatar1.jpeg" alt="Image 1">
                <figcaption>avatar1</figcaption>
            </figure>
            <figure>
                <img src="avatar1.jpeg" alt="Image 1">
                <figcaption>avatar1</figcaption>
            </figure>
            <figure>
                <img src="images/vk.png" alt="Image 2">
                <figcaption>Vishnu Kumar</figcaption>
            </figure>
            <figure>
                <img src="download.jpg" alt="Image 2">
                <figcaption>Microsoft</figcaption>
            </figure>
            <figure>
                <img src="download.png" alt="Image 2">
                <figcaption>Microsoft</figcaption>
            </figure>
            <figure>
                <img src="images/avatar1.jpeg" alt="Image 1">
                <figcaption>avatar1</figcaption>
            </figure>
            <figure>
                <img src="images/Untitled design.jpg" alt="Image 2">
                <figcaption>Hemanth</figcaption>
            </figure>
            <figure>
                <img src="avatar1.jpeg" alt="Image 1">
                <figcaption>avatar1</figcaption>
            </figure>
            <figure>
                <img src="images/Untitled design1.png" alt="Image 2">
                <figcaption>Div Yaa</figcaption>
            </figure>
            <figure>
                <img src="avatar1.jpeg" alt="Image 1">
                <figcaption>avatar1</figcaption>
            </figure>
            <figure>
                <img src="avatar1.jpeg" alt="Image 1">
                <figcaption>avatar1</figcaption>
            </figure>
            <figure>
                <img src="images/vk.png" alt="Image 2">
                <figcaption>Vishnu Kumar</figcaption>
            </figure>
            <figure>
                <img src="download.jpg" alt="Image 2">
                <figcaption>Microsoft</figcaption>
            </figure>
            <figure>
                <img src="download.png" alt="Image 2">
                <figcaption>Microsoft</figcaption>
            </figure>
            <!-- Add more images as needed -->
        </div>
    </main>

    <footer>
        <!-- Include your footer content here if needed -->
    </footer>
</body>

</html>
