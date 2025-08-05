<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Message Form</title>
</head>
<body>

<form method="POST" action="">
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname" required><br>

    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="topic">Topic of Message:</label>
    <input type="text" id="topic" name="topic" required><br>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="5" required></textarea><br>

    <input type="submit" name="submit" value="Send Message">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Sanitize each input using htmlspecialchars()
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $topic = htmlspecialchars($_POST['topic']);
    $message = htmlspecialchars($_POST['message']);

    // Validate that fields are not empty
    if (empty($fullname) || empty($email) || empty($topic) || empty($message)) {
        echo "<p style='color:red;'>Please fill in all fields.</p>";
    } else {
        // Display the sanitized data
        echo "<h3>Sanitized Submission:</h3>";
        echo "<strong>Full Name:</strong> $fullname<br>";
        echo "<strong>Email Address:</strong> $email<br>";
        echo "<strong>Topic:</strong> $topic<br>";
        echo "<strong>Message:</strong> $message<br>";
    }
}
?>

</body>
</html>
