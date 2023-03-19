<?php
require_once "./App/config/parameters.php";
require_once "./autoloader.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/styles/style.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/styles/normalize.css">
    <script src="https://kit.fontawesome.com/cc73bbce15.js" crossorigin="anonymous"></script>
    <title>Hernan Website</title>
</head>

<body>

    <header>
        <nav>
            <ul class="principal-nav">
                <li class="page-name" id="page-name">
                    <i class="fa-solid fa-bars bar" id="bar"></i>
                    <div>
                        <div>
                            <i class="fa-sharp fa-solid fa-flag-usa"></i>
                            <a href="#">English System</a>
                        </div>
                        <p>Hernan Molinati</p>
                    </div>
                </li>
                <?php
                $categories = new CategoriesController();
                $categories->showMenu();
                ?>
            </ul>

            <ul class="user-nav">
                <li class="mesage">
                    <i class="fa-sharp fa-solid fa-comment"></i>
                </li>
                <li class="user" id="user">
                    <p>Franco Ignacio Moron</p>
                    <i class="fa-sharp fa-solid fa-user-graduate"></i>
                    <i class="fa-sharp fa-solid fa-caret-down"></i>
                    <ul class="dropdown" id="log-out">
                        <li><a href="#">Cerrar sesion</a></li>
                    </ul>
                </li>
            </ul>

        </nav>

    </header>

    <script src="./Public/script/header/header.js"></script>

</body>

</html>