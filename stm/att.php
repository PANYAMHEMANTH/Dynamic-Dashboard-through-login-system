<!DOCTYPE html>
<html>
<head>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="shortcut icon" href="./images/logo.png">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Header -->
    <header class="w3-container w3-theme w3-padding" id="myHeader">
    <header>
    <div class="logo" title="University Management System">
        <img src="./images/logo.png" alt="">
        <h2>U<span class="danger">M</span>S</h2>
    </div>
    <div class="navbar" >
        <a href="attendence.html">
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
    </div>
    <div id="profile-btn">
        <span class="material-icons-sharp">person</span>
    </div>
    <div class="theme-toggler" onclick="toggleTheme()">
                     <span class="material-icons-sharp active" id="lightIcon">light_mode</span>
                     <span class="material-icons-sharp" id="darkIcon">dark_mode</span>
                </div>>
</header>

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
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1 class="theme-text" align="center">Attendance</h1>
    <br>

    <div class="w3-row-padding w3-center w3-margin-top">
        <div class="w3-half" style=" padding-left: 200px; padding-right: 150px;">
            <div class="w3-card w3-container" style="min-height:460px;background-color: aqua;border: dotted #080808;border-radius: 15px;">
                <h2 class="theme-text" ><b style="color:black">Present in last month</b></h2><br>
                <i class="fa fa-book w3-margin-bottom w3-text-theme" style="font-size:120px ; ;"></i>
                <p>Progress of last month</p>
                <p class="theme-text" >Progress of every week</p>
                <p class="theme-text" >Present/Absent of every subject</p>
                <br>
                <button class="w3-button w3-theme">Learn More</button>
            </div>
        </div>

        <div class="w3-half" style=" padding-left: 150px; padding-right: 200px;">
            <div class="w3-card w3-container" style="min-height:460px;background-color: aqua;border: dotted #080808;border-radius: 15px;">
                <h2><b class="theme-text">Present in last year</b></h2><br>
                <i class="fa fa-server w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
                <p class="theme-text">Progress of last year</p>
                <p class="theme-text">Progress of last sem</p>
                <p class="theme-text">Present/Absent of every subject</p>
                <br>
                <button class="w3-button w3-theme">Learn More</button>  
            </div>
        </div>
    </div>

<div class="w3-container">
<hr>
<div class="w3-center">
  <h2>Attendane in Colour code</code></h2>
</div>

<div class="w3-row" style="padding-left:500px" >
  <div class="w3-col w3-container m2 w3-red"><p>Absents</p></div>
  <div class="w3-col w3-container m2 w3-green"><p>Present</p></div>
  <div class="w3-col w3-container m2 w3-blue"><p>Total no days</p></div>
</div>

<hr>
<div class="w3-center">
  <h2>Attendance in percentage</h2>
  <p class="w3-large">Resize the page to see the effect!</p>
</div>
<br>

<div class="w3-row w3-border">
  <div class="w3-half w3-container w3-blue">
    <h5>Total no of days=100%</h5>  
  </div>
  <div class="w3-half w3-container w3-blue">
    <h5>.</h5>  
  </div>
</div>
<br>
<div class="w3-row w3-border">
  <div class="w3-quarter w3-container w3-green">
    <h5>NO of Presents = 80%</h5>  
  </div>
  <div class="w3-quarter w3-container w3-green">
    <h5>.</h5>  
  </div>
  <div class="w3-quarter w3-container w3-green">
    <h5>.</h5>  
  </div>
  <div class="w3-quarter w3-container">
    <h5>.</h5>  
  </div>
</div>
<br>
<div class="w3-row w3-border">
  <div class="w3-quarter w3-container w3-red">
    <h5>NO of Absent = 20%</h5>  
  </div>
  <div class="w3-quarter w3-container">
    <h5></h5>  
  </div>
  <div class="w3-quarter w3-container">
    <h5></h5>  
  </div>
  <div class="w3-quarter w3-container">
    <h5></h5>  
  </div>
</div> 
<header class="w3-container w3-blue-grey">
  <h2>Header</h2>
</header>
<hr>
<h2 class="w3-center">Progress Bars</h2>
<div class="w3-container">

<div class="w3-light-gray">
  <div id="myBar" class="w3-center w3-padding ; w3-theme" style="width:5%;">5%</div>
</div><br>
<button class="w3-btn w3-theme" onclick="move()">Click Me</button> 
</div>
<hr>
<h2 class="w3-center">Tabs</h2>
<div class="w3-border">
<div class="w3-bar w3-theme">
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'London')">London</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Paris')">Paris</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Tokyo')">Tokyo</button>
</div>

