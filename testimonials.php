<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>6 Text Blocks with Images and Titles</title>
  <link rel="stylesheet" href="style.css" />
  <style>
      .banner {
        height: 400px
      }
      @media screen and (max-width: 480px) {
        .banner {
          height: 250px;
        }
      }
  </style>
</head>

<body>
  <header>
    <?php include_once 'header.php' ?>
  </header>
  <section class="banner">
    <div class="overlay"></div>
    <img id="banner-image" src="assets/images/home-kitchen-remodel.jpg" alt="Banner Image" class="banner-image">
    <div class="header-text">
      <h1>TESTIMONIALS</h1>
      <p>We are a team of skilled professionals</p>
    </div>
  </section>
  <div class="all-testimonials">
    <div class="testimonial-container">
      <div class="avatar">
        <img src="assets/images/user.svg" alt="Person 1" />
      </div>
      <div class="profile-details">
        <h2>Jane Doe</h2>
        <h5>Company Owner</h5>
      </div>
      <div class="testimonials">
        Even the all-powerful Pointing has no control about the blind texts it
        is an almost unorthographic life One day however a small line of blind
        text by the name of Lorem Ipsum decided to leave for the far World of
        Grammar. The Big Oxmox advised her not to do so, because there were
        thousands of bad Commas, wild Question Marks and devious Semikoli, but
        the Little Blind Text didn’t listen..
      </div>
    </div>
    <div class="testimonial-container">
      <div class="avatar">
        <img src="assets/images/user.svg" alt="Person 2" />
      </div>

      <div class="profile-details">
        <h2>Jane Doe</h2>
        <h5>Company Owner</h5>
      </div>
      <div class="testimonials">
        Even the all-powerful Pointing has no control about the blind texts it
        is an almost unorthographic life One day however a small line of blind
        text by the name of Lorem Ipsum decided to leave for the far World of
        Grammar. The Big Oxmox advised her not to do so, because there were
        thousands of bad Commas, wild Question Marks and devious Semikoli, but
        the Little Blind Text didn’t listen..
      </div>
    </div>
    <div class="testimonial-container">
      <div class="avatar">
        <img src="assets/images/user.svg" alt="Person 3" />
      </div>
      <div class="profile-details">
        <h2>Jane Doe</h2>
        <h5>Company Owner</h5>
      </div>
      <div class="testimonials">
        Even the all-powerful Pointing has no control about the blind texts it
        is an almost unorthographic life One day however a small line of blind
        text by the name of Lorem Ipsum decided to leave for the far World of
        Grammar. The Big Oxmox advised her not to do so, because there were
        thousands of bad Commas, wild Question Marks and devious Semikoli, but
        the Little Blind Text didn’t listen..
      </div>
    </div>
    <div class="testimonial-container">
      <div class="avatar">
        <img src="assets/images/user.svg" alt="Person 4" />
      </div>
      <div class="profile-details">
        <h2>Jane Doe</h2>
        <h5>Company Owner</h5>
      </div>
      <div class="testimonials">
        Even the all-powerful Pointing has no control about the blind texts it
        is an almost unorthographic life One day however a small line of blind
        text by the name of Lorem Ipsum decided to leave for the far World of
        Grammar. The Big Oxmox advised her not to do so, because there were
        thousands of bad Commas, wild Question Marks and devious Semikoli, but
        the Little Blind Text didn’t listen..
      </div>
    </div>
    <div class="testimonial-container">
      <div class="avatar">
        <img src="assets/images/user.svg" alt="Person 5" />
      </div>
      <div class="profile-details">
        <h2>Jane Doe</h2>
        <h5>Company Owner</h5>
      </div>
      <div class="testimonials">
        Even the all-powerful Pointing has no control about the blind texts it
        is an almost unorthographic life One day however a small line of blind
        text by the name of Lorem Ipsum decided to leave for the far World of
        Grammar. The Big Oxmox advised her not to do so, because there were
        thousands of bad Commas, wild Question Marks and devious Semikoli, but
        the Little Blind Text didn’t listen..
      </div>
    </div>
    <div class="testimonial-container">
      <div class="avatar">
        <img src="assets/images/user.svg" alt="Person 6" />
      </div>
      <div class="profile-details">
        <h2>Jane Doe</h2>
        <h5>CEO</h5>
      </div>
      <div class="testimonials">
        Even the all-powerful Pointing has no control about the blind texts it
        is an almost unorthographic life One day however a small line of blind
        text by the name of Lorem Ipsum decided to leave for the far World of
        Grammar. The Big Oxmox advised her not to do so, because there were
        thousands of bad Commas, wild Question Marks and devious Semikoli, but
        the Little Blind Text didn’t listen.
      </div>
    </div>
  </div>

  <footer>
    <?php include_once 'footer.php' ?>
  </footer>
</body>

</html>