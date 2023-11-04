<?php
    include "../controller/connection.php";
    include "../controller/autorController.php";
    include "../controller/editorialController.php";

    $connection = (new Connection())->getConnection();

    $autorController = new autorController($connection);
    $editorialController = new editorialController($connection);
    $listAutores = $autorController->listAllAutors();
    $listEditorial = $editorialController->listAllEditoriales();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Virtual Library</title>
    <link rel="stylesheet" href="../sfx/newbook.css">
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
                    <a href="./dashbooks.php" class="sidebar-active"><span class="fa-solid fa-clipboard-list"></span>
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
            <h1 class="h1-title">ADD NEW BOOK</h1>
            <p>Have any new book? Add the new book here!
                Submit the form!
            </p>
            <form id="registrarLibro" action="">
                <div class="row">
                    <div class="column">
                        <label class="label1" for="title">Title</label>
                        <input class="input1" type="text" id="title" placeholder="Book Title">
                    </div>
                    <div class="column">
                        <label class="label1" for="author">Author</label>
                        <div class="dropdown">
                            <div class="select">
                                <span id="autorValue" idValue="" class="selected">Author</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="menu">
                                <?php
                                    foreach ($listAutores as $key => $autor) {
                                        echo '<li idValue="' . $autor['ID_autor'] . '">' . $autor['Nombre'] . ' ' . $autor['Apellido']  . '</li>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="column">
                        <label class="label1" for="editorial">Editorial</label>
                        <div class="dropdown">
                            <div class="select">
                                <span id="editorialValue" idValue="" class="selected">Editorial</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="menu">
                                <?php
                                    foreach ($listEditorial as $key => $editorial) {
                                        echo '<li idValue="' . $editorial['ID_editorial'] . '">' . $editorial['Nombre'] . '</li>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>

                    <div class="column">
                        <label class="label1" for="price">Price</label>
                        <input class="input1" type="type" id="price" placeholder="Price">
                    </div>
                </div>

                <div class="row">
                    <div class="column">
                        <label class="label1" for="sinopsis">Synopsis</label>
                        <textarea id="sinopsis" placeholder="Describe your synopsis here" rows="3"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="column">
                        <label class="label1" for="descripcion">Description</label>
                        <textarea id="descripcion" placeholder="Describe your description here" rows="3"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="column" id="container-upload">
                        <label class="label1" for="upload-file">Upload File (.PDF)</label>
                        <input type="file" id="file-input" multiple>
                        <label class="file-label" for="file-input">
                            <i class="fa-solid fa-arrow-up-from-bracket"></i>
                            &nbsp; Choose File to Upload
                        </label>
                        <div id="num-of-files">No Files Choosen</div>
                        <ul class="ul-upload" id="files-list"></ul>
                    </div>
                </div>

                <div class="row">
                    <div class="column" id="container-upload">
                        <label class="label1" for="upload-file">Upload Image (.PNG)</label>
                        <input type="file" id="file-input1" multiple>
                        <label class="file-label" for="file-input1">
                            <i class="fa-solid fa-arrow-up-from-bracket"></i>
                            &nbsp; Choose File to Upload
                        </label>
                        <div id="num-of-files1">No Files Choosen</div>
                        <ul class="ul-upload" id="files-list1"></ul>
                    </div>
                </div>

                <a id="saveBookButton" href="" class="button1">Submit</a>
            </form>
        </div>
    </div>
    <script src="../js/dropdown.js"></script>
    <script src="../js/uploadFile.js"></script>
    <script src="../js/dashbooksController.js"></script>
</body>
</html>