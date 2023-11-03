<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Virtual Library</title>
    <link rel="stylesheet" href="../sfx/newauthor.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <a href="../index.php"><h2><span class="fa-brands fa-accusoft"></span> <span>VirtualLibrary</span></h2></a>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="./dashboard.php"><span class="fa-solid fa-igloo"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href=""><span class="fa-solid fa-users"></span>
                    <span>Customers</span></a>
                </li>
                <li>
                    <a href="./dashbooks.php" class="active"><span class="fa-solid fa-clipboard-list"></span>
                    <span>Books </span></a>
                </li>
                <li>
                    <a href=""><span class="fa-solid fa-bag-shopping"></span>
                    <span>Orders</span></a>
                </li>
                <li>
                    <a href=""><span class="fa-solid fa-receipt"></span>
                    <span>Inventory</span></a>
                </li>
                <li>
                    <a href=""><span class="fa-solid fa-circle-user"></span>
                    <span>Accounts</span></a>
                </li>
                <li>
                    <a href=""><span class="fa-solid fa-clipboard-list"></span>
                    <span>Tasks</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="fa-solid fa-bars"></span>
                </label>

                Dashboard
            </h2>

            <div class="search-wrapper">
                <span class="fa-solid fa-magnifying-glass"></span>
                <input type="search" placeholder="Search here" />
            </div>

            <div class="user-wrapper">
                <img src="../sfx/images/userm.svg" width="40px" height="40px" alt="">
                <div>
                    <h4>Gabriel Flores</h4>
                    <small>Super admin</small>
                </div>
            </div>
        </header>

        <div class="book-container">
            <h1 class="h1-title">ADD NEW AUTHOR</h1>
            <p>Have any new author? Add the new author here!
                Submit the form!
            </p>
            <form action="">
                <div class="row">
                    <div class="column">
                        <label class="label1" for="fname">First Name</label>
                        <input class="input1" type="text" id="fname" placeholder="First Name">
                    </div>
                    <div class="column">
                        <label class="label1" for="lname">Last Name</label>
                        <input class="input1" type="text" id="lname" placeholder="Last Name">
                    </div>
                </div>

                <div class="row">
                    <div class="column">
                        <label class="label1" for="country">Country</label>
                        <input class="input1" type="text" id="country" placeholder="Country">
                    </div>
                    <div class="column">
                        <label class="label1" for="birth">Birth Date</label>
                        <input class="input1" type="date" id="birth" placeholder="10-1-2000">
                    </div>
                </div>

                <div class="row">
                    <div class="column">
                        <label class="label1" for="issue">Description</label>
                        <textarea id="issue" placeholder="Describe your description here" rows="3"></textarea>
                    </div>
                </div>
                <a href="" class="button1">Submit</a>
            </form>
        </div>
    </div>
</body>
</html>