<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php include 'header.php' ?>
    </header>
    <section class="banner" style="height: 400px;">
        <div class="overlay"></div>
        <img id="banner-image" src="assets/images/home-kitchen-remodel.jpg" alt="Banner Image" class="banner-image">
        <div class="header-text">
            <h1>PORTFOLIO</h1>
            <p>BROWSE THROUGH SOME OF OUR MASTERPIECES</p>
        </div>
    </section>
    <div class="image-container">
        
        <div class="modal">
            <span class="modal-close" onclick="closeModal()">&times;</span>
            <img class="zoomable" src="assets/images/home-kitchen-remodel.jpg" alt="">
        </div>
        <div class="single-image">
            <img class="zoomable" src="assets/images/home-kitchen-remodel.jpg" alt="">
            <p>Description for image</p>
        </div>
        
        <div class="modal">
            <span class="modal-close" onclick="closeModal()">&times;</span>
            <img class="zoomable" src="assets/images/home-kitchen-remodel.jpg" alt="">
        </div>
        <div class="single-image">
            <img class="zoomable" src="assets/images/home-kitchen-remodel.jpg" alt="">
            <p>Description for image</p>
        </div>
        
        <div class="modal">
            <span class="modal-close" onclick="closeModal()">&times;</span>
            <img class="zoomable" src="assets/images/home-kitchen-remodel.jpg" alt="">
        </div>
        <div class="single-image">
            <img class="zoomable" src="assets/images/home-kitchen-remodel.jpg" alt="">
            <p>Description for image</p>
        </div>
        
        <div class="modal">
            <span class="modal-close" onclick="closeModal()">&times;</span>
            <img class="zoomable" src="assets/images/home-kitchen-remodel.jpg" alt="">
        </div>
        <div class="single-image">
            <img class="zoomable" src="assets/images/home-kitchen-remodel.jpg" alt="">
            <p>Description for image</p>
        </div>
        
        <div class="modal">
            <span class="modal-close" onclick="closeModal()">&times;</span>
            <img class="zoomable" src="assets/images/home-kitchen-remodel.jpg" alt="">
        </div>
        <div class="single-image">
            <img class="zoomable" src="assets/images/home-kitchen-remodel.jpg" alt="">
            <p>Description for image</p>
        </div>
        
        <div class="modal">
            <span class="modal-close" onclick="closeModal()">&times;</span>
            <img class="zoomable" src="assets/images/home-kitchen-remodel.jpg" alt="">
        </div>
        <div class="single-image">
            <img class="zoomable" src="assets/images/home-kitchen-remodel.jpg" alt="">
            <p>Description for image</p>
        </div>
    </div>
    <footer>
        <?php include 'footer.php' ?>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const singleImages = document.querySelectorAll(".single-image");
        const modal = document.querySelector(".modal");
        const modalImage = modal.querySelector("img");

        singleImages.forEach(function (image) {
            image.addEventListener("click", function () {
            const imageSrc = this.querySelector(".zoomable").src;
            modalImage.src = imageSrc;
            modal.style.display = "block";
            document.body.style.overflow = "hidden";
            });
        });

        const modalClose = document.querySelector(".modal-close");
        modalClose.addEventListener("click", closeModal);

        function closeModal() {
            modal.style.display = "none";
            document.body.style.overflow = "auto";
        }
        });
    </script>
</body>
</html>
