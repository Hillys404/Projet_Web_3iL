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
        'Accueil' => '../index.php',
        'Description' => '../description/description.php',
        'Contact' => '../contact/contact.php',
    ];

    if (isset($_SESSION['userId'])) {
        $menuItems['Deconnexion'] = "../administration/deconnexion.php";
    } else {
        $menuItems['Connexion'] = '../administration/administration.php';
    }

    ?>
    <nav id="menu">
        <?php foreach ($menuItems as $label => $url):
            if (basename($_SERVER['PHP_SELF']) != basename($url)):
                ?>
                <a href="<?php echo $url; ?>" class="menu-item"><?php echo $label; ?></a>
            <?php endif;
        endforeach; ?>
    </nav>
</header>