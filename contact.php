
<?php
$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);
    if ($name == "" || $email == "" || $message == "") {
        $error = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email address.";
    } else {
        

        $success = "Message sent successfully!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us | TechWorld</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
        }
        .contact-form {
            max-width: 800px;
            margin: 60px auto;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }
        button {
            padding: 40px;
            width: 100%;
            background: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }
   
.site-footer {
    display: flex;
    justify-content: center;
}


        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>

<div class="contact-form">
    <h2>Contact Us</h2>

    <?php if ($error): ?>
        <p class="error"><?= $error ?></p>
    <?php endif; ?>

    <?php if ($success): ?>
        <p class="success"><?= $success ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <input type="text" name="name" placeholder="Your Name">
        <input type="email" name="email" placeholder="Your Email">
        <textarea name="message" rows="5" placeholder="Your Message"></textarea>
        <button type="submit">Send Message</button>
    </form>
</div>

<footer class="site-footer">
    © 2026 My Contact. All rights reserved.
</footer>