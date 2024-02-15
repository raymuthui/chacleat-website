    <nav>
        <a href="index.php"><img class="logo" src="assets/images/logo.png" alt="chacleat-logo"></a>
        
        <ul class="left-menu">
            <li><a <?php if(basename($_SERVER['PHP_SELF']) == 'index.php' ){echo 'class = "active"';} ?> href="index.php">Home</a></li>
            <li><a <?php if(basename($_SERVER['PHP_SELF']) == 'services.php'){echo 'class = "active"';} ?> href="services.php">Services</a></li>
            <li><a <?php if(basename($_SERVER['PHP_SELF']) == 'portfolio.php'){echo 'class = "active"';} ?> href="portfolio.php">Portfolio</a></li>
        </ul>
        <ul class="right-menu">
            <li><a <?php if(basename($_SERVER['PHP_SELF']) == 'testimonials.php'){echo 'class = "active"';} ?> href="testimonials.php">Testimonials</a></li>
            <li><a <?php if(basename($_SERVER['PHP_SELF']) == 'about.php'){echo 'class = "active"';} ?> href="about.php">About</a></li>
            <li><a <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php'){echo 'class = "active"';} ?> href="contact.php">Contact Us</a></li>
        </ul>
    </nav>