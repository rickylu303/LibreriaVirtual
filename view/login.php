<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Library</title>
    <link rel="stylesheet" href="../sfx/header.css">
    <link rel="stylesheet" href="../sfx/footer.css">
    <link rel="stylesheet" href="../sfx/login.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<body>
    <nav>
        <div class="logo"><span class="fa-brands fa-accusoft"></span> VirtualLibrary</div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fa-solid fa-bars"></i>
        </label>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="./category.php">Category</a></li>
            <li><a href="./about.php">About</a></li>
            <li><a href="./contact.php">Contact</a></li>
            <li><a class="active" href="./login.php">Login <i class="fa-regular fa-user"></i> </a></li>
        </ul>
    </nav>

    <div class="loginContainer">
        <div class="login">
            <div class="loginContent">
                <img src="../sfx/images/login1.svg" alt="">
            </div>
            <div class="loginForm">
                <h1>Login</h1>
                <form id="loginForm" action="">
                    <div class="tbox">
                        <i class="fa-regular fa-user"></i><input id="email" type="text" name="Email" placeholder="Email*" required>
                    </div>
                    <div class="tbox">
                        <i class="fa-solid fa-lock"></i><input id="password" type="password" name="Pass" placeholder="Password*" required>
                    </div>
                    <div class="pass"><a href="">Forgot Password?</a></div>
                    <button class="btn">Login</button>
                    <div id="erroMessage" class="errorRegister"></div>
                    <div class="signup-link">Not a member? <a href="./register.php">Signup Now</a></div>
                </form>
                <ul class="social">
                    <li>
                        <i class="fa-brands fa-square-facebook"></i>
                    </li>
                    <li>
                        <i class="fa-brands fa-square-instagram"></i>
                    </li>
                    <li>
                        <i class="fa-brands fa-square-x-twitter"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php 
        include '../includes/footer_view.php';
        footer_view();
    ?>

    <script src="../js/registerController.js"></script>
</body>
</html>