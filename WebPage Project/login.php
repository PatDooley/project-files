<?php
// Connect to MySQL database
$mysqli = new mysqli("localhost:3306", "root", "qwerty123", "anna_architectural_firm_clients_meetings");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get username and password from POST request
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare SQL statement to retrieve user information
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

// Execute the query
$result = $mysqli->query($sql);

// Check if there's a row with matching username and password
if ($result->num_rows > 0) {
    // Login successful
    echo "Login successful! You are now logged in.";
    // Optionally, you can redirect to another page after displaying the message
    // header("Location: client_meeting_schedule_web_page.html");
} else {
    // Login failed
    echo "Invalid username or password.";
}

// Close MySQL connection
$mysqli->close();
?>
