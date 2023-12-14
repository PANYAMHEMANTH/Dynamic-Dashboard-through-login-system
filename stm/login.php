<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database (replace with your actual database credentials)
    $conn = mysqli_connect("localhost", "root", "", "dbs");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate email and password (you should add more validation as needed)

    // Query to retrieve the roll number based on email and password
    $query = "SELECT roll_number FROM dts WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch the roll number
        $row = mysqli_fetch_assoc($result);
        $logged_in_user_roll_number = $row['roll_number'];

        // Set the roll number as a session variable
        $_SESSION['roll_number'] = $logged_in_user_roll_number;

        // Redirect to the student dashboard page
        header("Location: server.php");
        exit();
    } else {
        // Send a response indicating that login failed
        echo "Login failed";
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Redirect to the login page if accessed directly
    header("Location: login.html");
    exit();
}
?>
