<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Virtual Library</title>
    <link rel="stylesheet" href="../sfx/dashboard.css">
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
                    <a href="" class="active"><span class="fa-solid fa-igloo"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href=""><span class="fa-solid fa-users"></span>
                    <span>Customers</span></a>
                </li>
                <li>
                    <a href=""><span class="fa-solid fa-clipboard-list"></span>
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

        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="fa-solid fa-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>79</h1>
                        <span>Books</span>
                    </div>
                    <div>
                        <span class="fa-solid fa-clipboard-list"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>124</h1>
                        <span>Orders</span>
                    </div>
                    <div>
                        <span class="fa-solid fa-bag-shopping"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>$6k</h1>
                        <span>Income</span>
                    </div>
                    <div>
                        <span class="fa-brands fa-google-wallet"></span>
                    </div>
                </div>
            </div>

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Books</h3>

                            <button>See all <span class="fa-solid fa-right-long"></span> </button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Book Title</td>
                                            <td>Editorial</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Alice in Wonderland</td>
                                            <td>Susaeta</td>
                                            <td>
                                                <span class="status purple"></span>
                                                review
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hunger Games</td>
                                            <td>Scholastic Press</td>
                                            <td>
                                                <span class="status pink"></span>
                                                in progress
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hunger Games 2</td>
                                            <td>Scholastic Press</td>
                                            <td>
                                                <span class="status orange"></span>
                                                pending
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Hunger Games 3</td>
                                            <td>Scholastic Press</td>
                                            <td>
                                                <span class="status purple"></span>
                                                review
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mistborn The Final Empire</td>
                                            <td>House Grupo Editorial</td>
                                            <td>
                                                <span class="status pink"></span>
                                                in progress
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mistborn The Well Ascension</td>
                                            <td>House Grupo Editorial</td>
                                            <td>
                                                <span class="status orange"></span>
                                                pending
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mistborn The Hero of Ages</td>
                                            <td>House Grupo Editorial</td>
                                            <td>
                                                <span class="status purple"></span>
                                                review
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>LOTR Fellowship of the Ring</td>
                                            <td>Del Rey Books</td>
                                            <td>
                                                <span class="status pink"></span>
                                                in progress
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>LOTR The Rings of Power</td>
                                            <td>Del Rey Books</td>
                                            <td>
                                                <span class="status orange"></span>
                                                pending
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>New customer</h3>

                            <button>See all <span class="fa-solid fa-right-long"></span> </button>
                        </div>

                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="../sfx/images/userm.svg" width="40px" height="40px" alt="">
                                    <div class="contact">
                                        <h4>Gabriel Flores</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div>
                                    <span class="fa-solid fa-circle-user"></span>
                                    <span class="fa-solid fa-comment"></span>
                                    <span class="fa-solid fa-phone"></span>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="../sfx/images/userf.svg" width="40px" height="40px" alt="">
                                    <div class="contact">
                                        <h4>Scarleth Urbina</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div>
                                    <span class="fa-solid fa-circle-user"></span>
                                    <span class="fa-solid fa-comment"></span>
                                    <span class="fa-solid fa-phone"></span>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="../sfx/images/userm.svg" width="40px" height="40px" alt="">
                                    <div class="contact">
                                        <h4>Tyrone Reyes</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div>
                                    <span class="fa-solid fa-circle-user"></span>
                                    <span class="fa-solid fa-comment"></span>
                                    <span class="fa-solid fa-phone"></span>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="../sfx/images/userf.svg" width="40px" height="40px" alt="">
                                    <div class="contact">
                                        <h4>Fabiola Perez</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div>
                                    <span class="fa-solid fa-circle-user"></span>
                                    <span class="fa-solid fa-comment"></span>
                                    <span class="fa-solid fa-phone"></span>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="../sfx/images/userm.svg" width="40px" height="40px" alt="">
                                    <div class="contact">
                                        <h4>Leonardo Barahona</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div>
                                    <span class="fa-solid fa-circle-user"></span>
                                    <span class="fa-solid fa-comment"></span>
                                    <span class="fa-solid fa-phone"></span>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="../sfx/images/userf.svg" width="40px" height="40px" alt="">
                                    <div class="contact">
                                        <h4>Laura Gradiz</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div>
                                    <span class="fa-solid fa-circle-user"></span>
                                    <span class="fa-solid fa-comment"></span>
                                    <span class="fa-solid fa-phone"></span>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>

        </main>
    </div>

</body>
</html>