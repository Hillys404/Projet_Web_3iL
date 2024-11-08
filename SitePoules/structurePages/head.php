<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <?php 
        $pageName = "Accueil";
        switch (basename($_SERVER['PHP_SELF'])) {
            case "index.php":
                echo "<title>Accueil</title>
                <meta name='description' content='page d'accueil du site des poules'/>";
                break;
            case "contact.php":
                echo "<title>Contact</title>
                <meta name='description' content='page de contact'/>";
                break;
            case "description.php":
                echo "<title>Description</title>
                <meta name='description' content='page de description des poules'/>";
                break;
            case "administration.php":
                echo "<title>Administration</title>
                <meta name='description' content='connexion administrateur'/>";
                break;
            case "dashboardAdministrateur.php":
                echo "<title>Dashboard Administrateur</title>
                <meta name='description' content='gestion du site'/>";
            break;
        }
    ?>

    <link href="../css/polices.css" rel="stylesheet"/>
    <link href="../css/style.css" rel="stylesheet"/>
    <link href="../css/form.css" rel="stylesheet"/>
    <link href="../css/mediaQueries.css" rel="stylesheet" />
    <link href="../css/print.css" media="print" rel="stylesheet"/>
    <meta name="keywords" content="animaux, animal, volaille, poulet, poules, poussins"/>
    <meta name="robots" content="index, follow"/>
</head>