<div id="London" class="w3-container city w3-animate-opacity">
  <h2>London</h2>
  <p>London is the capital city of England.</p>
  <p>It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
</div>

<div id="Paris" class="w3-container city w3-animate-opacity">
  <h2>Paris</h2>
  <p>Paris is the capital of France.</p> 
  <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
</div>

<div id="Tokyo" class="w3-container city w3-animate-opacity">
  <h2>Tokyo</h2>
  <p>Tokyo is the capital of Japan.</p>
  <p>It is the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>
</div>
</div>
</div>
<br>
<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16" class="theme-text">
        <h3>Footer</h3>
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
        <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
            <span class="w3-text w3-theme-light w3-padding">Go To Top</span>  
            <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
            <i class="fa fa-chevron-circle-up"></i></span></a>
        </div>
        <p>Remember to check out our  <a href="w3css_references.asp" class="w3-btn w3-theme-light" target="_blank">W3.CSS Reference</a></p>
    </footer>

<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
<script>
// Side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "100%";
  x.style.fontSize = "40px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
    activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();

// Accordions
function myAccFunc(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// Slideshows
var slideIndex = 1;

function plusDivs(n) {
  slideIndex = slideIndex + n;
  showDivs(slideIndex);
}

function showDivs(n) {
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

showDivs(1);

// Progress Bars
function move() {
  var elem = document.getElementById("myBar");   
  var width = 5;
  var id = setInterval(frame, 10);
  function frame() {
    if (width == 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}
</script>
<!-- Toggle Theme Script -->
<script>
  function toggleTheme() {
    var body = document.body;
    var lightIcon = document.getElementById('lightIcon');
    var darkIcon = document.getElementById('darkIcon');
    
    // Toggle between dark and light themes
    if (body.classList.contains('w3-theme-dark')) {
      body.classList.remove('w3-theme-dark');
      body.classList.add('w3-theme-light');
      lightIcon.classList.add('active');
      darkIcon.classList.remove('active');
    } else {
      body.classList.remove('w3-theme-light');
      body.classList.add('w3-theme-dark');
      lightIcon.classList.remove('active');
      darkIcon.classList.add('active');
    }

    // Update text color based on the theme
    updateTextColor();
  }

  function updateTextColor() {
    var body = document.body;
    var textElements = document.querySelectorAll('.theme-text');

    // Check the current theme and update text color
    if (body.classList.contains('w3-theme-dark')) {
      textElements.forEach(function (element) {
        element.style.color = 'white'; // Change to your desired dark theme text color
      });
    } else {
      textElements.forEach(function (element) {
        element.style.color = 'black'; // Change to your desired light theme text color
      });
    }
  }
  function toggleTheme() {
    var body = document.body;
    var lightIcon = document.getElementById('lightIcon');
    var darkIcon = document.getElementById('darkIcon');

    if (body.classList.contains('w3-theme-dark')) {
        body.classList.remove('w3-theme-dark');
        body.classList.add('w3-theme-light');
        lightIcon.classList.add('active');
        darkIcon.classList.remove('active');
    } else {
        body.classList.remove('w3-theme-light');
        body.classList.add('w3-theme-dark');
        lightIcon.classList.remove('active');
        darkIcon.classList.add('active');
    }

    updateTheme();
}

function updateTheme() {
    updateTextColor();
    updateIconColor();
}

function updateTextColor() {
    var body = document.body;
    var textElements = document.querySelectorAll('.theme-text');

    if (body.classList.contains('w3-theme-dark')) {
        // Set text color for dark theme
        textElements.forEach(function (element) {
            element.style.color = '#ffffff'; // White text for dark theme
        });
    } else {
        // Set text color for light theme
        textElements.forEach(function (element) {
            element.style.color = '#000000'; // Black text for light theme
        });
    }
}

function updateIconColor() {
    var body = document.body;
    var iconElements = document.querySelectorAll('.material-icons-sharp');

    if (body.classList.contains('w3-theme-dark')) {
        // Set icon color for dark theme
        iconElements.forEach(function (element) {
            element.style.color = '#ffffff'; // White icon for dark theme
        });
    } else {
        // Set icon color for light theme
        iconElements.forEach(function (element) {
            element.style.color = '#000000'; // Black icon for light theme
        });
    }
}

// Add any other functions or code you want to separate here

</script>


</body>
</html>
