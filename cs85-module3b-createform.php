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
// TODO: PHP form handling logic
?>

</body>
</html>
