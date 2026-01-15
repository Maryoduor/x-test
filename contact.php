<?php
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($name === "" || $email === "" || $message === "") {
        $error = "All fields are required.";
    } else {
        $success = "Your message has been sent successfully!";
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
            padding: 15px;
            width: 100%;
            background: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }

        .success {
            color: green;
            margin-bottom: 10px;
        }

        .site-footer {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<div class="contact-form">
    <h2>Contact Us</h2>

    <?php if (!empty($error)): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>

    <?php if (!empty($success)): ?>
        <p class="success"><?php echo $success; ?></p>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="name" placeholder="Your Name">
        <input type="email" name="email" placeholder="Your Email">
        <textarea name="message" rows="5" placeholder="Your Message"></textarea>
        <button type="submit">Send Message</button>
    </form>
</div>

<footer class="site-footer">
    © <?php echo date("Y"); ?> TechWorld. All rights reserved.
</footer>

</body>
</html>
