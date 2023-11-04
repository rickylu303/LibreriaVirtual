<?php
    function nav() {
        session_start();
        $user_email = isset($_SESSION['useremail']) ? $_SESSION['useremail'] : null;
        $user_name = isset($_SESSION['username']) ? $_SESSION['username'] : null;
        ?> 
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
                <?php if($user_name != null){ ?> <li><a href="./view/login.php"><?php echo $user_name ?> <i class="fa-regular fa-user"></i> </a></li> <?php }
                else{?> <li><a href="./view/login.php">Login <i class="fa-regular fa-user"></i> </a></li> <?php } ?>
            </ul>
        </nav>
    <?php }
?>