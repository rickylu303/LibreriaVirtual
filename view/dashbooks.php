<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Virtual Library</title>
    <link rel="stylesheet" href="../sfx/dashbooks.css">
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
                    <a href="./dashcustomers.php"><span class="fa-solid fa-users"></span>
                    <span>Customers</span></a>
                </li>
                <li>
                    <a href="./dashbooks.php" class="active"><span class="fa-solid fa-clipboard-list"></span>
                    <span>Books </span></a>
                </li>
                <li>
                    <a href="./dashorders.php"><span class="fa-solid fa-bag-shopping"></span>
                    <span>Orders</span></a>
                </li>
                <li>
                    <a href="./dashaccounts.php"><span class="fa-solid fa-circle-user"></span>
                    <span>Accounts</span></a>
                </li>
                <li>
                    <a href="./dashfaqs.php"><span class="fa-solid fa-circle-info"></span>
                    <span> Faqs</span></a>
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
                        <h1>30</h1>
                        <span>Books</span>
                    </div>
                    <div>
                        <span class="fa-solid fa-book"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>15</h1>
                        <span>Authors</span>
                    </div>
                    <div>
                        <span class="fa-solid fa-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>10</h1>
                        <span>Editorials</span>
                    </div>
                    <div>
                        <span class="fa-solid fa-clipboard-list"></span>
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
                            
                            <a href="./newbook.php" class="button">Add New <span class="fa-solid fa-plus +"></span> </a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Book Title</td>
                                            <td>Authors</td>
                                            <td>Editorials</td>
                                            <td>Update</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Alice in Wonderland</td>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                Lewis Carroll
                                            </td>
                                            <td>Susaeta</td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hunger Games</td>
                                            <td>
                                                <img src="../sfx/images/userf.svg" width="30px" height="30px" alt="">
                                                Suzanne Collins
                                            </td>
                                            <td>Scholastic Press</td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hunger Games 2</td>
                                            <td>
                                                <img src="../sfx/images/userf.svg" width="30px" height="30px" alt="">
                                                Suzanne Collins
                                            </td>
                                            <td>Scholastic Press</td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Hunger Games 3</td>
                                            <td>
                                                <img src="../sfx/images/userf.svg" width="30px" height="30px" alt="">
                                                Suzanne Collins
                                            </td>
                                            <td>Scholastic Press</td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mistborn The Final Empire</td>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                Brandon Sanderson
                                            </td>
                                            <td>House Grupo Editorial</td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mistborn The Well Ascension</td>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                Brandon Sanderson
                                            </td>
                                            <td>House Grupo Editorial</td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mistborn The Hero of Ages</td>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                Brandon Sanderson
                                            </td>
                                            <td>House Grupo Editorial</td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>LOTR Fellowship of the Ring</td>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                J. R. R. Tolkien
                                            </td>
                                            <td>Del Rey Books</td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>LOTR The Rings of Power</td>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                J. R. R. Tolkien
                                            </td>
                                            <td>Del Rey Books</td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
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
                            <h3>New Authors</h3>

                            <a href="./newauthor.php" class="button">Add New <span class="fa-solid fa-plus +"></span> </a>
                        </div>

                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="../sfx/images/userm.svg" width="40px" height="40px" alt="">
                                    <div class="contact">
                                        <h4>Lewis Caroll</h4>
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
                                        <h4>Suzanne Collins</h4>
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
                                        <h4>Brandon Sanderson</h4>
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
                                        <h4>J.R.R. Tolkien</h4>
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
                                        <h4>David Lagercrantz</h4>
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

                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>All Books</h3>
                            
                             <a href="" class="button">See All <span class="fa-solid fa-right-long"></span> </a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Book Title</td>
                                            <td>Authors</td>
                                            <td>Editorials</td>
                                            <td>Update</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Alice in Wonderland</td>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                Lewis Carroll
                                            </td>
                                            <td>Susaeta</td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hunger Games</td>
                                            <td>
                                                <img src="../sfx/images/userf.svg" width="30px" height="30px" alt="">
                                                Suzanne Collins
                                            </td>
                                            <td>Scholastic Press</td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hunger Games 2</td>
                                            <td>
                                                <img src="../sfx/images/userf.svg" width="30px" height="30px" alt="">
                                                Suzanne Collins
                                            </td>
                                            <td>Scholastic Press</td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Hunger Games 3</td>
                                            <td>
                                                <img src="../sfx/images/userf.svg" width="30px" height="30px" alt="">
                                                Suzanne Collins
                                            </td>
                                            <td>Scholastic Press</td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mistborn The Final Empire</td>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                Brandon Sanderson
                                            </td>
                                            <td>House Grupo Editorial</td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mistborn The Well Ascension</td>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                Brandon Sanderson
                                            </td>
                                            <td>House Grupo Editorial</td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mistborn The Hero of Ages</td>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                Brandon Sanderson
                                            </td>
                                            <td>House Grupo Editorial</td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>LOTR Fellowship of the Ring</td>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                J. R. R. Tolkien
                                            </td>
                                            <td>Del Rey Books</td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>LOTR The Rings of Power</td>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                J. R. R. Tolkien
                                            </td>
                                            <td>Del Rey Books</td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
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
                            <h3>New Editorials</h3>

                            <a href="./neweditorial.php" class="button">Add New <span class="fa-solid fa-plus +"></span> </a>
                        </div>

                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img class="img-1" src="../sfx/images/editorial.svg" width="40px" height="40px" alt="">
                                    <div class="contact">
                                        <h4>Susaeta</h4>
                                        <small>España</small>
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
                                    <img class="img-1" src="../sfx/images/editorial.svg" width="40px" height="40px" alt="">
                                    <div class="contact">
                                        <h4>Scholastic Press</h4>
                                        <small>USA</small>
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
                                    <img class="img-1" src="../sfx/images/editorial.svg" width="40px" height="40px" alt="">
                                    <div class="contact">
                                        <h4>Random House Grupo Editorial</h4>
                                        <small>Mexico</small>
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
                                    <img class="img-1" src="../sfx/images/editorial.svg" width="40px" height="40px" alt="">
                                    <div class="contact">
                                        <h4>Del Rey Books</h4>
                                        <small>USA</small>
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
                                    <img class="img-1" src="../sfx/images/editorial.svg" width="40px" height="40px" alt="">
                                    <div class="contact">
                                        <h4>Alcion Editora</h4>
                                        <small>Argentina</small>
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