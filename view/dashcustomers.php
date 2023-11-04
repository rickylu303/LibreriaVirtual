<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Virtual Library</title>
    <link rel="stylesheet" href="../sfx/dashcustomers.css">
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
                    <a href="./dashcustomers.php" class="active"><span class="fa-solid fa-users"></span>
                    <span>Customers</span></a>
                </li>
                <li>
                    <a href="./dashbooks.php"><span class="fa-solid fa-clipboard-list"></span>
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
                        <h1>65</h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="fa-solid fa-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>15</h1>
                        <span>New Customers</span>
                    </div>
                    <div>
                        <span class="fa-solid fa-user-group"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>20</h1>
                        <span>Usual Customers</span>
                    </div>
                    <div>
                        <span class="fa-solid fa-users-line"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>30</h1>
                        <span>Casual Customers</span>
                    </div>
                    <div>
                        <span class="fa-solid fa-users-viewfinder"></span>
                    </div>
                </div>
            </div>

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Customers</h3>

                            <button>See all <span class="fa-solid fa-right-long"></span> </button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>First Name</td>
                                            <td>Last Name</td>
                                            <td>Email</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                Gabriel
                                            </td>
                                            <td class="lastname">Flores</td>
                                            <td>
                                                <img src="../sfx/images/email.svg" width="30px" height="20px" alt="">
                                                gabrielfl123@gmail.com
                                            </td>
                                            <td>
                                                <span class="status green"></span>
                                                Active
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                Tyrone
                                            </td>
                                            <td class="lastname">Reyes</td>
                                            <td>
                                                <img src="../sfx/images/email.svg" width="30px" height="20px" alt="">
                                                tyrone321@gmail.com
                                            </td>
                                            <td>
                                                <span class="status red"></span>
                                                Inactive
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../sfx/images/userf.svg" width="30px" height="30px" alt="">
                                                Scarleth
                                            </td>
                                            <td class="lastname">Urbina</td>
                                            <td>
                                                <img src="../sfx/images/email.svg" width="30px" height="20px" alt="">
                                                scarlethurb1@gmail.com
                                            </td>
                                            <td>
                                                <span class="status red"></span>
                                                Inactive
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="../sfx/images/userf.svg" width="30px" height="30px" alt="">
                                                Fabiola
                                            </td>
                                            <td class="lastname">Perez</td>
                                            <td>
                                                <img src="../sfx/images/email.svg" width="30px" height="20px" alt="">
                                                fabiperez12@gmail.com
                                            </td>
                                            <td>
                                                <span class="status red"></span>
                                                Inactive
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                Leonardo
                                            </td>
                                            <td class="lastname">Barahona</td>
                                            <td>
                                                <img src="../sfx/images/email.svg" width="30px" height="20px" alt="">
                                                leonel123@gmail.com
                                            </td>
                                            <td>
                                                <span class="status red"></span>
                                                Inactive
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../sfx/images/userf.svg" width="30px" height="30px" alt="">
                                                Laura
                                            </td>
                                            <td class="lastname">Gradiz</td>
                                            <td>
                                                <img src="../sfx/images/email.svg" width="30px" height="20px" alt="">
                                                laug23@gmail.com
                                            </td>
                                            <td>
                                                <span class="status red"></span>
                                                Inactive
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                Kevin
                                            </td>
                                            <td class="lastname">Guerrero</td>
                                            <td>
                                                <img src="../sfx/images/email.svg" width="30px" height="20px" alt="">
                                                keving123@gmail.com
                                            </td>
                                            <td>
                                                <span class="status red"></span>
                                                Inactive
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../sfx/images/userf.svg" width="30px" height="30px" alt="">
                                                Grecia
                                            </td>
                                            <td class="lastname">Guzman</td>
                                            <td>
                                                <img src="../sfx/images/email.svg" width="30px" height="20px" alt="">
                                                greciaguz123@gmail.com
                                            </td>
                                            <td>
                                                <span class="status red"></span>
                                                Inactive
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                Fenner
                                            </td>
                                            <td class="lastname">Mena</td>
                                            <td>
                                                <img src="../sfx/images/email.svg" width="30px" height="20px" alt="">
                                                fennermena123@gmail.com
                                            </td>
                                            <td>
                                                <span class="status red"></span>
                                                Inactive
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

                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>All Customers</h3>

                            <button>See all <span class="fa-solid fa-right-long"></span> </button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>First Name</td>
                                            <td>Last Name</td>
                                            <td>Email</td>
                                            <td>Update</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="../sfx/images/userf.svg" width="30px" height="30px" alt="">
                                                Fabiola
                                            </td>
                                            <td class="lastname">Perez</td>
                                            <td>
                                                <img src="../sfx/images/email.svg" width="30px" height="20px" alt="">
                                                fabiperez12@gmail.com
                                            </td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                Fenner
                                            </td>
                                            <td class="lastname">Mena</td>
                                            <td>
                                                <img src="../sfx/images/email.svg" width="30px" height="20px" alt="">
                                                fennermena123@gmail.com
                                            </td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                Gabriel
                                            </td>
                                            <td class="lastname">Flores</td>
                                            <td>
                                                <img src="../sfx/images/email.svg" width="30px" height="20px" alt="">
                                                gabrielfl123@gmail.com
                                            </td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="../sfx/images/userf.svg" width="30px" height="30px" alt="">
                                                Grecia
                                            </td>
                                            <td class="lastname">Guzman</td>
                                            <td>
                                                <img src="../sfx/images/email.svg" width="30px" height="20px" alt="">
                                                greciaguz123@gmail.com
                                            </td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                Kevin
                                            </td>
                                            <td class="lastname">Guerrero</td>
                                            <td>
                                                <img src="../sfx/images/email.svg" width="30px" height="20px" alt="">
                                                keving123@gmail.com
                                            </td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="../sfx/images/userf.svg" width="30px" height="30px" alt="">
                                                Laura
                                            </td>
                                            <td class="lastname">Gradiz</td>
                                            <td>
                                                <img src="../sfx/images/email.svg" width="30px" height="20px" alt="">
                                                laug23@gmail.com
                                            </td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                Leonardo
                                            </td>
                                            <td class="lastname">Barahona</td>
                                            <td>
                                                <img src="../sfx/images/email.svg" width="30px" height="20px" alt="">
                                                leonel123@gmail.com
                                            </td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="../sfx/images/userf.svg" width="30px" height="30px" alt="">
                                                Scarleth
                                            </td>
                                            <td class="lastname">Urbina</td>
                                            <td>
                                                <img src="../sfx/images/email.svg" width="30px" height="20px" alt="">
                                                scarlethurb1@gmail.com
                                            </td>
                                            <td>
                                                <a href="" class="edit">Edit</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="../sfx/images/userm.svg" width="30px" height="30px" alt="">
                                                Tyrone
                                            </td>
                                            <td class="lastname">Reyes</td>
                                            <td>
                                                <img src="../sfx/images/email.svg" width="30px" height="20px" alt="">
                                                tyrone321@gmail.com
                                            </td>
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
                            <h3>Usual Customers</h3>

                            <button>See all <span class="fa-solid fa-right-long"></span> </button>
                        </div>

                        <div class="card-body">
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
                        </div>    
                    </div>
                </div>

            </div>
        </main>
    </div>

</body>
</html>