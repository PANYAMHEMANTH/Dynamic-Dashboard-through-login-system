   
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

// Fetch email from the URL parameter
$userEmail = isset($_GET["email"]) ? $_GET["email"] : "";

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="passcreation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- ... (head section remains the same) ... -->
</head>
<body>
    <div class="login_form_container">
        <div class="login_form">
            <form action="createpassword.php" method="post">
                <div class="input_group">
                    <i class="fa fa-envelope"></i>
                    <input
                        type="text"
                        placeholder="Email"
                        class="input_text"
                        autocomplete="off"
                        id="emailInput"
                        value="<?php echo htmlspecialchars($userEmail); ?>"
                        readonly
                        name="email"
                        required
                    />
                </div>
                <div class="input_group">
                    <i class="fa fa-unlock-alt"></i>
                    <input
                        type="password"
                        placeholder="Password"
                        class="input_text"
                        autocomplete="off"
                        name="password"
                        required
                    />
                </div>
                <div class="input_group">
                    <i class="fa fa-unlock-alt"></i>
                    <input
                        type="password"
                        placeholder="Confirm Password"
                        class="input_text"
                        autocomplete="off"
                        name="confirm_password"
                        required
                    />
                </div>
                <div class="button_group" id="login_button">
                    <button type="submit" id="login_button">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        // ... (existing script remains the same) ...
    </script>
</body>
</html>
