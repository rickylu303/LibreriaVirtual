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
            <li><a class="active" href="./category.php">Category</a></li>
            <li><a href="./about.php">About</a></li>
            <li><a href="./contact.php">Contact</a></li>
            <li><a href="./login.php">Login <i class="fa-regular fa-user"></i> </a></li>
        </ul>
    </nav>

    <div class="orderFilters">
        <div class="orderbyFilters">
            <a id="orderByDate" class="selectedOrder">New Books</a>
            <a id="orderByRate">Most Popular</a>
            <a id="orderBySell">Best Sellers</a>
            <a id="orderByFavorites">Most Valorated</a>
        </div>

        <div class="bookSearchBar">
            <input type="search" name="searchBookByName" placeholder="Book Name">
        </div>
    </div>

    <div id="bookCardsContainer" class="bookCardContainer">
        <div class="bookCard" bookId="-1" data-groups="accion,aventura">
            <img src="../sfx/images/mistborn.png" alt="Imagen 1">
            
            <div class="bookCardDetail">
                <h3 class="cardBookTitle">Titulo</h3>
                <p class="cardBookAutor">By Autor Desconocido</p>
                <div class="bookCardCalification">
                    <div class="calification">
                        <i class="fa-solid fa-star" style="color: #e5d738;"></i>
                        <i class="fa-solid fa-star" style="color: #e5d738;"></i>
                        <i class="fa-solid fa-star" style="color: #e5d738;"></i>
                        <i class="fa-regular fa-star" style="color: #e5d738;"></i>
                        <i class="fa-regular fa-star" style="color: #e5d738;"></i>
                    </div>

                    <div class="bookCardPrice">
                        <span>$18.24</span>
                    </div>
                </div>
                <p class="cardBookSinopsis">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis sint accusamus repudiandae nobis sapiente consectetur culpa recusandae deserunt, atque vel autem repellendus amet laudantium</p>

                <div class="cardBookButtons">
                    <a class="btnDetails" href="#">Details</a>
                    <a class="btnAddToCart" href="#">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
    

    <?php 
        include '../includes/footer_view.php';
        footer_view();
    ?>

    <script src="../js/categoriesController.js"></script>
</body>
</html>