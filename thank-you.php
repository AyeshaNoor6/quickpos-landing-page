<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    $errors = [];

    // Name validation
    if (empty($name)) {
        $errors[] = "Name is required";
    }

    // Email validation
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    // Message validation
    if (empty($message)) {
        $errors[] = "Message is required";
    }

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Result</title>
</head>
<body style="font-family:Arial; text-align:center; padding:50px;">

<?php if (!empty($errors)) { ?>

    <h2 style="color:red;">Form Errors</h2>

    <?php foreach ($errors as $error) {
        echo "<p>$error</p>";
    } ?>

    <br>
    <a href="index.php">Go Back</a>

<?php } else { ?>

    <h1 style="color:green;">Thank You, <?php echo $name; ?>!</h1>
    <p>Your message has been received successfully.</p>

<?php } ?>

</body>
</html>