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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>

    <?php
        include './includes/header.php';
        nav();
    ?>

    <section class="home" id="home">
        <div class="row">
            <div class="content">
                <h3>Upto 75% off</h3>
                <p>
                    Take advantage of our incredible sales with discounts of up to 75% on a wide range of books. Don't miss the opportunity to save while enjoying the best quality!
                </p>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper books-slider">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide"><img src="./sfx/images/alice.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="./sfx/images/hunger.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="./sfx/images/hunger2.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="./sfx/images/hunger3.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="./sfx/images/lotr.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="./sfx/images/mistborn.png" alt=""></a>
                </div>
                <img src="./sfx/images/stand.png" class="stand" alt="">
            </div>
        </div>
    </section>

    <section class="icons-container">
        <div class="icons">
            <i class="fa-solid fa-plane"></i>
            <div class="content">
                <h3>Free Shipping</h3>
                <p>Order over $100</p>
            </div>
        </div>

        <div class="icons">
            <i class="fa-solid fa-lock"></i>
            <div class="content">
                <h3>Secure Payment</h3>
                <p>100 Secure Payment</p>
            </div>
        </div>

        <div class="icons">
            <i class="fa-solid fa-redo-alt"></i>
            <div class="content">
                <h3>Easy Returns</h3>
                <p>10 Days Returns</p>
            </div>
        </div>

        <div class="icons">
            <i class="fa-solid fa-headset"></i>
            <div class="content">
                <h3>24/7 Support</h3>
                <p>Call Us Anytime</p>
            </div>
        </div>
    </section>

    <section class="featured" id="featured">
        
        <h1 class="heading"><span>Featured Books</span></h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa-solid fa-magnifying-glass"></a>
                        <a href="#" class="fa-regular fa-heart"></a>
                        <a href="#" class="fa-regular fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="./sfx/images/mistborn.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Featured Books</h3>
                        <div class="price">15.99 <span>$20.99</span></div>
                        <a href="#" class="btn1">Add to Cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa-solid fa-magnifying-glass"></a>
                        <a href="#" class="fa-regular fa-heart"></a>
                        <a href="#" class="fa-regular fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="./sfx/images/mistborn2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Featured Books</h3>
                        <div class="price">15.99 <span>$20.99</span></div>
                        <a href="#" class="btn1">Add to Cart</a>
                    </div>
                </div>
                
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa-solid fa-magnifying-glass"></a>
                        <a href="#" class="fa-regular fa-heart"></a>
                        <a href="#" class="fa-regular fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="./sfx/images/mistborn3.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Featured Books</h3>
                        <div class="price">15.99 <span>$20.99</span></div>
                        <a href="#" class="btn1">Add to Cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa-solid fa-magnifying-glass"></a>
                        <a href="#" class="fa-regular fa-heart"></a>
                        <a href="#" class="fa-regular fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="./sfx/images/hunger.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Featured Books</h3>
                        <div class="price">15.99 <span>$20.99</span></div>
                        <a href="#" class="btn1">Add to Cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa-solid fa-magnifying-glass"></a>
                        <a href="#" class="fa-regular fa-heart"></a>
                        <a href="#" class="fa-regular fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="./sfx/images/hunger2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Featured Books</h3>
                        <div class="price">15.99 <span>$20.99</span></div>
                        <a href="#" class="btn1">Add to Cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa-solid fa-magnifying-glass"></a>
                        <a href="#" class="fa-regular fa-heart"></a>
                        <a href="#" class="fa-regular fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="./sfx/images/hunger3.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Featured Books</h3>
                        <div class="price">15.99 <span>$20.99</span></div>
                        <a href="#" class="btn1">Add to Cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa-solid fa-magnifying-glass"></a>
                        <a href="#" class="fa-regular fa-heart"></a>
                        <a href="#" class="fa-regular fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="./sfx/images/lotr.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Featured Books</h3>
                        <div class="price">15.99 <span>$20.99</span></div>
                        <a href="#" class="btn1">Add to Cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa-solid fa-magnifying-glass"></a>
                        <a href="#" class="fa-regular fa-heart"></a>
                        <a href="#" class="fa-regular fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="./sfx/images/lotr2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Featured Books</h3>
                        <div class="price">15.99 <span>$20.99</span></div>
                        <a href="#" class="btn1">Add to Cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa-solid fa-magnifying-glass"></a>
                        <a href="#" class="fa-regular fa-heart"></a>
                        <a href="#" class="fa-regular fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="./sfx/images/lotr3.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Featured Books</h3>
                        <div class="price">15.99 <span>$20.99</span></div>
                        <a href="#" class="btn1">Add to Cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa-solid fa-magnifying-glass"></a>
                        <a href="#" class="fa-regular fa-heart"></a>
                        <a href="#" class="fa-regular fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="./sfx/images/alice.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Featured Books</h3>
                        <div class="price">15.99 <span>$20.99</span></div>
                        <a href="#" class="btn1">Add to Cart</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </section>

    <section class="newsletter">
        <div class="news">
            <img src="./sfx/images/newsletter.svg" alt="">
        </div>
        <form action="">
            <h3>Subscribe for Latest Updates</h3>
            <input type="email" name="" placeholder="Enter your Email" id="" class="box">
            <input type="submit" value="Subscribe" class="btn">
        </form>
    </section>

    <section class="arrivals" id="arrivals">

        <h1 class=heading> <span>New Arrivals</span> </h1>

        <div class="arrivals-slider">

            <div class="wraper">

                <a href="#" class="box">
                    <div class="image">
                        <img src="./sfx/images/alice.png" alt="">
                    </div>
                    <div class="content">
                        <h3>New Arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                    </div>
                </a>

            </div>

        </div>

    </section>

    <?php 
        include './includes/footer.php';
        footer();
    ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>