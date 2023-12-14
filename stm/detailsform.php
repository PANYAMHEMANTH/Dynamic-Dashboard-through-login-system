<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $roll_number = $_POST["roll_number"];
    $branch = $_POST["branch"];
    $dob = $_POST["dob"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $father_name = $_POST["father_name"];

    // Check if the roll number or email already exists
    $checkQuery = "SELECT * FROM dts WHERE roll_number = '$roll_number' OR email = '$email'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        // Roll number or email already exists
        echo "Error: Roll number or email already exists in the database";
    } else {
        // File upload handling
        $uploadDirectory = 'uploads/';

        if (!file_exists($uploadDirectory) && !is_dir($uploadDirectory)) {
            mkdir($uploadDirectory);
        }

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

        // Insert data into the database
        $sql = "INSERT INTO dts (name, roll_number, branch, dob, contact, email, address, father_name, image)
                VALUES ('$name', '$roll_number', '$branch', '$dob', '$contact', '$email', '$address', '$father_name', '$target_file')";

        if ($conn->query($sql) === TRUE) {
            // Redirect to passcreation.php with the email parameter
            header("Location: passcreation.php?email=" . urlencode($email));
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>
