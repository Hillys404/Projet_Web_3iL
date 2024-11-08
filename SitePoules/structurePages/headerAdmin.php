<header>
    <div id="banner">
        <figure>
            <img src="../img/header.jpg" alt="Poule Harco" height="100" width="100" />
        </figure>
        <h1>La Terre des Poules</h1>
        <div id="burger-menu" class="burger-menu">
            <span>&#9776;</span>
        </div>
    </div>

    <?php
    $menuItems = [
        'Accueil' => '../administration/deconnexion.php',
        'Deconnexion' => '../administration/deconnexion.php',
    ];
    ?>
    <nav id="menu">
        <?php foreach ($menuItems as $label => $url):
        ?>
            <a href="<?php echo $url; ?>" class="menu-item"><?php echo $label; ?></a>
        <?php
        endforeach; 
        ?>
    </nav>
</header>