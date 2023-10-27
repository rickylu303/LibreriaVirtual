<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Library</title>
    <link rel="stylesheet" href="../sfx/contact.css">
    <link rel="stylesheet" href="../sfx/header.css">
    <link rel="stylesheet" href="../sfx/footer.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<body>
    <nav>
        <div class="logo">VirtualLibrary</div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fa-solid fa-bars"></i>
        </label>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="./category.php">Category</a></li>
            <li><a href="./about.php">About</a></li>
            <li><a class="active" href="./contact.php">Contact</a></li>
            <li><a href="./login.php">Login <i class="fa-regular fa-user"></i> </a></li>
        </ul>
    </nav>

    <div class="contactUs">
        <div class="title">
            <h2>Get in Touch</h2>
        </div>
        <div class="contactBox">
            <!--Form-->
            <div class="contact form">
                <h3>Send a Message</h3>
                <form action="">
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>First Name</span>
                                <input type="text" placeholder="First Name" required>
                            </div>
                            <div class="inputBox">
                                <span>Last Name</span>
                                <input type="text" placeholder="Last Name" required>
                            </div>
                        </div>

                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="email" placeholder="example@email.com" required>
                            </div>
                            <div class="inputBox">
                                <span>Phone</span>
                                <input type="tel" placeholder="+888-888-8888" required>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <span>Message</span>
                                <textarea placeholder="Write your message here..."></textarea>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" value="Send">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!--Info Box-->
            <div class="contact info">
                <h3>Contact Info</h3>
                <div class="infoBox">
                    <div>
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <p>Bello Horizonte, Managua <br>Nicaragua</p>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <a href="mailto:virtuallibrary@gmail.com">virtuallibrary@gmail.com</a>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-phone"></i></span>
                        <a href="tel:+50588888888">+505 8888-8888</a>
                    </div>
                    <ul class="sci">
                        <li><a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/"><i class="fa-brands fa-square-instagram"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="fa-brands fa-square-x-twitter"></i></a></li>
                        <li><a href="https://www.pinterest.com/"><i class="fa-brands fa-square-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>

            <!--Map-->
            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249661.3512590253!2d-86.37627124786377!3d12.114984326568692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f71560dd907880b%3A0x6c5ef4a2144f4c6a!2sManagua!5e0!3m2!1ses!2sni!4v1698379984562!5m2!1ses!2sni" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <?php 
        include '../includes/footer_view.php';
        footer_view();
    ?>
</body>
</html>