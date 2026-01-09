<?php
$header1 = "My Great Project";
$sliderImages = [
    "images/1.jpg",
    "images/2.jpg",
    "images/3.jpg"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $header1; ?></title>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
<header class="navbar">
    <div class="nav-container">
        <h2 class="logo"><?php echo $header1; ?></h2>
        <nav>
            <ul class="nav-links">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="slider-container">
    <div class="slider">
        <?php foreach($sliderImages as $index => $img): ?>
            <img src="<?php echo $img; ?>" class="slide <?php echo $index===0 ? 'active' : ''; ?>" alt="Slide <?php echo $index+1; ?>">
        <?php endforeach; ?>
    </div>
    <button class="prev">&#10094;</button>
    <button class="next">&#10095;</button>
     <h2>This is my project page</h2>
        <p class="red">Styled with CSS</p>
    </div>
    <div class="slider-dots">
        <?php foreach($sliderImages as $index => $img): ?>
            <span class="<?php echo $index===0 ? 'active' : ''; ?>" data-index="<?php echo $index; ?>"></span>
        <?php endforeach; ?>
    </div>
</div>
  <div class="content">
<main>
    <section class="testimonials">
        <h2>What Our Clients Say</h2>
        <div class="testimonial-container">
            <div class="testimonial-slide active">
                <img src="images/4.jpg" alt="Client 1">
                <h4>— Mary W.</h4>
                <span>Designer</span>
                <p>"Professional and creative! The final product exceeded our expectations."</p>
            </div>
            <div class="testimonial-slide">
                <img src="images/5.jpg" alt="Client 2">
                <h4>— John K.</h4>
                <span>Marketing Manager</span>
                <p>"A fantastic experience from start to finish. Highly recommend this team!"</p>
            </div>
            <div class="testimonial-slide">
                <img src="images/7.jpg" alt="Client 3">
                <h4>— Aisha M.</h4>
                <span>Startup Founder</span>
                <p>"Their attention to detail and communication was top-notch."</p>
            </div>
            <div class="testimonial-dots">
                <span class="active" data-index="0"></span>
                <span data-index="1"></span>
                <span data-index="2"></span>
            </div>
        </div>
    </section>

  
</main>

<footer>
    <p>&copy; <?php echo date('Y'); ?> My Project. All rights reserved.</p>
</footer>

<script src="sript.js"></script>
</body>
</html>
