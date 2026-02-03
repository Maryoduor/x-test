 <?php
$title = "Web Development";

$slogan = "We create websites in a giffy using AI ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
<?php
require_once "banner_inc.php";
?>

<section class="learn-section">

    <h3 class="learn-title">What You Will Learn</h3>

    <ul class="learn-list">
        <li>🧱 HTML for structure</li>
        <li>🎨 CSS for styling</li>
        <li>⚙️ JavaScript for interactivity</li>
        <li>🗄️ PHP for backend development</li>
    </ul>
     
    <a href="index.php" class="btn">← Back to Home</a>

</section>

</body>
</html>
