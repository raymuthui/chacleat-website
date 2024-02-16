<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <?php include_once 'header.php' ?>
    </header>
    <section class="banner" style="height: 400px;">
      <div class="overlay"></div>
      <img id="banner-image" src="assets/images/home-kitchen-remodel.jpg" alt="Banner Image" class="banner-image">
      <div class="header-text">
        <h1>CONTACT US</h1>
        <p>GOT A QUESTION OR CONCERN? LET'S GET IN TOUCH</p>
      </div>
    </section>
    <div class="top">
      <div heading>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7860804387637!2d36.818880075013304!3d-1.3033490986842724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10fccee880b1%3A0x88b15466d7362b83!2sNachu%20Plaza!5e0!3m2!1sen!2ske!4v1707863725332!5m2!1sen!2ske"
          width="100%"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </div>

    <section class="bottom-about">
      <div class="contact-form">
        <div class="contact-top">
          <h2>HIRE US TODAY</h2>
          <h5>NO PROJECT IS TOO SMALL FOR RENOVATION</h5>
        </div>
        <form id="contact-form" action="#" method="post">
          <div class="form-group">
            <input type="text" id="name" name="name" required placeholder="Your Name"/>
          </div>
          <div class="form-group">
            <input type="email" id="email" name="email" required placeholder="Your E-mail"/>
          </div>
          <div class="form-group">
            <input type="text" id="subject" name="subject" required placeholder="Subject"/>
          </div>
          <div class="form-group">
            <textarea id="message" name="message" rows="5" required placeholder="Your Message"></textarea>
          </div>
          <button id="send-email" type="submit">Send Message</button>
        </form>
      </div>

      <section class="contact-section">
        <div class="contact-block">
          <h2>NEED HELP?</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
            tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
          </p>
          <a href="mailto:contact@your-website.com">contact@your-website.com</a>
        </div>
        <div class="contact-block">
          <h2>24/7 CUSTOMER SUPPORT</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
            tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
          </p>
          <a href="mailto:contact@your-website.com">contact@your-website.com</a>
        </div>
        <div class="contact-block">
          <h2>AVAILABLE 24 HOURS A DAY</h2>
          <p>+254 721 175 735<br/>+254 708 900 144</p>
        </div>
      </section>
    </section>
    <footer>
      <?php include_once 'footer.php' ?>
    </footer>
  </body>
</html>
