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
        <section class="banner">
            <div class="overlay"></div>
            <img id="banner-image" src="assets/images/home-kitchen-remodel.jpg" alt="Banner Image" class="banner-image">
            <button class="prev-button">&lt;</button>
            <button class="next-button">&gt;</button>
            <div class="dots">
                <span class="dot" data-index="0"></span>
                <span class="dot" data-index="1"></span>
                <span class="dot" data-index="2"></span>
            </div>
        </section>

        <section class="home-services-overview">
            <div class="service-top">
                <h2>OUR SERVICES</h2>
                <h6>YEARS OF EXPERIENCE</h6>
            </div>
            <div class="service-bottom">
                <div class="home-services">
                    <div class="service-image-top"><img src="assets/images/construction.png" alt="Construction Icon"></div>
                    <div class="service-details">
                        <h2>CONSTRUCTION</h2>
                        <p>Elevate your visions with our construction prowess, spanning high-rise buildings, complexes, conference halls, and residential premises. From the grandeur of high-rises to the comfort of homes, we build spaces that inspire and endure.</p>
                    </div>
                </div>
                <div class="home-services">
                    <div class="service-image-top"><img src="assets/images/roadworks.png" alt="Roadworks Icon"></div>
                    <div class="service-details">
                        <h2>ROAD & BRIDGE</h2>
                        <p>Mastering a spectrum of road services, we specialize in road furnishing, protection works, and maintenance across various classes. Our expertise extends to the seamless construction of bridges, ensuring connectivity and durability in every project we undertake.</p>
                    </div>
                </div>
                <div class="home-services">
                    <div class="service-image-top"><img src="assets/images/electic-works.png" alt="Electic-works Icon"></div>
                    <div class="service-details">
                        <h2>ELECTRIC</h2>
                        <p>Empowering your spaces with expertise, we specialize in comprehensive electrical solutions. From installations to maintenance, our skilled team ensures seamless electrical works for a brighter and safer environment.</p>
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
                        <h5>Home Owner</h5>
                    </div>
                    <div class="testimonials">
                        Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. 
                    </div>
                </div>
                <div class="testimonial-container">
                    <div class="avator"><img src="assets/images/user.svg" alt="avatar"></div>
                    <div class="profile-details">
                        <h2>John Doe</h2>
                        <h5>Business Owner</h5>
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

    <script>
        const bannerImage = document.getElementById('banner-image');
        const prevButton = document.querySelector('.prev-button');
        const nextButton = document.querySelector('.next-button');
        const dots = document.querySelectorAll('.dot');

        const images = ['assets/images/home-kitchen-remodel.jpg', 'assets/images/jamii.jpg', 'assets/images/heading2.jpg'];
        let currentImageIndex = 0;

        function updateImage() {
            bannerImage.style.opacity = 0;
            setTimeout(() => {
                bannerImage.src = images[currentImageIndex];
                bannerImage.style.opacity = 1;
            }, 500);

            dots.forEach((dot, i) => dot.classList.toggle('active', i === currentImageIndex));
        }

        prevButton.addEventListener('click', () => {
            currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
            updateImage();
        });

        nextButton.addEventListener('click', () => {
            currentImageIndex = (currentImageIndex + 1) % images.length;
            updateImage();
        });

        // Add click event listener to dots
        dots.forEach((dot, i) => {
            dot.addEventListener('click', () => {
                currentImageIndex = i;
                updateImage();
            });
        });

        // Initial image load
        updateImage();
    </script>

</body>
</html>