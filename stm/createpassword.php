<?php
// Connect to your database (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbs";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data including the password
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

    // Check if password and confirm password match
    if ($password !== $confirmPassword) {
        echo "Error: Password and Confirm Password do not match.";
    } else {
        // Update the database query to include the password field
        $sql = "UPDATE dts SET password = '$password' WHERE email = '$email'";

        if ($conn->query($sql) === TRUE) {
            // Password stored successfully, redirect to login.html
            header("Location: login.html");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
