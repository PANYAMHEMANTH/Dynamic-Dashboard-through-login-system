<?php
session_start();

// Replace the following placeholders with your actual database connection credentials
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
    // Retrieve email, old password, new password, and confirm password from the form
    $user_email = $_POST['email'];
    $old_password = $_POST['currentpass'];
    $new_password = $_POST['newpass'];
    $confirm_password = $_POST['confirmpass'];

    // You may want to add more validation and security measures here

    // Check if the email and old password match the records in the database using prepared statements
    $check_credentials_sql = "SELECT password FROM dts WHERE email = ?";
    
    $stmt = $conn->prepare($check_credentials_sql);
    $stmt->bind_param("s", $user_email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $stored_password = $row['password'];

        // Verify the old password directly (without hashing)
        if ($old_password == $stored_password) {
            // Old password is correct, proceed to update with the new password
            if ($new_password == $confirm_password) {
                // Update password using prepared statement
                $update_password_sql = "UPDATE dts SET password = ? WHERE email = ?";
                $stmt = $conn->prepare($update_password_sql);
                $stmt->bind_param("ss", $new_password, $user_email);
                
                if ($stmt->execute()) {
                    echo "Password updated successfully";

                    // Send email notification using a more secure method (e.g., PHPMailer)
                    // Ensure to set up a proper email sending configuration
                    $to = $user_email;
                    $subject = "Password Update Notification";
                    $message = "Your password has been successfully updated.";
                    $headers = "From: your_email@example.com"; // Replace with your actual email address

                    // Use a secure email sending library or service here
                    // Example: mail($to, $subject, $message, $headers);
                } else {
                    echo "Error updating password: " . $stmt->error;
                }
            } else {
                echo "New password and confirm password do not match";
            }
        } else {
            echo "Incorrect email or old password";
        }
    } else {
        echo "User not found";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="shortcut icon" href="./images/logo.png">
    <link rel="stylesheet" href="style.css">

    <style>
        header { position: relative; }
        .change-password-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 90vh;
        }
        .change-password-container form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: var(--border-radius-2);
            padding: 3.5rem;
            background-color: var(--color-white);
            box-shadow: var(--box-shadow);
            width: 95%;
            max-width: 32rem;
        }
        .change-password-container form:hover { box-shadow: none; }
        .change-password-container form input[type=password], 
        .change-password-container form input[type=email] {
            border: none;
            outline: none;
            border: 1px solid var(--color-light);
            background: transparent;
            height: 2rem;
            width: 100%;
            padding: 0 .5rem;
        }
        .change-password-container form .box {
            padding: .5rem 0;
        }
        .change-password-container form .box p {
            line-height: 2;
        }
        .change-password-container form h2+p { margin: .4rem 0 1.2rem 0; } 
        .btn {
            background: none;
            border: none;
            border: 2px solid var(--color-primary) !important;
            border-radius: var(--border-radius-1);
            padding: .5rem 1rem;
            color: var(--color-white);
            background-color: var(--color-primary);
            cursor: pointer;
            margin: 1rem 1.5rem 1rem 0;
            margin-top: 1.5rem;
        }
        .btn:hover {
            color: var(--color-primary);
            background-color: transparent;
        }
    </style>

</head>
<body>
    <?php include 'nav.php'; ?>

    <div class="change-password-container">
        <form action="" method="post">
            <h2>Create new password</h2>
            <div class="box">
                <p class="text-muted">Email</p>
                <input type="email" name="email" required>
            </div>
            <div class="box">
                <p class="text-muted">Current Password</p>
                <input type="password" name="currentpass" required>
            </div>
            <div class="box">
                <p class="text-muted">New Password</p>
                <input type="password" name="newpass" required>
            </div>
            <div class="box">
                <p class="text-muted">Confirm Password</p>
                <input type="password" name="confirmpass" required>
            </div>
            <div class="button">
                <input type="submit" value="Save" class="btn">
                <a href="server.php" class="text-muted">Cancel</a>
            </div>
            <a href="#"><p>Forget password?</p></a>
        </form>    
    </div>

    <script src="app.js"></script>
</body>
</html>
