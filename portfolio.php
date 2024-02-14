<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport", content="width=device-width, initial-scale=1.0">
        <title>Portfolio</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
        <?php
            include 'header.php'
        ?>
        </header>
        <div class="header-text">
            <h1>PORTFOLIO</h1>
            <p>BROWSE THROUGH SOME OF OUR MASTERPIECES</p>
        </div>
        <div class="image-container">
            <img class="zoomable" src="assets/images/AdobeStock_1.png" alt="">
            <img class="zoomable" src="assets/images/AdobeStock_1.png" alt="">
            <img class="zoomable" src="assets/images/AdobeStock_1.png" alt="">
            <img class="zoomable" src="assets/images/AdobeStock_1.png" alt="">
            <img class="zoomable" src="assets/images/AdobeStock_1.png" alt="">
            <img class="zoomable" src="assets/images/AdobeStock_1.png" alt="">
        </div>
        <footer>
            <?php
                include 'footer.php'
            ?>
        </footer>
    </body>
</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const zoomableImages = document.querySelectorAll('.zoomable');
        zoomableImages.forEach(function(image) {
            image.addEventListener('click', function() {
                image.classList.toggle('zoomed');
            });
        });
    });
</script>