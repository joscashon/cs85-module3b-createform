<!-- Jos Cashon -->
<!-- https://github.com/joscashon/cs85-module3b-createform -->
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
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        // Validate email format using raw POST data
        echo "<p style='color:red;'>Please enter a valid email address.</p>";
    } else {
        // Match the example output format
        echo "<p>";
        echo "Thank you, $fullname! We received your message about: \"$topic\"<br>";
        echo "We'll get back to you at $email.";
        echo "</p>";
    }
}
/*
 I expect $_POST to contain keys: fullname, email, topic, message, submit
 Output should show a thank you message with my input values
 After testing: Everything worked as expected. If I left a field blank, I got the error message.
 However, in order to test the blank field validation I had to remove the 'required' attribute
 from the HTML form inputs to prevent the browser from blocking the submission. Same with the email
 validation, I had to set the email input to type="text" instead of type="email" to allow
 testing with invalid email formats.
*/
?>

</body>
</html>
