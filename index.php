
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

  <?php
$sliderImages = [
    "slide1.jpg",
    "slide2.jpg",
    "slide3.jpg"
];
?>

<div class="project-wrapper">
<?php
$header1 = "My Great Project";
?>
   <h1 class="project-title">My Great Project</h1>

 <div class="slides">

    <div class="slide">
        <img src="images/1.jpg">
    </div>

    <div class="slide">
        <img src="images/2.jpg" alt="Slide 2">
    </div>

    <div class="slide">
        <img src="images/3.jpg" alt="Slide 3">
    </div>

</div>

<button class="prev">&#10094;</button>
<button class="next">&#10095;</button>




    <div class="project-card">
        <h2>This is my project page</h2>
        <p>Styled with CSS</p>
    </div>

</div>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $header1; ?></title>
<link rel="stylesheet" href="styles.css">

</head>
<body>




<section id="about" class="about">
    <h2>About</h2>
    <p>
        This project combines business, creative, and technical work
        into one simple website.
    </p>
</section>
<section class="mission">
    <h2>Our Mission</h2>
    <p>Empowering people through technology.</p>
</section>

<section id="testimonials">
    <h2 class="section-title">What Our Clients Say</h2>
    <div class="testimonial-container">
        <div class="testimonial-card">
             <img src="images/4.jpg" alt="Client 1">
            <p>"Professional and creative! The final product exceeded our expectations."</p>
            <h3>Mary W.</h3>
            <span>Designer</span>
        </div>
     
        <div class="testimonial-card">
             <img src="images/6.jpg" alt="Client 2">
            <p>"A fantastic experience from start to finish. Highly recommend this team!"</p>
            <h3>John K.</h3>
            <span>Marketing Manager</span>
        </div>
        <div class="testimonial-card">
             <img src="images/7.jpg" alt="Client 3">
            <p>"Their attention to detail and communication was top-notch."</p>
            <h3>Aisha M.</h3>
            <span>StartUp Founder</span>
        </div>

    </div>
</section>
<section id="team">
    <h2 class="section-title">Our Team</h2>

    <div class="team-container">

        <div class="team-card">
            <img src="images/images (9).jpg" alt="Mary Johnson">
            <h3>Mary Johnson</h3>
            <span>Project Manager</span>
        </div>

        <div class="team-card">
            <img src="images/images (10).jpg" alt="John Smith">
            <h3>John Smith</h3>
            <span>Developer</span>
        </div>

        <div class="team-card">
            <img src="images/images (11).jpg" alt="Sarah Kim">
            <h3>Sarah Kim</h3>
            <span>UI/UX Designer</span>
        </div>

    </div>
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
