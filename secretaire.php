<!DOCTYPE html>

<html>
    <head>
        <meta charset = "UTF-8">
        <title> Espace Secrétaire </title>
        <link rel = "stylesheet" href = "designe.css">
    </head>

    <body>
        <header>
            <h1>Espace Secrétaire</h1>
            <img src = "img2.jpeg" id = "logo">
            <img src = "img2.jpeg" id = "logo2">
    </header>

    <!-- Afficher l'accueil -->
    <nav>
            <ul>
                <li> <a href = "accueil.html"> Accueil </a> </li>
            </ul>

    </nav>

    <?php
    include("connexion_projet.php");
                $con = connect();
                if (!$con)
                {
                echo "Probleme connexion a la base";
                exit;
                }
    ?>

    <h2> Accès à votre espace personnel : </h2>
    <form action = "espace_perso_sec.php" method = POST>
        <select name = "secretaires[]">

            <?php

                $sql_sec = "select noms, prenoms from secretaire;";
                $resultat_sec = pg_query($sql_sec);

                if (!$resultat_sec)
                {
                    echo "Probleme lors du lancement de la requete";
                    exit;
                }

                $ligne_sec = pg_fetch_array($resultat_sec);

                while ($ligne_sec)
                {
                    echo "<option value = '".$ligne_sec['noms'].' '.$ligne_sec['prenoms']."'>".$ligne_sec['noms'].' '.$ligne_sec['prenoms']."</option>";
                    $ligne_sec = pg_fetch_array($resultat_sec);
                }

            ?>
        </select> <br/> <br/>

        <input type = "submit" value = "Valider">
    <!-- Ajouter d'autres fonctionnalités spécifiques pour la secrétaire ici -->

</body>
</html>
