<?php
$pageTitle = "About Us | TechWorld";
$companyName = "TechWorld";
$mission = "Empowering people through technology.";
?>

<?php include __DIR__ . "/header.php"; ?>

<!-- ABOUT HERO -->
<section class="about-hero">
    <h1>About Us</h1>
    <p><?php echo $mission; ?></p>
</section>

<section class="about-content">
    <p>
        We are dedicated to providing the best services and building
        innovative digital solutions for modern businesses.
    </p>
</section>


<section class="mission">
    <h2>Our Mission</h2>
    <p><?php echo $mission; ?></p>
</section>


<section class="team">
    <h2 class="section-title">Our Team</h2>

    <div class="team-cards">
        <div class="team-card">
          
            <h3>Mary Johnson</h3>
            <p>Project Manager</p>
        </div>

        <div class="team-card">
            <h3>John Smith</h3>
            <p>Developer</p>
        </div>

        <div class="team-card">
            <h3>Sarah Kim</h3>
            <p>UI/UX Designer</p>
        </div>
    </div>
</section>

<?php include __DIR__ . "/footer.php"; ?>