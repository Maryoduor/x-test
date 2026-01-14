
<?php
$pageTitle = "About Us | TechWorld";
$companyName = "TechWorld";
$description = "We are dedicated to providing the best services to our clients.";
$mission = "Empowering people through technology.";
?>
<?php include __DIR__ . "/header.php"; ?>

<!-- ABOUT HERO -->
<section class="about-hero">
    <h1>About Us</h1>
    <p>Empowering people through technology.</p>
</section>

<!-- ABOUT DESCRIPTION -->
<section class="about-content">
    <p>
        We are dedicated to providing the best services and building
        innovative digital solutions for modern businesses.
    </p>
</section>

<!-- MISSION -->
<section class="mission">
    <h2>Our Mission</h2>
    <p>Empowering people through technology.</p>
</section>

<!-- TEAM -->
<section class="team">
    <h2>Our Team</h2>

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


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?></title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

  
  
<?php include __DIR__ . "/header.php"; ?>

<!-- ABOUT HERO -->
<section class="about-hero">
    <h1>About Us</h1>
    <p>Empowering people through technology.</p>
</section>

<!-- ABOUT DESCRIPTION -->
<section class="about-content">
    <p>
        We are dedicated to providing the best services and building
        innovative digital solutions for modern businesses.
    </p>
</section>

<!-- MISSION -->
<section class="mission">
    <h2>Our Mission</h2>
    <p>Empowering people through technology.</p>
</section>

<section class="team">
    <h2>Our Team</h2>

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


  <main>
   
    <section class="about fade-in">
      <h2 class="slide-left">About Us</h2>
      <p class="fade-in"><?php echo $mission; ?></p>

      <p class="slide-left">We are dedicated to providing the best services...</p>
      <h3 class="zoom-in">Our Mission</h3>
      <p class="fade-in"><?php echo $mission; ?></p>
    </section>

    <section class="team">
      <h3 class="zoom-in">Our Team</h3>

      <div class="team-container">
        <div class="slider">
  <div class="slides" id="slides">
    <img src="img9.jpg" />
    <img src="img10.jpg" />
    <img src="img11.jpg" />
  </div>
</div>
        <?php
        $team = [
          [
            'name' => 'Mary Johnson',
            'role' => 'Project Manager',
            'image' => 'images/images (9).jpg',
            'social' => [
              'main' => 'linkedin',
              'facebook' => 'https://facebook.com/maryjohnson',
              'twitter' => 'https://twitter.com/maryjohnson',
              'linkedin' => 'https://linkedin.com/in/maryjohnson'
            ]
          ],
          [
            'name' => 'John Smith',
            'role' => 'Developer',
            'image' => 'images/images (10).jpg',
            'social' => [
              'main' => 'twitter',
              'facebook' => 'https://facebook.com/johnsmith',
              'twitter' => 'https://twitter.com/johnsmith',
              'linkedin' => 'https://linkedin.com/in/johnsmith'
            ]
          ],
          [
            'name' => 'Sarah Kim',
            'role' => 'UI/UX Designer',
            'image' => 'images/images (11).jpg',
            'social' => [
              'main' => 'twitter',
              'facebook' => 'https://facebook.com/sarahkim',
              'twitter' => 'https://twitter.com/sarahkim',
              'linkedin' => 'https://linkedin.com/in/sarahkim'
            ]
          ]
        ];

        foreach ($team as $member): ?>
          
          <div class="team-member fade-in zoom-in float glow <?php echo $member['social']['main']; ?>">
            <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>">
            <h4><?php echo $member['name']; ?></h4>
            <p><?php echo $member['role']; ?></p>

            <div class="social-icons">
              <a href="<?php echo $member['social']['facebook']; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a href="<?php echo $member['social']['twitter']; ?>" target="_blank"><i class="fab fa-twitter"></i></a>
              <a href="<?php echo $member['social']['linkedin']; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>

        <?php endforeach; ?>

      </div>
    </section>

  </main>
<script>
 
  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.bottom >= 0
    );
  }

  function scrollAnimations() {
    const elements = document.querySelectorAll('.fade-in, .slide-left, .slide-right, .zoom-in');
    elements.forEach(el => {
      if (isInViewport(el)) {
        el.classList.add('visible');
      }
    });
  }

  window.addEventListener('scroll', scrollAnimations);
  window.addEventListener('load', scrollAnimations);
</script>

  <footer>
    <p>&copy; <?php echo date('Y'); ?> <?php echo $companyName; ?>. All rights reserved.</p>
  </footer>
</body>
</html>