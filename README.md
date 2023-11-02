# LibreriaVirtual

<label id="icon">
    <i class="fa-solid fa-bars"></i>
</label>

<?php
    function head() { ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Virtual Library</title>
            <link rel="stylesheet" href="../sfx/header.css">
            <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
        </head>
        <body>
            <nav>
                <div class="logo">Brand</div>
                <input type="checkbox" id="click">
                <label for="click" class="menu-btn">
                    <i class="fa-solid fa-bars"></i>
                </label>
                <ul>
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Login <i class="fa-regular fa-user"></i> </a></li>
                </ul>
            </nav>
        </body>
        </html>
    <?php }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../sfx/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<body>
    <footer>
        <div class="footerContainer">
            <div class="socialIcons">
                <a href=""><i class="fa-brands fa-square-facebook"></i></a>
                <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                <a href=""><i class="fa-brands fa-square-x-twitter"></i></a>
                <a href=""><i class="fa-brands fa-square-google-plus"></i></a>
                <a href=""><i class="fa-brands fa-square-youtube"></i></a>
            </div>
            <div class="footerNav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>
        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2023; Designed by <span class="designer"> Starlight Team</p>
        </div>
    </footer>

#next, #prev{
    position: absolute;
    top: 40%;
    color: var(--white);
    background-color: transparent;
    border: none;
    font-size: xxx-large;
    font-weight: bold;
    left: 50px;
}

#next{
    left: unset;
    right: 50px;
}

</body>
</html>