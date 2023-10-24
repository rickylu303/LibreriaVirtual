<?php
    function nav() { ?> 
        <nav>
            <div class="logo">VirtualLibrary</div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </label>
            <ul>
                <li><a class="active" href="./index.php">Home</a></li>
                <li><a href="./view/category.php">Category</a></li>
                <li><a href="./view/about.php">About</a></li>
                <li><a href="./view/contact.php">Contact</a></li>
                <li><a href="./view/login.php">Login <i class="fa-regular fa-user"></i> </a></li>
            </ul>
        </nav>
    <?php }
?>