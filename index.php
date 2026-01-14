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

    <?php include __DIR__ . "/header.php"; ?>


<section class="hero">
    <h2>Welcome to TechWorld</h2>
    <p>Empowering people through technology.</p>
    <a href="#about" class="btn">Learn More</a>
</section>


<section class="features">
    <div class="feature-card">
        <h3>Web Development</h3>
        <p>Learn HTML, CSS, JavaScript and PHP.</p>
    </div>
    <div class="feature-card">
        <h3>Tech News</h3>
        <p>Stay up-to-date with technology trends.</p>
    </div>
    <div class="feature-card">
        <h3>Support</h3>
        <p>We help you build and grow your projects.</p>
    </div>
</section>

<section class="testimonials">
    <h2>What Our Clients Say</h2>

    <div class="testimonial-list">
        <div class="testimonial-card">
            <p>
                "Professional and creative! The final product exceeded our expectations."
            </p>
            <strong>— Mary W.</strong><br>
            <span>Designer</span>
        </div>

        <div class="testimonial-card">
            <p>
                "A fantastic experience from start to finish. Highly recommend this team!"
            </p>
            <strong>— John K.</strong><br>
            <span>Marketing Manager</span>
        </div>
        <div class="testimonial-card">
            <p>
             "Their attention to detail and communication was top-notch."
        </p>
        <strong>
    </div>
</section>



<section id="about" class="about">
    <h2>About</h2>
    <p>
        This project combines business, creative, and technical work
        into one simple website.
    </p>
</section>


<section id="contact" class="contact">
    <h2>Contact</h2>
    <form method="POST" action="">
        <input type="text" name="name" placeholder="Your Name">
        <input type="email" name="email" placeholder="Your Email">
        <textarea name="message" rows="5" placeholder="Your Message"></textarea>
        <button type="submit">Send Message</button>
    </form>
</section>

<?php include __DIR__ . "/footer.php"; ?>
