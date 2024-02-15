<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <header>
        <?php
            include_once 'header.php';
        ?>
    </header>

    <main>
        <section class="slideshow">

        </section>
        <section class="home-services-overview">
            <div class="service-top">
                <h2>OUR SERVICES</h2>
                <h6>YEARS OF EXPERIENCE</h6>
            </div>
            <div class="service-bottom">
                <div class="home-services">
                    <div class="service-image-top"><img src="assets/images/construction-icon.png" alt="construction"></div>
                    <div class="service-details">
                        <h2>CONSTRUCTION</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                    </div>
                </div>
                <div class="home-services">
                    <div class="service-image-top"><img src="assets/images/roofing-icon.png" alt="roofing"></div>
                    <div class="service-details">
                        <h2>ROOFING</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                    </div>
                </div>
                <div class="home-services">
                    <div class="service-image-top"><img src="assets/images/remodeling-icon.png" alt="remodeling"></div>
                    <div class="service-details">
                        <h2>REMODELING</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="featured-work">
            <div class="featured-top">
                <h2>FEATURED WORK</h2>
                <h6>WE TAKE PRIDE IN OUR WORK</h6>
            </div>
            <div class="featured-bottom">
                <div class="featured-image">
                    <img src="assets/images/home-kitchen-remodel.jpg" alt="featured-projects">
                </div>
                <div class="featured-image">
                    <img src="assets/images/home-kitchen-remodel.jpg" alt="featured-projects">
                </div>
                <div class="featured-image">
                    <img src="assets/images/home-kitchen-remodel.jpg" alt="featured-projects">
                </div>
            </div>
            <a href="portfolio.php">View Portfolio<img src="assets/images/project.svg" alt="image-placeholder"></a>
        </section>
        <section class="home-testimonials">
            <div class="home-testimonials-top">
                <h2>WHAT OUR CLIENTS ARE SAYING</h2>
                <h6>DON'T JUST TAKE OUR WORD</h6>
            </div>
            <div class="home-testimonials-bottom">
                <div class="testimonial-container">
                    <div class="avator"><img src="assets/images/user.svg" alt="avatar"></div>
                    <div class="profile-details">
                        <h2>Jane Doe</h2>
                        <h6>Home Owner</h6>
                    </div>
                    <div class="testimonials">
                        Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. 
                    </div>
                </div>
                <div class="testimonial-container">
                    <div class="avator"><img src="assets/images/user.svg" alt="avatar"></div>
                    <div class="profile-details">
                        <h2>John Doe</h2>
                        <h6>Business Owner</h6>
                    </div>
                    <div class="testimonials">
                        Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. 
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php
            include_once 'footer.php';
        ?>
    </footer>
</body>
</html>