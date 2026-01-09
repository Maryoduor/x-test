
<?php
$pageTitle = "About Us | TechWorld";
$companyName = "TechWorld";
$description = "We are dedicated to providing the best services to our clients.";
$mission = "Empowering people through technology.";
?>

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

  <header class="navbar parallax" style="background-image: url('images/header.jpg');">
    <div class="nav-container">
      <h1 class="logo"><?php echo $companyName; ?></h1>
      <nav>
        <a href="index.php">Home</a>
        <a href="about.php" class="active">About</a>
        <a href="contact.php">Contact</a>
      </nav>
    </div>
  </header>

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