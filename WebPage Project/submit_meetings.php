<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
    <link rel="stylesheet" href="create_account.css"> <!-- You may include your CSS file here -->
</head>
<body>
    <header>
        <h2>AAF</h2>
        <!-- You can add your navigation bar here if needed -->
    </header>

    <div class="wrapper">
        <h1>Form Submission Result</h1>
        <div class="submitted-data">
            <?php
            // Check if the form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Display the submitted data
                echo "<p><strong>Username:</strong> " . $_POST["newUsername"] . "</p>";
                echo "<p><strong>Password:</strong> " . $_POST["newPassword"] . "</p>";
                echo "<p><strong>Name:</strong> " . $_POST["name"] . "</p>";
                echo "<p><strong>Email:</strong> " . $_POST["email"] . "</p>";
                echo "<p><strong>Phone:</strong> " . $_POST["phone"] . "</p>";
                echo "<p><strong>Address:</strong> " . $_POST["address"] . "</p>";
                // You can handle the form data insertion into the database here if needed
            } else {
                echo "Form data has not been submitted.";
            }
            ?>
        </div>
    </div>
</body>
</html>