<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Library</title>
    <link rel="stylesheet" href="./sfx/styles.css">
    <link rel="stylesheet" href="./sfx/header.css">
    <link rel="stylesheet" href="./sfx/footer.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <?php
        include './includes/header.php';
        nav();
    ?>

    <div class="title-carousel">
        <h2>New Books!</h2>
    </div>
    <section class="Section-Carousel">
        <div class="container-slider">
            <div class="slider">
                <div class="item">
                    <img src="./sfx/images/alice.png" alt="">
                </div>
                <div class="item">
                    <img src="./sfx/images/hunger.png" alt="">
                </div>
                <div class="item">
                    <img src="./sfx/images/hunger2.png" alt="">
                </div>
                <div class="item">
                    <img src="./sfx/images/hunger3.png" alt="">
                </div>
                <div class="item">
                    <img src="./sfx/images/mistborn.png" alt="">
                </div>
                <div class="item">
                    <img src="./sfx/images/mistborn2.png" alt="">
                </div>
                <div class="item">
                    <img src="./sfx/images/mistborn3.png" alt="">
                </div>
                <button id="next"><i class="fa-solid fa-caret-right"></i></button>
                <button id="prev"><i class="fa-solid fa-caret-left"></i></button>
            </div>
        </div>
    </section>

    <?php 
        include './includes/footer.php';
        footer();
    ?>

    <script src="./js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>