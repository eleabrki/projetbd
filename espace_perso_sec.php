<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title> Espace Secrétaire </title>
        <link rel = "stylesheet" href = "designe.css">
    </head>
    <body>
        <header>
                <h1> Espace Secrétaire </h1>

                <img src = "img2.jpeg" id = "logo">
                <img src = "img2.jpeg" id = "logo2">
        </header>
        <nav> <!-- Afficher le planning de l'inspecteur -->
            <ul>
                <li> <a href = "accueil.html"> Accueil </a> </li>
                <li> <a href = "planning_inspecteur.php"> Voir le planning de l'inspecteur </a> </li>
            </ul>
        </nav>

        <h1> Votre espace personnel : </h1>

        <?php

        include("connexion_projet.php");
        $con = connect() ;
        if (!$con)
        {
        echo "Problème connexion à la base" ;
        exit ;
        }

    extract($_POST) ;

    echo "Bonjour Mme ou M.  " ;
    echo $secretaires[0]."." ;

    ?>

    <br/> <br/>

    <form action = "choisir_exploitation.php" method = POST>

    <h1> Ajout d'une inspection : </h1>

    Plante :
    <select name = "plante">

        <?php
            $sql_plt = "select nomp from typeplante" ;
            $resultat_plt = pg_query($sql_plt) ;

            if (!$resultat_plt)
            {
                echo "Problème lors du lancement de la requête" ;
                exit ;
            }

            $ligne_plt = pg_fetch_array($resultat_plt);

            while ($ligne_plt)
            {
                echo "<option value = '".$ligne_plt['nomp']."'>".$ligne_plt['nomp']."</option>";
                $ligne_plt = pg_fetch_array($resultat_plt);
            }

        ?>

        </select> <br/> <br/>

    Maladie :
    <select name = "maladie">

        <?php

            $sql_mal = "select nommal from maladie;";
            $resultat_mal = pg_query($sql_mal);

            if (!$resultat_mal)
            {
                echo "Problème lors du lancement de la requête" ;
                exit ;
            }

            $ligne_mal = pg_fetch_array($resultat_mal);

            while ($ligne_mal)
            {
                echo "<option value = '".$ligne_mal['nommal']."'>".$ligne_mal['nommal']."</option>";
                $ligne_mal = pg_fetch_array($resultat_mal);
            }

        ?>
        </select> <br/> <br/>

        <input type = "submit" value = "Valider">
        <br/> <br/>

</body>
</html>
