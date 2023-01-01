<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>EcoSphere - Shop</title>
        <meta name="viewport" content="width=device-width">
        <link href="view\style\general.css" rel="stylesheet" type="text/css">
        <link href="view\style\header-footer.css" rel="stylesheet" type="text/css">
        <link href="view\style\mainSection.css" rel="stylesheet" type="text/css">
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro|Nunito|Glegoo" rel="stylesheet">
        <!-- Fontawesome -->
        <script src="view\js\fontawesome-all.min.js"></script>
        <!-- Icon -->
        <link href="view\img\icon.png" rel="icon">
    </head>
    <body>
<header>
    <div id="info-bar">
        <p>My wonderful platform</p>
    </div>

    <div id="banner-bloc">
        <h1>TP Authentification et MVC</h1>
    </div>

    <div id="account_bar">
                <div class="connection center">
                <?php if (isset($_SESSION['user'])) { ?> <div class="text">Bonjour <?php echo $_SESSION['user'] ?></div>  <?php } ?>

                <?php if (isset($_SESSION['user'])) { ?> 
                    <a href="./index.php?ctrl=user&action=logout" class="no-deco" title="Login or create account">
                <i class="fas fa-user"></i>
                <div class="text">Logout</div>
            </a>

                <?php } else { ?>
                    <a href="./index.php?ctrl=user&action=login" class="no-deco" title="Login or create account">
                    <i class="fas fa-user"></i>
                    <div class="text">Login</div>
                </a>

                <?php } ?>
           
        </div>
            </div>

    <ul id="menu_bar">
        <?php $path = ""; if(!isset($_SESSION['user'])) {$path = "unauthorized";}else{ $path = "userList"; } ?><a href="./index.php?ctrl=user&action=<?php echo $path; ?>" class="no-deco"><li>Liste des utilisateurs</li></a>
        <a href="./" class="no-deco"><li>Le mémoire</li></a>
        <a href="./" class="no-deco"><li>La soutenance</li></a>
        <a href="./" class="no-deco"><li>Le carnet de liaison</li></a>
        <a href="./" class="no-deco"><li>Les espaces de travail</li></a>
    </ul>
</header>
