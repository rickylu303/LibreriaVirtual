<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Library</title>
    <link rel="stylesheet" href="../sfx/styles.css">
    <link rel="stylesheet" href="../sfx/header.css">
    <link rel="stylesheet" href="../sfx/footer.css">
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
            <li><a class="active" href="./about.php">About</a></li>
            <li><a href="./contact.php">Contact</a></li>
            <li><a href="./login.php">Login <i class="fa-regular fa-user"></i> </a></li>
        </ul>
    </nav>



    <?php 
        include '../includes/footer_view.php';
        footer_view();
    ?>
</body>
</html>